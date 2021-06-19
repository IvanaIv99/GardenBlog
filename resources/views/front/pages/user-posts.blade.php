@extends("layouts.front")
@section("content")

    <section class="section wb">

        <div class="container">
            <div class="row">
                <a href="{{route('add-post')}}" class="addButton p-2 text-white"> Add new post + </a>
            </div>
            <h3 class="text-success"> {{session('success')}} </h3>

            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-list clearfix">
                            @foreach($posts as $post)
                                @include('front.components.post')
                            @endforeach

                        </div><!-- end blog-list -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis">

                    {{$posts->links('vendor.pagination.default')}}
                </div><!-- end col -->


                @include('front.components.sidebar')


            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
