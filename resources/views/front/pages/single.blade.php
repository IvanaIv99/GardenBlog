@extends("layouts.front")
@section("content")
    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 mx-auto ">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <span class="color-green"><a href="#" title="">{{$post->category->name}}</a></span>
{{--                            {{dd($post->category->name)}}--}}
                            <h3>{{$post->title}}</h3>
{{--{{dd($posts)}}--}}
                            <div class="blog-meta big-meta">
                                <small><a href="#" title="">{{ \Carbon\Carbon::parse($post->created_at)->format('F j Y, g:i a')}}</a></small>
                                <small><a href="" title="">by {{$post->user->first_name ." ". $post->user->last_name }}</a></small>
                                <small><a href="#" title=""><i class="fa fa-eye"></i> {{count($post->visits)}}</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->
            <p class="text-success">{{session('success')}}</p>
                        <div class="single-post-media">
                            <img src="{{asset('images/gardening/'.$post->thumbPhoto)}}" alt="" class="img-fluid">
                        </div><!-- end media -->

                        <div class="blog-content">
                            <div class="pp">

                               {!!$post->content!!}

                            </div><!-- end pp -->
                        </div><!-- end content -->


                        <hr class="invis1">

                        @include('front.components.about-post-author')

                        <hr class="invis1">


                        @include('front.components.comments')

                        <hr class="invis1">


                        @include('front.components.comment-form')

                    </div><!-- end page-wrapper -->
                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
