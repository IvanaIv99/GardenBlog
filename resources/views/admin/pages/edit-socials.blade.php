@extends('layouts.admin')
@section('main')
    <div class="main-card col-3 m-auto card">
        <div class="card-body">
            <h5 class="card-title">EDIT SOCIALMEDIA LINK</h5>
            <form action="{{route('socials.update',$soc->id)}}" method="post">
                @method('put')
                @csrf
                <div class="position-relative form-group">
                    <label for="soc-name" class="">Name:</label>
                    <p class="text-danger">@error('name'){{$message}}@enderror</p>
                    <input name="name" id="soc-name" type="text" class="form-control" value="{{$soc->name}}">
                </div>
                <div class="position-relative form-group">
                    <label for="soc-url" class="">Url:</label>
                    <p class="text-danger">@error('url'){{$message}}@enderror</p>
                    <input name="url" id="soc-route" type="text" class="form-control" value="{{$soc->url}}">
                </div>
                <div class="position-relative form-group">
                    <label for="soc-icon" class="">Fa icon:</label>
                    <input name="icon" id="soc-icon" type="text" class="form-control" value="{{$soc->icon}}">
                </div>
                <button type="submit" class="mt-1 btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
