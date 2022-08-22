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
                            <li class="breadcrumb-item">
                                <a href="/admin/cate/list"> Danh mục </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#">Chi tiết danh mục</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title"> Chi tiết danh mục </h1>
                </header>
                <div class="page-section">
                    <div id="base-style" class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="tf1"> Tên danh mục <span class="text-danger">(*)</span></label>
                                        <input type="text" name="name" value="{!! $cate->name !!}" class="form-control" aria-describedby="tf1Help" placeholder="Tên danh mục sản phẩm" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tf6">Mô tả</label>
                                        <textarea class="form-control" name="note" rows="6" placeholder="Nhập mô tả...">{!! $cate->note !!}</textarea>
                                    </div>
                                </fieldset>
                                <div class="form-actions d-flex justify-content-center">
                                    <button class="btn btn-primary mr-1" type="submit">Create</button>
                                    <a href="/admin/cate/list" class="btn btn-outline-primary" type="submit">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
