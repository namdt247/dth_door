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
                                        <a href="/admin/product/list" class="metric metric-bordered align-items-center">
                                            <h2 class="metric-label"> Tổng số sản phẩm </h2>
                                            <p class="metric-value h3">
                                                <sub><i class="fa fa-cube" aria-hidden="true"></i></sub> <span class="value">
                                                    {!! $data['totalProduct'] !!}
                                                </span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="/admin/contact/list" class="metric metric-bordered align-items-center">
                                            <h2 class="metric-label"> Tổng số liên hệ </h2>
                                            <p class="metric-value h3">
                                                <sub><i class="fa fa-comment" aria-hidden="true"></i></sub> <span class="value">
                                                    {!! $data['totalContact'] !!}
                                                </span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="/admin/contact/list" class="metric metric-bordered align-items-center">
                                            <h2 class="metric-label"> Liên hệ trong tháng </h2>
                                            <p class="metric-value h3">
                                                <sub><i class="fa fa-comments" aria-hidden="true"></i></sub> <span class="value">
                                                    {!! $data['totalContactInMonth'] !!}
                                                </span>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 text-center">
                                <a href="/admin/contact/list" class="metric metric-bordered">
                                    <div class="metric-badge">
                                        <span class="badge badge-lg badge-warning"><span class="oi oi-media-record pulse mr-1"></span> Liên hệ chờ xử lý</span>
                                    </div>
                                    <p class="metric-value h3">
                                        <sub><i class="oi oi-timer"></i></sub> <span class="value">
                                            {!! $data['totalContactPending'] !!}
                                        </span>
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
