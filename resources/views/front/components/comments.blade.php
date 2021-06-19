<div class="custombox clearfix">
    <h4 class="small-title">{{$post->comments->count()}} Comments</h4>
    <div class="row">
        <div class="col-lg-12">
            <div class="comments-list">
                @if(!count($comments))<p>There is no comments yet.</p>@endif
                @foreach($comments as $comment)
                        <div class="media" id="comment-{{$comment->id}}">
                            <a class="media-left" href="#">
                                <img src="{{asset('images/profilePhotos/'.$comment->user->photo)}}" alt="" class="rounded-circle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading user_name"><small>{{$comment->user->first_name . " " . $comment->user->last_name }}</small></h4>
                                <p class="comment-content">{{$comment->content}}</p>
                                <h5 class="comment-date media-heading user_name"><small>{{ \Carbon\Carbon::parse($comment->created_at)->format('F j Y, g:i a')}}</small></h5>

                                @if(session()->has('user') && $comment->user_id == session('user')->id)
                                    <a href="" class=" edit-btn-comment addButton rounded p-2 text-white text-center smaller">EDIT</a>
                                    <form class="form-wrapper edit-comment-form" style="display: none;" method="post" action="{{route('comment.update',$comment->id)}}">
                                        @csrf
                                        <textarea class="form-control" id="edit-comm-content" placeholder="Edit comment"></textarea>
                                        <button type="submit" data-id="{{$comment->id}}" data-token="{{ csrf_token() }}" data-url="{{route('comment.update',$comment->id)}}" id="edit-btn" class="btn btn-primary">Edit Comment</button>
                                        <button class="btn btn-primary comment-cancel">cancel</button>

                                    </form>

                                    <a href="" class=" delete-btn-comment addButton rounded p-2 text-white text-center smaller" data-id="{{$comment->id}}" data-token="{{ csrf_token() }}" data-action="{{route('comment.delete',$comment->id)}}">DELETE</a>
                                @endif
                                @if(session('user')->role_id==2)
                                    <a href="" class=" delete-btn-comment addButton rounded p-2 text-white text-center smaller" data-id="{{$comment->id}}" data-token="{{ csrf_token() }}" data-action="{{route('comment.delete',$comment->id)}}">DELETE</a>
                                @endif

                            </div>
                        </div>
                @endforeach
            </div>
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end custom-box -->
