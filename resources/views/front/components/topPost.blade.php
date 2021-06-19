<div class="masonry-box post-media">
    <img src="{{asset('images/gardening/'.$post->thumbPhoto)}}" alt="" class="img-fluid">
    <div class="shadoweffect">
        <div class="shadow-desc">
            <div class="blog-meta">
                <span class="bg-aqua"><a href="{{route('single',$post->id)}}" title="">{{$post->category->name}}</a></span>
                <h4><a href="{{route('single',$post->id)}}" title="">{{$post->title}}</a></h4>
                <small><a href="{{route('single',$post->id)}}" title="">{{ \Carbon\Carbon::parse($post->created_at)->format('F j Y, g:i a')}}</a></small>
                <small><a href="{{route('single',$post->id)}}" title="">by {{$post->user->first_name . " " . $post->user->last_name }}</a></small>
            </div><!-- end meta -->
        </div><!-- end shadow-desc -->
    </div><!-- end shadow -->
</div><!-- end post-media -->
