@extends("layouts.front")
@section("content")
    <section class=" mt-5">
        <div class="row">
            <div class="col-6 m-auto">
                <h1 class="text-center">Edit profile</h1>
                <form action="{{route('user.update',$user->id)}}" method="post" class="form-wrapper" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf


                    @error('firstname'){{$message}}@enderror
                    <input type="text" class="form-control" placeholder="First Name" name="firstname" value="{{$user->first_name}}">

                    @error('lastname'){{$message}}@enderror
                    <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="{{$user->last_name}}" >

                    @error('email'){{$message}}@enderror
                    <input type="text" class="form-control" placeholder="Email address" name="email" value="{{$user->email}}">

{{--                    @error('password'){{$message}}@enderror--}}
{{--                    <input type="password" class="form-control" placeholder="New Password" name="password" >--}}
{{--                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" >--}}

                    <div class="form-check col-7 ">
                        <input class="form-check-input" type="radio" name="gender" id="male-radio" value="male" {{$user->gender == 'male' ? 'checked' : ''}}>
                        <label class="form-check-label mr-5" for="male-radio">
                            Male
                        </label>

                        <input class="form-check-input" type="radio" name="gender" id="female-radio" value="female" {{$user->gender == 'female' ? 'checked' : ''}} >
                        <label class="form-check-label" for="male-radio">
                            Female
                        </label>
                    </div>


                    <label class="form-check-label" for="user-bio">
                        Your biography:
                    </label>
                    <textarea class="form-control" name="bio" id="bio">
                    {{$user->bio}}
                    </textarea>

                    <div class="col-12 d-flex flex-column justify-content-center align-items-center ">
                        <img src="{{asset('images/profilePhotos/'.$user->photo)}}" alt="" class="col-3 img-thumbnail"/>
                        <input type="file" class="form-control col-3 " name="photo" value="">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4 mb-4">Edit<i class="fa fa-envelope-open-o"></i></button>
                    <br/>


                </form>

                <form method="post" action="{{route('user.delete',$user->id)}}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-primary mt-4 mb-4">DEACTIVATE ACCOUNT<i class="fa fa-envelope-open-o"></i></button>
                </form>
            </div>
        </div>
    </section>
@endsection
