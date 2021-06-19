@extends("layouts.front")
@section("content")
    <section class="section wb">
        <div class="container">
            <div class="row d-flex flex-column align-items-center">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 div-profile-photo">
                    <img class="img-thumbnail" style="width: 200px;height: 200px;" src="{{asset('images/author.jpg')}}"><br/><br/>
                    <b class="text-center ">Ivana Ivanovic 49/18</b>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
