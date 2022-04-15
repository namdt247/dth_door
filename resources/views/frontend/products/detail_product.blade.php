@extends('frontend.layout_master')

@section('content')
    <!-- Banner -->
    <div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Chi tiết sản phẩm</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/list-product">Sản phẩm</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div>

    <!-- Main container -->
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar sidebar-left">
                        <div class="widget">
                            <h3 class="widget-title">Giải pháp</h3>
                            <ul class="nav service-menu">
                                <li><a href="#">Cửa kính cường lực</a></li>
{{--                                <li class="active"><a href="service-single.html">Vách kính</a></li>--}}
                                <li><a href="#">Vách kính</a></li>
                                <li><a href="#">Lan can kính</a></li>
                                <li><a href="#">Cầu thang kính</a></li>
                                <li><a href="#">Cabin tắm</a></li>
                            </ul>
                        </div><!-- Widget end -->

                        <div class="widget">
                            <div class="quote-item quote-border">
                                <div class="quote-text-border">
                                    Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng
                                </div>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb" src="/frontend/images/clients/testimonial1.png" alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Mr. Thuỷ</h3>
                                        <span class="quote-subtext">CEO, DTH Door</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->

                        </div><!-- Widget end -->

                    </div><!-- Sidebar end -->
                </div><!-- Sidebar Col end -->

                <div class="col-xl-8 col-lg-8">
                    <div class="content-inner-page">

                        <h2 class="column-title mrt-0">Nhôm Xingfa</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <p>Xingfa Group Quảng Đông (tên đầy đủ là Guangdong Xingfa Aluminium Co., Ltd) là công ty sản xuất nhôm toàn cầu được thành lập vào năm 1984 với trụ sở chính đặt ở Phật Sơn, Quảng Đông, Trung Quốc</p>
                            </div><!-- col end -->
                        </div><!-- 1st row end-->

                        <div class="gap-20"></div>

                        <div id="page-slider" class="page-slider">
                            <div class="item">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/projects/project1.jpg" alt="project-slider-image" />
                            </div>

                            <div class="item">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/projects/project2.jpg" alt="project-slider-image" />
                            </div>
                        </div><!-- Page slider end -->

                        <div class="gap-20"></div>

                        <div class="row">
                            <div class="col-md-4">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/projects/project1.jpg" alt="project-slider-image" />
                            </div>
                            <div class="col-md-4">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/projects/project1.jpg" alt="project-slider-image" />
                            </div>
                            <div class="col-md-4">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/projects/project1.jpg" alt="project-slider-image" />
                            </div>
                        </div>

                        <div class="gap-40"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="column-title-small">Chi tiết sản phẩm</h3>

                                <p>Xingfa Group là một trong những nhà sản xuất nhôm đùn sớm nhất tại Trung Quốc.
                                    Hiện nay, Xingfa Group có sở hữu 636 bằng sáng chế trong nhiều lĩnh vực quan
                                    trọng với hơn 40.000 sản phẩm khác loại, trở thành doanh nghiệp quy mô lớn trên phạm
                                    vi toàn cầu. Các lĩnh vực chính là Xingfa Group tham gia gồm sản xuất nhôm xây dựng ứng dụng,
                                    máy móc điện tử, vận tải, hàng không...</p>
                                <p>
                                    Các dòng sản phẩm chính của Xingfa trong thị trường Việt Nam gồm cửa sổ, cửa đi và vách ngăn tương ứng với các hệ 55, hệ 93, hệ 65
                                </p>
                                <ul class="list-arrow">
                                    <li>Hệ 65 có độ dày từ 3.0 – 5.0mm thiết kế dành cho vách ngăn và các loại mặt dựng tòa nhà</li>
                                    <li>Hệ 55 có độ dày từ 1.4 – 2.0mm dành cho các loại cửa đi mở quay, cửa sổ mở quay, cửa sổ mở hất</li>
                                    <li>Hệ 93 có độ dày 2.0mm dành cho các loại cửa có cấu trúc phức tạp hơn là cửa trượt lùa, cửa xếp gấp</li>
                                </ul>
                            </div>
                        </div>
                        <!--2nd row end -->

                        <div class="gap-40"></div>

                    </div><!-- Content inner end -->
                </div><!-- Content Col end -->


            </div><!-- Main row end -->

            <div class="gap-40"></div>

            <h3 class="column-title-small mb-0">Sản phẩm khác</h3>
            <hr style="margin: 1rem 0;"/>
            <div class="gap-20"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper custom-ts-service-image-wrapper">
                            <a href="/list-product/product/1">
                                <img loading="lazy" class="w-100" src="/frontend/images/product/nhom_demo.jpg" alt="service-image">
                            </a>
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-info custom-ts-service-info">
                                <div class="wrap-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h3 class="service-box-title mt-2 mb-0"><a href="/list-product/product/1">Nhôm Xingfa</a></h3>
                                {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                <a class="learn-more d-inline-block custom-view-detail" href="/list-product/product/1" aria-label="service-details"><i class="fa fa-caret-right"></i> Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper custom-ts-service-image-wrapper">
                            <a href="/list-product/product/1">
                                <img loading="lazy" class="w-100" src="/frontend/images/product/nhom_demo.jpg" alt="service-image">
                            </a>
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-info custom-ts-service-info">
                                <div class="wrap-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h3 class="service-box-title mt-2 mb-0"><a href="/list-product/product/1">Nhôm Xingfa</a></h3>
                                {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                <a class="learn-more d-inline-block custom-view-detail" href="/list-product/product/1" aria-label="service-details"><i class="fa fa-caret-right"></i> Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper custom-ts-service-image-wrapper">
                            <a href="/list-product/product/1">
                                <img loading="lazy" class="w-100" src="/frontend/images/product/nhom_demo.jpg" alt="service-image">
                            </a>
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-info custom-ts-service-info">
                                <div class="wrap-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h3 class="service-box-title mt-2 mb-0"><a href="/list-product/product/1">Nhôm Xingfa</a></h3>
                                {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                <a class="learn-more d-inline-block custom-view-detail" href="/list-product/product/1" aria-label="service-details"><i class="fa fa-caret-right"></i> Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Main row end -->
        </div><!-- Conatiner end -->
    </section>
@endsection