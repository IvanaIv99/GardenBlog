<div class="custombox authorbox clearfix">
    <h4 class="small-title">About author</h4>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <img src="{{asset('images/profilePhotos/'.$post->user->photo)}}" alt="" class="img-fluid rounded-circle">
        </div><!-- end col -->

        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <h4><a href="#">{{$post->user->first_name . $post->user->last_name }}</a></h4>
            <p>{{$post->user->bio}}</p>

            <div class="topsocial">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
            </div><!-- end social -->

        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end author-box -->
