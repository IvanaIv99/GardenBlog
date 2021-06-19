@extends('layouts.admin')

@section('main')
    <div class="main-card  card m-auto">
        <img width="100%" src="{{asset('images/profilePhotos/'.$user->photo)}}" alt="Card image cap" class="card-img-top rounded img-thumbnail" style="width: 250px !important;" >
        <div class="card-body">
            <h5 class="card-title">{{$user->first_name . " " . $user->last_name}}</h5>
            <p>{{$user->bio}}</p>
            <ul>
                <li>{{$user->gender}}</li>
                <li>{{$user->email}}</li>
                <li>Member since : {{$user->created_at}}</li>
                @if($user->trashed())
                    <li>Deleted at: {{$user->deleted_at}}</li>
                    @else
                <li><a href="{{route('posts.user',['id'=>$user->id])}}">Posts:</a> {{$user->posts->count()}}</li>
                <li><a href="{{route('users.comments',['id'=>$user->id])}}">Comments:</a> {{$user->comments->count()}}</li>
                    @endif
            </ul>


            <a href="{{route('users')}}" class="btn btn-secondary">Back</a>
            @if($user->id==$admin->id)
            @else
                <form action="{{route('users.destroy',$user->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit"  class="btn btn-primary btn-sm">Delete</button>
                </form>
                @endif
        </div>
    </div>
@endsection
