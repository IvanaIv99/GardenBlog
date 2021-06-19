@extends("layouts.front")
@section("content")
    <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog d-flex flex-row clearfix">
                @foreach($top3posts as $post)
                        <div class="col-4">
                            @include('front.components.topPost')
                        </div>

                @endforeach
            </div><!-- end masonry -->
        </div>
    </section>

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div id="home-posts" class="blog-list clearfix">
                            @if($posts==null) <p>There is no posts for this category yet!</p> @endif
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
