
<div class="col-md-6 m-auto" id="add-post-form">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Add new post</h5>
            <form action="" method="post" class="form-wrapper" enctype="multipart/form-data" >
                @csrf
                <input type="text" class="form-control " placeholder="Title" name="title" value="">

                @error('category_id'){{$message}}@enderror
                <select id="category" name="category" class="form-control" >
                    <option value="0">Choose Category</option>
                    @foreach($categories as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
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

                </textarea>


                <button type="submit" class="btn btn-primary mt-4 mb-4">Add<i class="fa fa-envelope-open-o"></i></button>

            </form>

            {{session('error')}}
        </div>
    </div>
</div>
