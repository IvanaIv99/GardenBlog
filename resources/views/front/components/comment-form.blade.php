<div class="custombox clearfix leave-comment">
    <h4 class="small-title">Leave a Comment</h4>

    @if(session()->has('user'))

    <div class="row">
        <div class="col-lg-12">
            <form class="form-wrapper" method="post" id="formcomment" action="{{route("comment.store",$post->id)}}">
                @csrf
                <textarea class="form-control" id="comm-content" placeholder="Your comment"></textarea>
                <button type="submit" class="btn btn-primary" id="comment-submit">Submit Comment</button>
            </form>
        </div>
    </div>

    @else
        <a class="text-success font-weight-bold" href="{{route('loginForm')}}">You must log in first.</a>
    @endif
</div>

{{session('success')}}
{{session('error')}}
