@extends('layouts.admin')
@section('main')
    <h5>Add post</h5>
    <div class="col-md-6 m-auto" id="add-post-form">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Add new post</h5>
                <form action="{{route('posts.store')}}" method="post" class="form-wrapper" enctype="multipart/form-data" >
                    @csrf

                    <input type="text" class="form-control " placeholder="Title" name="title" value="">

                    <p class="text-danger">@error('category_id'){{$message}}@enderror</p>
                    <select id="category" name="category" class="form-control" >
                        <option value="0">Choose Category</option>
                        @foreach($categories as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>

                    <label for="thumbPhoto">Upload thumbnail image:</label>

                    <p class="text-danger">@error('thumbPhoto'){{$message}}@enderror</p>
                    <div class="col-12 d-flex flex-row">

                        <input type="file" class="form-control col-10" name="thumbPhoto" value="" >

                    </div>
                    <br/>

                    <label for="editor">Write a content:</label>

                    <p class="text-danger">@error('content'){{$message}}@enderror</p>
                    <textarea class="form-control" id="editor" name="content">

                </textarea>


                    <button type="submit" class="btn btn-primary mt-4 mb-4">Add<i class="fa fa-envelope-open-o"></i></button>

                </form>

                {{session('error')}}
                {{session('success')}}
            </div>
        </div>
    </div>

@endsection
