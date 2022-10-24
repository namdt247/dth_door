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
                                <a href="#">Công trình</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="page-title">Quản lý công trình</h1>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <a href="/admin/project/add" class="btn btn-outline-primary" type="submit">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Thêm mới
                            </a>
                        </div>
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
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Thumbnail</th>
                                        <th>Created At</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lstProject as $project)
                                        <tr>
                                            <td class="align-middle">
                                                <code>{!! ++$loop->index !!}</code>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/admin/project/detail?projectId={!! $project->id !!}">
                                                    {!! $project->name !!}
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                @if($project->type == 1)
                                                    Nhà dân
                                                @elseif($project->type == 2)
                                                    Biệt thự
                                                @elseif($project->type == 3)
                                                    Công trình khác
                                                @else
                                                    <code class="text-gray"><i>Không xác định</i></code>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                @if($project->thumbnail)
                                                    <img src="{!! $project->last_large_photo !!}" class="user-avatar" alt=""
                                                         style="width: 3rem;height: 3rem;">
                                                @else
                                                    <code class="text-gray"><i>Không có hình ảnh</i></code>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge badge-subtle badge-success">
                                                    {!! date("d/m/Y", strtotime($project->created_at)); !!}
                                                </span>
                                            </td>
                                            <td class="align-middle text-center" width="90px">
                                                <a href="/admin/project/detail?projectId={!! $project->id !!}" class="btn btn-sm btn-icon btn-secondary">
                                                    <i class="fa fa-pencil-alt"></i> <span class="sr-only">Detail</span>
                                                </a>
                                                <a href="#" data-id="{!! $project->id !!}" class="btn btn-sm btn-icon btn-secondary" onclick="confirmDeleteCate(this);">
                                                    <i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination justify-content-center mt-4">
                                {!! $lstProject->links() !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
