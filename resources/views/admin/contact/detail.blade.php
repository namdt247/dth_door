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
                        @if(!($contact->status == \App\Helper\Config::CONTACT_COMPETE || $contact->status == \App\Helper\Config::CONTACT_CANCEL))
                            <div class="col-md-6 text-right">
                                <label for="submit-form" tabindex="0" class="btn btn-primary">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Cập nhật
                                </label>
                            </div>
                        @endif
                    </div>
                </header>
                <div class="page-section">
                    <div class="row">
                        <div class="col-lg-8">
                            <form method="post" action="">
                                @csrf
                                <input type="submit" id="submit-form"class="d-none" />
                                <div id="base-style" class="card">
                                    <div class="card-body">
                                        <h5 class="text-linkedin">
                                            <i class="fa fa-address-book" aria-hidden="true"></i>
                                            Thông tin liên hệ
                                        </h5>
                                        <hr/>
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
                                            @if($contact->status == \App\Helper\Config::CONTACT_COMPETE || $contact->status == \App\Helper\Config::CONTACT_CANCEL)
                                                <div class="form-group">
                                                    <label for="tf6">Trạng thái</label>
                                                    <div>
                                                        <span class="badge {!! $contact->status == \App\Helper\Config::CONTACT_COMPETE ? 'badge-success' : 'badge-danger' !!}">
                                                            {!! $contact->status_parent->stt_name !!}
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif
                                        </fieldset>
                                    </div>
                                </div>

                                @if(!($contact->status == \App\Helper\Config::CONTACT_COMPETE || $contact->status == \App\Helper\Config::CONTACT_CANCEL))
                                <div id="base-style" class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 d-flex align-items-center">
                                                <div>
                                                    <h5 class="text-linkedin mb-0">
                                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                                        Cập nhật trạng thái
                                                    </h5>
                                                    <small><i>(Chỉ có thể huỷ trạng thái trước giao đoạn hợp đồng)</i></small>
                                                </div>
                                            </div>
                                            @if($contact->status < \App\Helper\Config::CONTACT_CONTRACT)
                                                <div class="col-md-6 text-right">
                                                    <a href="/admin/contact/cancel?contactId={!! $contact->id !!}" class="btn btn-primary">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                        Huỷ trạng thái
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        <hr/>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sel1">Trạng thái hiện tại</label>
                                                        <select class="form-control" disabled id="sel1">
                                                            @foreach($lstContactStatus as $sttContact)
                                                                <option value="{!! $sttContact->id !!}" @if($contact->status == $sttContact->id) selected @endif>{!! $sttContact->stt_name !!}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="sel2">Trạng thái chuyển tiếp</label>
                                                        <select class="form-control" disabled name="status_update" id="sel2">
                                                            @foreach($lstContactStatus as $sttContact)
                                                                <option value="{!! $sttContact->id !!}" @if(($contact->status + 1) == $sttContact->id) selected @endif>{!! $sttContact->stt_name !!}</option>
                                                            @endforeach
                                                        </select>
                                                        <input type="hidden" name="status_update" value="{!! $contact->status + 1 !!}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="flatpickr04">Ngày xử lý tiếp theo</label>
                                                        <?php
                                                            $date = date('d-m-y');
                                                        ?>
                                                        <input id="flatpickr04" type="text" class="form-control" name="process_date"
                                                               placeholder="Chọn ngày xử lý tiếp theo" data-toggle="flatpickr"
                                                               data-default-date="{!! $date !!}"
                                                               data-min-date="{!! $date !!}"
                                                               data-date-format="d-m-Y"
                                                               required="true">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="tf6">Nội dung xử lý</label>
                                                        <textarea class="form-control" name="process_content" rows="6" placeholder="Nhập nội dung cần xử lý tiếp theo..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                @endif
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div id="base-style" class="card">
                                <div class="card-body">
                                    <h5 class="text-linkedin">
                                        <i class="fa fa-history" aria-hidden="true"></i>
                                        Lịch sử hoạt động
                                    </h5>
                                    <hr/>
                                    <div>
                                        <ul class="timeline">
                                            <li class="timeline-item">
                                                <div class="timeline-figure">
                                                    <span class="tile tile-circle tile-sm"><i class="far fa-calendar-alt fa-lg"></i></span>
                                                </div>
                                                <div class="timeline-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h6 class="timeline-heading">
                                                                <a href="#" class="text-link">Tiếp nhận</a>
                                                            </h6>
                                                        </div>
                                                        <div class="">
                                                            <span class="timeline-date">{!! date("d/m/Y", strtotime($contact->created_at)) !!}</span>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        <a href="#">{!! $contact->fullName !!}</a> đã tạo liên hệ
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <?php
                                            $lstHistoryProcess = unserialize($contact->ct_content);
                                        ?>
                                        @if($lstHistoryProcess)
                                            @foreach($lstHistoryProcess as $key => $value)
                                                <ul class="timeline">
                                                    <li class="timeline-item">
                                                        <div class="timeline-figure">
                                                            <span class="tile tile-circle tile-sm"><i class="far fa-calendar-alt fa-lg"></i></span>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h6 class="timeline-heading">
                                                                        <a href="#" class="text-link">{!! $key !!}</a>
                                                                    </h6>
                                                                </div>
                                                                <div class="">
                                                                    <span class="timeline-date">{!! date("d/m/Y", strtotime($value['date_update'])) !!}</span>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0">
                                                                {!! $value['content'] !!}
                                                            </p>
                                                            <p class="mb-0">
                                                                <a href="#" class="text-link">Ngày xử lý:</a>
                                                                <span class="badge badge-subtle badge-success">
                                                                    {!! date("d/m/Y", strtotime($value['date_process'])) !!}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
