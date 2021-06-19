<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">
        <div class="widget">
            <h2 class="widget-title">Search</h2>
            <form class="form-inline search-form">
                <div class="form-group">
                    <input type="text" class="form-control search-field" placeholder="Search on the site">
                </div>
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- end widget -->


        <div class="widget">
            <h2 class="widget-title">Sort</h2>
            <div class="link-widget">
                <ul>
                    <li>
                        <a class="sort" id="asc" href="#">Oldest</a>
                    </li>
                    <li>
                        <a class="sort" id="desc" href="#">Newest</a>
                    </li>
                </ul>
            </div><!-- end link-widget -->
        </div><!-- end widget -->


        <div class="widget">
            <h2 class="widget-title">Categories</h2>
            <div class="link-widget">
                <ul>
                    <li>
                        <a class="category" id="0" style="cursor: pointer;">All<span>({{$allposts}})</span>
                        </a>
                    </li>
                    @foreach($categories as $c)
                        <li>
                            <a class="category" id="{{$c->id}}" href="#">{{$c->name}}<span>{{$c->posts->count()}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div><!-- end link-widget -->
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Recent Posts</h2>
            <div class="blog-list-widget">

                    @foreach($top3posts as $top3)

                        <a href="{{route('single',["id"=>$top3->id])}}" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="w-100 justify-content-between">
                                <img src="{{asset('images/gardening/'.$top3->thumbPhoto)}}" alt="" class="img-fluid float-left">
                                <h5 class="mb-1">{{$top3->title}}</h5>
                                <small>{{ \Carbon\Carbon::parse($top3->created_at)->format('F j Y, g:i a')}}</small>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div><!-- end blog-list -->
        </div><!-- end widget -->


    </div><!-- end sidebar -->
</div><!-- end col -->
