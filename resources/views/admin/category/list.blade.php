@extends('admin.layout_admin_master')

@section('main-content')
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar d-flex justify-content-between">
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto">Quản lý danh mục</h1>
                    </div>
                    <div>
                        <a href="/admin/cate/add" class="btn btn-outline-secondary" type="submit">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            Thêm mới
                        </a>
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
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lstCate as $cate)
                                        <tr>
                                            <td class="align-middle">
                                                <b>{!! $cate->id !!}</b>
                                            </td>
                                            <td class="align-middle">
                                                {!! $cate->name !!}
                                            </td>
                                            <td class="align-middle">
                                                @if(is_null($cate->note))
                                                    <i class="text-gray">Không có thông tin mô tả</i>
                                                @else
                                                    {!! $cate->note !!}
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                {!! date("d/m/Y", strtotime($cate->created_at)); !!}
                                            </td>
                                            <td class="align-middle text-center" width="90px">
                                                <a href="/admin/cate/detail?cateId={!! $cate->id !!}" class="btn btn-sm btn-icon btn-secondary">
                                                    <i class="fa fa-pencil-alt"></i> <span class="sr-only">Process</span>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-icon btn-secondary">
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
