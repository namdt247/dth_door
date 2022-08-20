<header id="header" class="header-one d-md-block d-none">
    <div class="bg-white">
        <div class="container">
            <div class="logo-area logo-area-custom">
                <div class="row align-items-center">
                    <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                        <a class="d-block" href="/">
                            <img loading="lazy" src="/frontend/images/logo_dth_6.png" alt="dth">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-lg-9 header-right">
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Phone</p>
                                        <p class="info-box-subtitle">
                                            <a href="tel:0846863336">
                                                (+84) {!! \App\Helper\CompanyInfo::PHONE !!}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Email</p>
                                        <p class="info-box-subtitle">
                                            <a href="mailto:dthdoor68@gmail.com">
                                                {!! \App\Helper\CompanyInfo::EMAIL !!}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="header-get-a-quote">
                                <a class="btn btn-primary" href="/contact">Liên hệ ngay</a>
                            </li>
                        </ul><!-- Ul end -->
                    </div><!-- header right end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>

    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav mr-auto">
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
                                        Sản phẩm <i class="fa fa-angle-down"></i>
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
