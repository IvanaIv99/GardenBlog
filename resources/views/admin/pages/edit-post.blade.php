@extends('layouts.admin')
@section('main')
    <div class="col-md-6 m-auto " id="edit-post-form">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Edit post</h5>
                <form action="{{route("post.update",$post->id)}}" method="post" class="form-wrapper" enctype="multipart/form-data" >
                    @method('PUT')
                    @csrf
                    <input type="text" class="form-control " placeholder="Title" name="title" value="{{$post->title}}">

                    <p class="text-danger">@error('category_id'){{$message}}@enderror</p>
                    <select id="category" name="category" class="form-control" >
                        <option value="0">Choose Category</option>
                        @foreach($categories as $c)
                            <option value="{{$c->id}}"
                                {{  ($c->id == $post->category_id) ? 'selected' : '' }}
                            >{{$c->name}}</option>
                        @endforeach
                    </select>

                    <label for="thumbPhoto">Upload thumbnail image:</label>
                    <img src="{{asset('images/gardening/'.$post->thumbPhoto)}}" class="img-thumbnail" name="thumbPhoto" style="width: 250px !important;"/>

                    <div class="col-12 d-flex flex-row">

                        <input type="file" class="form-control col-10" name="thumbPhoto" value="" >

                    </div>
                    <p class="text-danger">@error('thumbPhoto'){{$message}}@enderror</p>
                    <br/>

                    <label for="editor">Write a content:</label>

                    <p class="text-danger">@error('content'){{$message}}@enderror</p>
                    <textarea class="form-control" id="editor" name="content">
                        {{$post->content}}
                </textarea>


                    <button type="submit" class="btn btn-primary mt-4 mb-4">Edit<i class="fa fa-envelope-open-o"></i></button>
                    <a  href="{{route("posts")}}" class="btn btn-primary mt-4 mb-4">Cancel<i class="fa fa-envelope-open-o"></i></a>

                </form>
                {{session('success')}}
                {{session('error')}}
            </div>
        </div>
    </div>

@endsection
