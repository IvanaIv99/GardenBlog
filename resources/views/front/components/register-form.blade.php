<div class="row d-flex justify-content-center">

    <div class="col-lg-5 offset-lg-2 mx-auto pb-5">
        <h2 class="text-center"><i class="fa fa-leaf bg-green"></i> REGISTER </h2>
        <form action="{{route('register')}}" method="POST" class="form-wrapper" enctype="multipart/form-data">
            @csrf

            @error('firstname')<p class="text-danger">{{$message}}</p>@enderror
            <input type="text" class="form-control" placeholder="First Name" name="firstname" >

            @error('lastname')<p class="text-danger">{{$message}}</p>@enderror
            <input type="text" class="form-control" placeholder="Last Name" name="lastname" >

            @error('email')<p class="text-danger">{{$message}}</p>@enderror
            <input type="text" class="form-control" placeholder="Email address" name="email" >

            @error('password')<p class="text-danger">{{$message}}</p>@enderror
            <input type="password" class="form-control" placeholder="Password" name="password" >
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" >

            <div class="form-check col-1">
                <input class="form-check-input" type="radio" name="gender" id="male-radio" value="male" checked>
                <label class="form-check-label" for="male-radio">
                    Male
                </label>
                <input class="form-check-input" type="radio" name="gender" id="female-radio" value="female">
                <label class="form-check-label" for="male-radio">
                    Female
                </label>
            </div>
            <input type="file" class="form-control" name="photo" >
            <button type="submit" class="btn btn-primary">Register <i class="fa fa-envelope-open-o"></i></button>
        </form>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get("success") }}
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get("error") }}
            </div>
        @endif

    </div>
</div>
