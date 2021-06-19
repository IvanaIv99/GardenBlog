@extends('layouts.admin')
@section('main')

    <div class="app-main__outer ">

        <div class="app-main__inner">

            <div class="row">
                <div class="col-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">

                            <h2 class="card-title">Manage posts</h2>

                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">User ID</th>
                                    <th class="text-center">Created</th>
                                    <th class="text-center">Updated</th>
                                    <th class="text-center">Visits</th>
                                    <th class="text-center">Comments</th>
                                    <th class="text-center">View</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                                </thead>
                                <tbody id="posts-tablebody">
                                @foreach($posts as $post)
                                <tr>
                                        <td class="text-center text-muted">{{$post->id}}</td>
                                        <td class="text-center">{{$post->title}}</td>
                                    <td class="text-center">{{$post->category->name}}</td>
                                        <td class="text-center">{{$post->user->id}}</td>
                                    <td class="text-center text-muted">{{$post->created_at}}</td>
                                    <td class="text-center text-muted">{{$post->udated_at}}</td>
                                    <td class="text-center text-muted">{{$post->visits->count()}}</td>
                                    <td class="text-center text-muted">{{$post->comments->count()}}</td>

                                    <td class="text-center">
                                        <a href="{{route('single',$post->id)}}" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                        <td class="text-center">
                                            <a href="{{route('post.edit',$post)}}" class="btn btn-primary btn-sm btn-admin-edit-post">Edit</a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{route('post.destroy',$post->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit"  class="btn btn-primary btn-sm">Delete</button>
                                            </form>
                                        </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                            {{$posts->links("vendor.pagination.default")}}

                            <p class="text-success">{{session('success')}}</p>
                            <p class="text-danger">{{session('error')}}</p>
                        </div>




                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
