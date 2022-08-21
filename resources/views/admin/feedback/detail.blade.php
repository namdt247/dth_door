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
                                <a href="#">Chi tiết phản hồi</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title"> Chi tiết phản hồi </h1>
                </header>
                <div class="page-section">
                    <div id="base-style" class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="tf1"> Họ và tên </label>
                                        <input type="text" name="fb_name" value="{!! $feedback->fb_name !!}" class="form-control" aria-describedby="tf1Help" placeholder="Họ và tên">
                                    </div>
                                    <div class="form-group">
                                        <label for="tf2"> Vị trí </label>
                                        <input type="text" name="fb_position" value="{!! $feedback->fb_position !!}" class="form-control" aria-describedby="tf2Help" placeholder="Chủ nhà">
                                    </div>
                                    <div class="form-group">
                                        <label for="tf6">Nội dung phản hồi</label>
                                        <textarea class="form-control" name="fb_content" rows="6">{!! $feedback->fb_content !!}</textarea>
                                    </div>
                                </fieldset>
                                <div class="form-actions d-flex justify-content-center">
                                    <button class="btn btn-primary mr-1" type="submit">Update</button>
                                    <a href="/admin/feedback/list" class="btn btn-outline-primary" type="submit">
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
