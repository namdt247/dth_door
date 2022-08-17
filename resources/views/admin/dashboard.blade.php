@extends('admin.layout_admin_master')

@section('main-content')
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <div class="d-flex flex-column flex-md-row">
                        <p class="lead">
                            <span class="font-weight-bold">Hi,
                                @if (\Illuminate\Support\Facades\Auth::check())
                                    {!! \Illuminate\Support\Facades\Auth::user()->full_name !!}
                                @else
                                    Admin
                                @endif
                            </span>
                            <small class="d-block text-muted">Thống kê hệ thống DTHDoor</small>
                        </p>
                    </div>
                </header>
                <div class="page-section">
                    <div class="section-block">
                        <div class="metric-row">
                            <div class="col-lg-9">
                                <div class="metric-row metric-flush">
                                    <div class="col">
                                        <a href="user-teams.html" class="metric metric-bordered align-items-center">
                                            <h2 class="metric-label"> Teams </h2>
                                            <p class="metric-value h3">
                                                <sub><i class="oi oi-people"></i></sub> <span class="value">8</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="user-projects.html" class="metric metric-bordered align-items-center">
                                            <h2 class="metric-label"> Projects </h2>
                                            <p class="metric-value h3">
                                                <sub><i class="oi oi-fork"></i></sub> <span class="value">12</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="user-tasks.html" class="metric metric-bordered align-items-center">
                                            <h2 class="metric-label"> Active Tasks </h2>
                                            <p class="metric-value h3">
                                                <sub><i class="fa fa-tasks"></i></sub> <span class="value">64</span>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <a href="user-tasks.html" class="metric metric-bordered">
                                    <div class="metric-badge">
                                        <span class="badge badge-lg badge-success"><span class="oi oi-media-record pulse mr-1"></span> ONGOING TASKS</span>
                                    </div>
                                    <p class="metric-value h3">
                                        <sub><i class="oi oi-timer"></i></sub> <span class="value">8</span>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
