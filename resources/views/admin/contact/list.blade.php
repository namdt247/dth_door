@extends('admin.layout_admin_master')

@section('main-content')
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
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
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lstContact as $contact)
                                        <tr>
                                            <td class="align-middle">
                                                <b>{!! ++$loop->index !!}</b>
                                            </td>
                                            <td class="align-middle">
                                                {!! $contact->fullName !!}
                                            </td>
                                            <td class="align-middle">
                                                {!! $contact->phone !!}
                                            </td>
                                            <td class="align-middle" width="45%">
                                                {!! $contact->message !!}
                                            </td>
                                            <td class="align-middle">
                                                @if($contact->status === \App\Helper\Config::CONTACT_PENDING)
                                                    <span class="badge badge-subtle badge-primary">Chờ xử lý</span>
                                                @elseif($contact->status === \App\Helper\Config::CONTACT_DONE)
                                                    <span class="badge badge-subtle badge-success">Đã xử lý</span>
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
