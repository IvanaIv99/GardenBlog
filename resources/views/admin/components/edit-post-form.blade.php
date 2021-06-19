
<div class="col-md-6 mx-auto d-none" id="edit-post-form">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Add new post</h5>
            <form action="" method="post" class="form-wrapper" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <input type="text" class="form-control " placeholder="Title" name="title" value="{{$post->title}}">

                @error('category_id'){{$message}}@enderror
                <select id="category" name="category" class="form-control" >
                    <option value="0">Choose Category</option>
                    @foreach($categories as $key => $value)
                        <option value="{{$key}}"
                            {{  ($key == $post->category_id) ? 'selected' : '' }}
                        >{{$value}}</option>
                    @endforeach
                </select>

                <label for="thumbPhoto">Upload thumbnail image:</label>
                <img src="{{asset('images/gardening/'.$post->thumbPhoto)}}" name="thumbPhoto"/>

                <div class="col-12 d-flex flex-row">

                    <input type="file" class="form-control col-10" name="thumbPhoto" value="" >

                </div>
                @error('thumbPhoto'){{$message}}@enderror
                <br/>

                <label for="editor">Write a content:</label>

                @error('content'){{$message}}@enderror
                <textarea class="form-control" id="editor" name="content">
                        {{$post->content}}
                </textarea>


                <button type="submit" class="btn btn-primary mt-4 mb-4">Add<i class="fa fa-envelope-open-o"></i></button>

            </form>

            {{session('error')}}
        </div>
    </div>
</div>
