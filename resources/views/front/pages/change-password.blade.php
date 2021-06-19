@extends("layouts.front")
@section("content")
    <section class=" mt-5">
        <div class="row">
            <div class="col-6 m-auto">
                <h1 class="text-center">Change password</h1>
                <form action="{{route('user.password.update',['id'=>$user->id])}}" method="post" class="form-wrapper">
                    @method('PATCH')
                    @csrf

                    <input type="password" class="form-control" placeholder="Current Password" name="current_password" >
                    <p class="text-danger">@error('current_password'){{$message}}@enderror</p>

                    <input type="password" class="form-control" placeholder="New Password" name="password" >
                    <p class="text-danger">@error('password'){{$message}}@enderror</p>


                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                    <p class="text-danger"> @error('password_confirmation'){{$message}}@enderror</p>

                    @if(Session::has('error'))
                        <div class="alert alert-danger mt-3">
                            {{session('error')}}
                        </div>
                    @endif


                    <button type="submit" class="btn btn-primary mt-4 mb-4">Change<i class="fa fa-envelope-open-o"></i></button>
                    <br/>
                </form>
            </div>
        </div>
    </section>
@endsection
