@extends('layouts.admin')
@section('main')
    <div class="app-main__outer ">

        <div class="app-main__inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Manage Users
                            {{--                            <div class="btn-actions-pane-right">--}}
                            {{--                                <div role="group" class="btn-group-sm btn-group">--}}
                            {{--                                    <button class="active btn btn-focus">Last Week</button>--}}
                            {{--                                    <button class="btn btn-focus">All Month</button>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th>Name</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">View</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="text-center text-muted">#{{$user->id}}</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" src="{{asset("images/profilePhotos/".$user->photo)}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">{{$user->first_name . " " . $user->last_name}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @if(!$user->trashed())
                                                <div class="badge badge-warning">Active</div>
                                            @else
                                                <div class="badge badge-danger">Not Active</div>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a type="button" href="{{route('users.show',$user->id)}}" class="btn btn-primary btn-sm">Profile</a>
                                        </td>
                                        <td class="text-center">

                                            <form action="{{route('users.destroy',$user->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit"  class="btn btn-primary btn-sm">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                            {{$users->links("vendor.pagination.default")}}

                            <p class="text-success">{{session('success')}}</p>
                            <p class="text-danger">{{session('error')}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
