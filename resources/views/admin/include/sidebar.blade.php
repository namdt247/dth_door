<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">
        <!-- .aside-header -->
        <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
                <span class="user-avatar user-avatar-lg"><img src="/admin/assets/images/avatars/user_admin.png" alt=""></span>
                <span class="account-icon">
                    <span class="fa fa-caret-down fa-lg"></span>
                </span>
                <span class="account-summary">
                    <span class="account-name">
                        @if (\Illuminate\Support\Facades\Auth::check())
                            {!! \Illuminate\Support\Facades\Auth::user()->full_name !!}
                        @else
                            Admin
                        @endif
                    </span>
                    <span class="account-description">
                        Quản trị viên
                    </span>
                </span>
            </button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
                <!-- dropdown-items -->
                <div class="pb-3">
                    <a class="dropdown-item" href="#"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="/admin/logout"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
        </header><!-- /.aside-header -->
        <!-- .aside-menu -->
        <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
                <!-- .menu -->
                <ul class="menu">
                    <!-- .menu-item -->
                    <li class="menu-item">
                        <a href="/admin/dashboard" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                    </li>
                    <!-- /.menu-item -->

                    <!-- .menu-header -->
                    <li class="menu-header">Users</li>
                    <!-- /.menu-header -->

                    <!-- .menu-item -->
                    <li class="menu-item has-child {{ request()->is('admin/user/*') ? 'has-active' : '' }}">
                        <a href="#" class="menu-link"><span class="menu-icon fa fa-users"></span> <span class="menu-text">Quản lý tài khoản</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item {{ request()->is('admin/user/list') ? 'has-active' : '' }}">
                                <a href="/admin/user/list" class="menu-link">Tài khoản</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li>
                    <!-- /.menu-item -->

                    <!-- .menu-header -->
                    <li class="menu-header">Products</li>
                    <!-- /.menu-header -->

                    <!-- .menu-item -->
                    <li class="menu-item has-child {{ request()->is('admin/cate/*') ? 'has-active' : '' }}">
                        <a href="#" class="menu-link">
                            <span class="menu-icon fa fa-list-alt"></span>
                            <span class="menu-text">Danh mục</span>
                        </a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item {{ request()->is('admin/cate/list') ? 'has-active' : '' }}">
                                <a href="/admin/cate/list" class="menu-link">Danh sách</a>
                            </li>
                            <li class="menu-item {{ request()->is('admin/cate/add') ? 'has-active' : '' }}">
                                <a href="/admin/cate/add" class="menu-link">Thêm mới</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li>
                    <!-- /.menu-item -->

                    <!-- .menu-item -->
                    <li class="menu-item has-child {{ request()->is('admin/product/*') ? 'has-active' : '' }}">
                        <a href="#" class="menu-link"><span class="menu-icon fa fa-cube"></span> <span class="menu-text">Sản phẩm</span></a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item {{ request()->is('admin/product/list') ? 'has-active' : '' }}">
                                <a href="/admin/product/list" class="menu-link">Danh sách</a>
                            </li>
                            <li class="menu-item {{ request()->is('admin/product/add') ? 'has-active' : '' }}">
                                <a href="/admin/product/add" class="menu-link">Thêm mới</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li>
                    <!-- /.menu-item -->

                    <!-- .menu-header -->
                    <li class="menu-header">Contact</li>
                    <!-- /.menu-header -->

                    <!-- .menu-item -->
                    <li class="menu-item {{ request()->is('admin/contact/*') ? 'has-active' : '' }}">
                        <a href="/admin/contact/list" class="menu-link">
                            <span class="menu-icon fa fa-comments"></span>
                            <span class="menu-text">Liên hệ</span>
                        </a>
                    </li>
                    <!-- /.menu-item -->
                </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
        </div><!-- /.aside-menu -->
        <!-- Skin changer -->
        <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
        </footer><!-- /Skin changer -->
    </div><!-- /.aside-content -->
</aside>
