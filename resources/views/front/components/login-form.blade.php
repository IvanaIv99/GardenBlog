<div class="row d-flex justify-content-center">

    <div class="col-lg-5 offset-lg-2 mx-auto pb-5 ">
        <h2 class="text-center"><i class="fa fa-leaf bg-green"></i> Log In </h2>
        <form class="form-wrapper"  method="post"  action="{{route('login')}}">
            @csrf

            <input type="text" class="form-control" placeholder="Email address" name="email">
            @error('email')<p class="text-danger">{{$message}}</p>@enderror
            <input type="password" class="form-control" placeholder="Password" name="password">
            @error('password')<p class="text-danger">{{$message}}</p>@enderror

            <button type="submit" class="btn btn-primary">Log In <i class="fa fa-envelope-open-o "></i></button>

            @if(Session::has('error'))
                <div class="alert alert-danger mt-3">
                    {{session('error')}}
                </div>
            @endif



        </form>
     </div>

</div>

