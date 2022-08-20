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
                                <a href="#">Sản phẩm</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="page-title">Quản lý sản phẩm</h1>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <a href="/admin/product/add" class="btn btn-outline-secondary" type="submit">
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
                                        <th>Category</th>
                                        <th>Thumbnail</th>
                                        <th>Created At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lstPrd as $prd)
                                        <tr>
                                            <td class="align-middle">
                                                <b>{!! ++$loop->index !!}</b>
                                            </td>
                                            <td class="align-middle" width="25%">
                                                {!! $prd->name !!}
                                            </td>
                                            <td class="align-middle">
                                                {!! $prd->category->name !!}
                                            </td>
                                            <td class="align-middle">
                                                @if($prd->thumbnail == null || strlen($prd->thumbnail) == 0)
                                                    <i class="text-gray">Không có hình ảnh mô tả</i>
                                                @else
                                                    <?php $count = 0; ?>
                                                    <div class="avatar-group">
                                                    @foreach($prd->large_photos as $uri)
                                                        <?php $count++; ?>
                                                        @if($count <= 3)
                                                            <img src="{!! $uri !!}" class="user-avatar" alt=""
                                                                 style="width: 3rem;height: 3rem;">
                                                        @endif
                                                    @endforeach
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                {!! date("d/m/Y", strtotime($prd->created_at)); !!}
                                            </td>
                                            <td class="align-middle text-center" width="90px">
                                                <a href="/admin/product/detail?prdId={!! $prd->id !!}" class="btn btn-sm btn-icon btn-secondary">
                                                    <i class="fa fa-pencil-alt"></i> <span class="sr-only">Detail</span>
                                                </a>
                                                <a href="#" data-id="{!! $prd->id !!}" class="btn btn-sm btn-icon btn-secondary" onclick="confirmDeleteProduct(this);">
                                                    <i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination justify-content-center mt-4">
                                {!! $lstPrd->links() !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
