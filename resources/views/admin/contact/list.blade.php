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
                                <a href="#">Liên hệ</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto">Quản lý liên hệ</h1>
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
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lstContact as $contact)
                                        <tr>
                                            <td class="align-middle">
                                                <code>{!! ++$loop->index !!}</code>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/admin/contact/detail?contactId={!! $contact->id !!}">
                                                    {!! $contact->fullName !!}
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge badge-subtle badge-primary">
                                                    {!! $contact->phone !!}
                                                </span>
                                            </td>
                                            <td class="align-middle" width="30%">
                                                <code>{!! $contact->message !!}</code>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge badge-subtle badge-success">
                                                    {!! date("d/m/Y", strtotime($contact->created_at)); !!}
                                                </span>
                                            </td>
                                            <td class="align-middle">
                                                @if(assert($contact->status_parent))
                                                    @if($contact->status == \App\Helper\Config::CONTACT_CANCEL)
                                                        <span class="badge badge-lg badge-danger">
                                                            {!! $contact->status_parent->stt_name !!}
                                                        </span>
                                                    @elseif($contact->status == \App\Helper\Config::CONTACT_COMPETE)
                                                        <span class="badge badge-lg badge-primary">
                                                            {!! $contact->status_parent->stt_name !!}
                                                        </span>
                                                    @else
                                                        <span class="badge badge-lg badge-warning">
                                                            <span class="oi oi-media-record pulse">
                                                            </span>
                                                            {!! $contact->status_parent->stt_name !!}
                                                        </span>
                                                    @endif
                                                @else
                                                    <span class="badge badge-subtle badge-primary">Chờ xử lý</span>
                                                @endif
                                            </td>
                                            <td class="align-middle text-center" width="90px">
                                                <a href="/admin/contact/detail?contactId={!! $contact->id !!}" class="btn btn-sm btn-icon btn-secondary">
                                                    <i class="fa fa-pencil-alt"></i> <span class="sr-only">Process</span>
                                                </a>
                                                <a href="#" data-id="{!! $contact->id !!}" class="btn btn-sm btn-icon btn-secondary" onclick="confirmDeleteContact(this);">
                                                    <i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination justify-content-center mt-4">
                                {{$lstContact->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
