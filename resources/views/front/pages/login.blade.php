@extends("layouts.front")
@section("content")
    <hr/>

    <div class="row ">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="text-center"><i class="fa fa-leaf bg-green"></i>Don't have an account? <a href="{{route('registerForm')}}">REGISTER</a></h4>
        </div>
    </div>

    <hr/>

    @include('front.components.login-form')

@endsection
