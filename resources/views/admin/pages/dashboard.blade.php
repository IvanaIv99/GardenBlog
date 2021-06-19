@extends('layouts.admin')

@section('main')

    <div class="app-main__outer ">

        <div class="app-main__inner">

            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-white">
                        <div class="widget-content-wrapper text-black">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total active users</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-success"><span>{{$total_active_users}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-white">
                        <div class="widget-content-wrapper text-black">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total non-active users</div>
                                <div class="widget-subheading">Deleted accounts</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-danger"><span>{{$total_nonactive_users}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-white">
                        <div class="widget-content-wrapper text-black">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total posts</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-primary"><span>{{$total_posts}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-white">
                        <div class="widget-content-wrapper text-black">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total comments</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-primary"><span>{{$total_comments}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="main-card col-8 mb-3 card">
                    <div class="card-body">
                        <table class="align-middle mb-0 table table-hover">
                            <div class="card-header">
                                <h5 class="card-title">USER ACTIVITY</h5>
                                <div class="btn-actions-pane-right">
                                    <form method="get" action="{{route('dashboard')}}">

                                        <label for="start">Start from:</label>
                                        <input type="date" name="start" id="start">

                                        <label for="end">End:</label>
                                        <input type="date" name="end" id="end">


                                        <button type="submit">SUBMIT</button>
                                    </form>

                                </div>
                            </div>
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Message</th>
                                <th class="text-center">Url</th>
                                <th class="text-center">IP</th>
                                <th class="text-center">DATETIME</th>
                                <th class="text-center">USER ID</th>
                            </tr>
                            </thead>
                            <tbody id="posts-tablebody">
                            @foreach($logs as $log)
                                <tr>
                                    <td class="text-center text-muted">{{$log->id}}</td>
                                    <td class="text-center">{{$log->subject}}</td>
                                    <td class="text-center">{{$log->url}}</td>
                                    <td class="text-center">{{$log->ip}}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($log->created_at)->format('F j Y, H:i:s')}}</td>
                                    <td class="text-center">{{$log->user_id}}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{$logs->links('vendor.pagination.default')}}
                    </div>
                </div>
            </div>

        </div>

        </div>
    </div>


@endsection
