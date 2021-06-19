<div class="collapse navbar-collapse justify-content-md-center" id="Forest Timemenu">
    <ul class="navbar-nav">
{{--{{dd(session('user')->id )}}--}}
        @foreach($nav as $n)
            <li class="nav-item">
                <a class="nav-link color-green-hover" href="{{route($n->route)}}">{{$n->name}}</a>
            </li>
        @endforeach

        @if( session()->has('user') && session('user')->role_id == 1)
                @foreach($userNav as $un)

                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="{{route($un->route)}}">{{$un->name}}</a>
                    </li>

                @endforeach
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="{{route('myprofile',session('user')->id)}}">
                            My Profile
                        </a>
                    </li>

            @elseif(session()->has('user') && session('user')->role_id==2)
                @foreach($adminNav as $an)
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="admin/{{$an->route}}">{{$an->name}}</a>
                    </li>
                @endforeach
        @endif
    </ul>
</div>
