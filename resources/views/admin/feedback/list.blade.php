@extends('admin.layout_admin_master')

@section('main-content')
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#">Phản hồi khách hàng</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto">Quản lý phản hồi</h1>
                    </div>
                </header>
                <div class="page-section">
                    <div class="card card-fluid">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>FullName</th>
                                        <th>Position</th>
                                        <th>Content</th>
                                        <th>Created At</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lstFeedback as $feedback)
                                        <tr>
                                            <td class="align-middle">
                                                <code>{!! ++$loop->index !!}</code>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/admin/feedback/detail?feedbackId={!! $feedback->id !!}">
                                                    {!! $feedback->fb_name !!}
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge badge-subtle badge-primary">
                                                    {!! $feedback->fb_position !!}
                                                </span>
                                            </td>
                                            <td class="align-middle" width="45%">
                                                <code>
                                                    {!! $feedback->fb_content !!}
                                                </code>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge badge-subtle badge-success">
                                                    {!! date("d/m/Y", strtotime($feedback->created_at)); !!}
                                                </span>
                                            </td>
                                            <td class="align-middle text-center" width="90px">
                                                <a href="/admin/feedback/detail?feedbackId={!! $feedback->id !!}" class="btn btn-sm btn-icon btn-secondary">
                                                    <i class="fa fa-pencil-alt"></i> <span class="sr-only">Detail</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination justify-content-center mt-4">
                                {{ $lstFeedback->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
