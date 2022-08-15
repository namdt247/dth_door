@extends('admin.layout_admin_master')

@section('main-content')
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <h1 class="page-title"> Chi tiết liên hệ </h1>
                </header>
                <div class="page-section">
                    <div id="base-style" class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="tf1"> Họ và tên </label>
                                        <input type="text" name="fullName" value="{!! $contact->fullName !!}" disabled class="form-control" aria-describedby="tf1Help" placeholder="admin@gmail.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="tf2"> SĐT </label>
                                        <input type="text" name="phone" value="{!! $contact->phone !!}" disabled class="form-control" aria-describedby="tf2Help" placeholder="0987654321">
                                    </div>
                                    <div class="form-group">
                                        <label for="tf6">Lời nhắn</label>
                                        <textarea class="form-control" name="message" disabled rows="6">{!! $contact->message !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">Trạng thái</label>
                                        <select class="custom-select" required name="status">
                                            <option value="1" @if($contact->status === \App\Helper\Config::CONTACT_PENDING) selected @endif>Pending</option>
                                            <option value="2" @if($contact->status === \App\Helper\Config::CONTACT_DONE) selected @endif>Done</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <div class="form-actions d-flex justify-content-center">
                                    <button class="btn btn-primary mr-1" type="submit">Update</button>
                                    <a href="/admin/contact/list" class="btn btn-outline-primary" type="submit">
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
