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
                                <a href="#">Danh mục</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="page-title">Quản lý danh mục</h1>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <a href="/admin/cate/add" class="btn btn-outline-primary" type="submit">
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
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lstCate as $cate)
                                        <tr>
                                            <td class="align-middle">
                                                <code>{!! ++$loop->index !!}</code>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/admin/cate/detail?cateId={!! $cate->id !!}">
                                                    {!! $cate->name !!}
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                @if(is_null($cate->note))
                                                    <code class="text-gray"><i>Không có thông tin mô tả</i></code>
                                                @else
                                                    <code>{!! $cate->note !!}</code>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge badge-subtle badge-success">
                                                    {!! date("d/m/Y", strtotime($cate->created_at)); !!}
                                                </span>
                                            </td>
                                            <td class="align-middle text-center" width="90px">
                                                <a href="/admin/cate/detail?cateId={!! $cate->id !!}" class="btn btn-sm btn-icon btn-secondary">
                                                    <i class="fa fa-pencil-alt"></i> <span class="sr-only">Detail</span>
                                                </a>
                                                <a href="#" data-id="{!! $cate->id !!}" class="btn btn-sm btn-icon btn-secondary" onclick="confirmDeleteCate(this);">
                                                    <i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination justify-content-center mt-4">
                                {!! $lstCate->links() !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
