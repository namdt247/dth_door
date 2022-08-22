@extends('admin.layout_admin_master')

@section('main-content')
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/admin/contact/list"> Liên hệ </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#">Chi tiết liên hệ</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="page-title"> Chi tiết liên hệ </h1>
                        </div>
                        <div class="col-md-6 text-right">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                Cập nhật
                            </button>
                        </div>
                    </div>
                </header>
                <div class="page-section">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="base-style" class="card">
                                <div class="card-body">
                                    <h5 class="text-linkedin">
                                        <i class="fa fa-address-book" aria-hidden="true"></i>
                                        Thông tin liên hệ
                                    </h5>
                                    <hr/>
                                    <form method="post" action="">
                                        @csrf
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tf1"> Họ và tên </label>
                                                        <input type="text" name="fullName" value="{!! $contact->fullName !!}" disabled class="form-control" aria-describedby="tf1Help" placeholder="admin@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tf2"> SĐT </label>
                                                        <input type="text" name="phone" value="{!! $contact->phone !!}" disabled class="form-control" aria-describedby="tf2Help" placeholder="0987654321">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tf6">Lời nhắn</label>
                                                <textarea class="form-control" name="message" disabled rows="6">{!! $contact->message !!}</textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sel1">Trạng thái hiện tại</label>
                                                        <select class="custom-select" disabled>
                                                            @foreach($lstContactStatus as $sttContact)
                                                                <option value="{!! $sttContact->id !!}" @if($contact->status == $sttContact->id) selected @endif>{!! $sttContact->stt_name !!}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sel1">Trạng thái chuyển tiếp</label>
                                                        <select class="custom-select" disabled name="status">
                                                            @foreach($lstContactStatus as $sttContact)
                                                                <option value="{!! $sttContact->id !!}" @if(($contact->status + 1) == $sttContact->id) selected @endif>{!! $sttContact->stt_name !!}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="base-style" class="card">
                                <div class="card-body">
                                    <h5 class="text-linkedin">
                                        <i class="fa fa-history" aria-hidden="true"></i>
                                        Lịch sử hoạt động
                                    </h5>
                                    <hr/>
                                    <form method="post" action="">
                                        @csrf
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tf1"> Họ và tên </label>
                                                        <input type="text" name="fullName" value="{!! $contact->fullName !!}" disabled class="form-control" aria-describedby="tf1Help" placeholder="admin@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tf2"> SĐT </label>
                                                        <input type="text" name="phone" value="{!! $contact->phone !!}" disabled class="form-control" aria-describedby="tf2Help" placeholder="0987654321">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tf6">Lời nhắn</label>
                                                <textarea class="form-control" name="message" disabled rows="6">{!! $contact->message !!}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="sel1">Trạng thái</label>
                                                <select class="custom-select" required name="status">

                                                </select>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
