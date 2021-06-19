<div class="blog-box row">
    <div class="col-md-4">
        <div class="post-media">
            <a href="{{route('single',["id"=>$post->id])}}" title="">
                <img src="{{asset('images/gardening/'.$post->thumbPhoto)}}" alt="" class="img-fluid">
                <div class="hovereffect"></div>

            </a>
        </div>
    </div>

    <div class="blog-meta big-meta col-md-8">
        <span class="bg-aqua"><a href="#" title="">{{$post->category->name}}</a></span>

        @if(session()->has('user') &&  $post->user_id==session('user')->id )

        <a href="{{route('edit-post',['id'=>$post->id])}}" class="float-right addButton rounded p-2 text-white text-center smaller">EDIT</a>
{{--            <a href="{{route('post.delete',['id'=>$post->id])}}" class="float-right addButton rounded p-2 text-white text-center smaller">DELETE</a>--}}

            @elseif(session()->has('user') && session('user')->role_id==2)
            <a href="{{route('post.edit',['id'=>$post->id])}}" class="float-right addButton rounded p-2 text-white text-center smaller">EDIT</a>
        @endif

        <h4><a href="{{route('single',["id"=>$post->id])}}" title="">{{$post->title}}</a></h4>
        <p>{{ substr(strip_tags($post->content), 0, 150) }}
        ...<a href="{{route('single',["id"=>$post->id])}}">Read More</a></p>
        <small><a href="{{route('single',["id"=>$post->id])}}" title=""><i class="fa fa-eye"></i> {{count($post->visits)}}</a></small>
        <small><a href="{{route('single',["id"=>$post->id])}}" title="">{{ \Carbon\Carbon::parse($post->created_at)->format('F j Y, g:i a')}}</a></small>
        <small><a href="{{route('single',["id"=>$post->id])}}" title="">by {{$post->user->first_name ." ". $post->user->last_name }}</a></small>
    </div>
</div>
<hr class="invis">
