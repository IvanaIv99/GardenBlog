@extends('layouts.admin')
@section('main')
    <div class="main-card col-3 card m-auto">
        <div class="card-body">
            <h5 class="card-title">ADD NAVIGATION LINK</h5>
            <form action="{{route('nav.store')}}" method="post">
                @csrf
                <div class="position-relative form-group">
                    <label for="name" class="">Name:</label>
                    <p class="text-danger>">@error('name'){{$message}}@enderror</p>
                    <input name="name" id="nav-name" type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="nav-route" class="">Route:</label>
                    <p class="text-danger>">@error('route'){{$message}}@enderror</p>
                    <input name="route" id="nav-route" type="text" class="form-control">
                </div>
                <label for="nav-roles" class="">For:</label>
                <p class="text-danger>">@error('role_id'){{$message}}@enderror</p>
                <select name="roles" id="nav-roles" class="form-control mb-3">
                    <option value="">Select..</option>
                    <option value="2">Non-authorized</option>
                    <option value="1">Users</option>
                </select>
                <button type="submit" class="mt-1 btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
