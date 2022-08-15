@extends('admin.layout_admin_master')

@section('main-content')
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto">Quản lý tài khoản</h1>
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
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lstUser as $user)
                                        <tr>
                                            <td class="align-middle">
                                                <b>{!! $user->id !!}</b>
                                            </td>
                                            <td class="align-middle">
                                                {!! $user->full_name !!}
                                            </td>
                                            <td class="align-middle">
                                                {!! $user->email !!}
                                            </td>
                                            <td class="align-middle">
                                                @if($user->status === \App\Helper\Config::STATUS_ACTIVE)
                                                    <span class="badge badge-subtle badge-primary">Active</span>
                                                @endif
                                            </td>
                                            <td class="align-middle text-center" width="90px">
                                                <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a> <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination justify-content-center mt-4">
                                {{$lstUser->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
