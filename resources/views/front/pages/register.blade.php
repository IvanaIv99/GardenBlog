@extends("layouts.front")
@section("content")
    <hr/>

    <div class="row ">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="text-center"><i class="fa fa-leaf bg-green"></i>Already have an account? <a href="{{route('loginForm')}}">LOG IN</a></h4>
        </div>
    </div>

    <hr/>

    @include('front.components.register-form')

@endsection
