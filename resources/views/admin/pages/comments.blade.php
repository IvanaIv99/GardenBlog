@extends('layouts.admin')
@section('main')
    <div class="app-main__outer ">

        <div class="app-main__inner">

            <div class="row">
                <div class="col-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">

                            <h2 class="card-title">User comments</h2>


                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Comment</th>
                                    <th class="text-center">Post</th>
                                    <th class="text-center">User</th>
                                    <th class="text-center">Created</th>
                                    <th class="text-center">View</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                                </thead>
                                <tbody id="posts-tablebody">
                                @foreach($comments as $com)
                                    <tr>
                                        <td class="text-center text-muted">{{$com->id}}</td>
                                        <td class="text-center">{{$com->content}}</td>
                                        <td class="text-center">{{$com->post->title}}</td>
                                        <td class="text-center">{{$com->user->first_name ." " .$com->user->last_name}}</td>
                                        <td class="text-center text-muted">{{$com->created_at}}</td>
                                        <td class="text-center">
                                            <a href="{{route('single',$com->post->id)}}" class="btn btn-primary btn-sm">View</a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{route('comments.destroy',$com->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit"  class="btn btn-primary btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>

        {{$comments->links("vendor.pagination.default")}}
                            <p class="text-success">{{session('success')}}</p>
                            <p class="text-danger">{{session('error')}}</p>

                        </div>




                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
