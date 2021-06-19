<div id="wrapper">
{{--    <div class="collapse top-search" id="collapseExample">--}}
{{--        <div class="card card-block">--}}
{{--            <div class="newsletter-widget text-center">--}}
{{--                <form class="form-inline">--}}
{{--                    <input type="text" class="form-control" placeholder="What you are looking for?">--}}
{{--                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>--}}
{{--                </form>--}}
{{--            </div><!-- end newsletter -->--}}
{{--        </div>--}}
{{--    </div><!-- end top-search -->--}}

    <div class="topbar-section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                    <div class="topsocial">
                        @foreach($socials as $s)
                            <a href="{{$s->url}}" data-toggle="tooltip" data-placement="bottom" title="{{$s->name}}"><i class="fa {{$s->icon}}"></i></a>
                        @endforeach
                    </div><!-- end social -->
                </div><!-- end col -->

                <div class="col-lg-4 text-center">

                    @if(session()->has("user"))
                        <a class="font-weight-bold" href="{{route('logout')}}">Logout</a>
                    @else
                        <a href="{{route('loginForm')}}" class="font-weight-bold">LOG IN</a>
                    @endif
                </div><!-- end col -->

                <div class="col-lg-4 text-right">
                    @if(session()->has("user"))
                        <p class="font-weight-bold text-white"> {{ session()->get("user")->first_name ." " . session()->get("user")->last_name}}</p>
                    @endif
                </div>

            </div><!-- end row -->
        </div><!-- end header-logo -->
    </div><!-- end topbar -->
</div>
