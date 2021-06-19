@extends('layouts.admin')
@section('main')
    <div class="app-main__outer ">

        <div class="app-main__inner">

            <div class="row">
                <div class="col-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">

                            <h2 class="card-title">Manage socials</h2>

                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Url</th>
                                    <th class="text-center">Fa icon</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                                </thead>
                                <tbody id="posts-tablebody">
                                @foreach($socials as $s)
                                    <tr>
                                        <td class="text-center text-muted">{{$s->id}}</td>
                                        <td class="text-center">{{$s->name}}</td>
                                        <td class="text-center">{{$s->url}}</td>
                                        <td class="text-center">{{$s->icon}}</td>
                                        <td class="text-center">
                                            <a href="{{route('socials.edit',$s->id)}}" class="btn btn-primary btn-sm btn-admin-edit-post">Edit</a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{route('soc.destroy',$s->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit"  class="btn btn-primary btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>

                            <p class="text-success">{{session('success')}}</p>
                            <p class="text-danger">{{session('error')}}</p>

                        </div>




                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
