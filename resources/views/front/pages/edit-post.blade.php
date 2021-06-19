@extends('layouts.front')
@section('content')
    <h1 class="text-center">Edit post</h1>
    @include('front.components.post-form',['action'=>'post.update'])
@endsection
