<section class=" mt-5">
    <div class="row">
        <div class="col-6 m-auto">
            <form action="@if($action=='post.update'){{route($action,$post->id)}}@else {{route($action)}} @endif" method="post" class="form-wrapper" enctype="multipart/form-data" >
                @csrf
                @if($action=='post.update') @method('put') @endif

                @error('title'){{$message}}@enderror
                <input type="text" class="form-control" placeholder="Title" name="title" value="{{$post->title ?? old('title')}}">

                @error('category_id'){{$message}}@enderror

                <select id="category" name="category" class="form-control" >
                    <option value="0">Choose Category</option>
                    @foreach($categories as $c)
                        @if($action=='post.update')
                        <option value="{{$c->id}}"
                            {{  ($c->id == $post->category_id) ? 'selected' : '' }}
                        >{{$c->name}}</option>
                        @else
                                <option value="{{$c->id}}">{{$c->name}}</option>
                        @endif
                    @endforeach
                </select>

                <label for="thumbPhoto">Upload thumbnail image:</label>

                @error('thumbPhoto'){{$message}}@enderror
                <div class="col-12 d-flex flex-row">

                    <input type="file" class="form-control col-10" name="thumbPhoto" value="" >

                </div>
                <br/>

                <label for="editor">Write a content:</label>

                @error('content'){{$message}}@enderror
                <textarea class="form-control" id="editor" name="content">
                    {{$post->content ?? old('content')}}
                </textarea>

                @if($action=='post.update')
                <button type="submit" class="btn btn-primary mt-4 mb-4">Save<i class="fa fa-envelope-open-o"></i></button>
                @else
                    <button type="submit" class="btn btn-primary mt-4 mb-4">Add<i class="fa fa-envelope-open-o"></i></button>
                @endif
                <br/>
            </form>

            {{session('error')}}

            @if($action=='post.update')
            <form action="{{route("post.delete",$post->id)}}" method="post">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-primary mt-4 mb-4">Delete post  <i class="fa fa-envelope-open-o"></i></button>
            </form>
            @endif

        </div>
    </div>
</section>
