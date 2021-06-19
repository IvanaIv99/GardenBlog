
@extends("layouts.front")
@section("content")
    <h1 class="text-center">Add new post</h1>
    @include('front.components.post-form',['action'=>'post.store'])
@endsection
