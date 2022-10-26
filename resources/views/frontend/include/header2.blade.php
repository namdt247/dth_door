<header id="header" class="header-two d-md-none">
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="logo">
                            <a class="d-block" href="/">
                                <img loading="lazy" src="/frontend/images/logo_dth_7.png" alt="DTH">
                            </a>
                        </div><!-- logo end -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav ml-auto align-items-center">
                                <li class="nav-item active">
                                    <a href="/" class="nav-link">
                                        Trang chủ
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/about-us" class="nav-link">
                                        Giới thiệu
                                    </a>
                                </li>

                                <?php $lstCate = \App\Models\Category::where(\App\Helper\Query::STATUS, \App\Helper\Query::NOT_EQUAL, \App\Helper\Config::STATUS_DELETED)->orderby(\App\Helper\Query::CREATED_AT, \App\Helper\Query::ORDER_BY_ASC)->get() ?>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
{{--                                        <span onclick="redirectListCate()">Sản phẩm </span>--}}
                                        Danh mục sản phẩm
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="/list-cate">Tất cả</a></li>
                                        @foreach($lstCate as $cate)
                                            <li><a href="/list-products?cateId={!! $cate->id !!}">{!! $cate->name !!}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="/contact" class="nav-link">
                                        Liên hệ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
