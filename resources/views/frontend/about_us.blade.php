@extends('frontend.layout_master')

@section('content')
    <!-- Banner -->
    <div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Giới thiệu</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <!-- Main container -->
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="column-title">Đôi lời về DTH Door</h3>
                    <p>
                        Chuyên sản xuất và thi công trọn gói cửa nhôm kính,
                        cửa kính cường lực, vách kính, lan can kính, cầu thang kính, cabin tắm...
                    </p>
                    <blockquote>
                        <p>
                            Chuyên nghiệp trong từng dự án, tận tâm đến từng chi tiết
                        </p>
                    </blockquote>
                    <p>
                        Với 6 năm kinh nghiệm trong lĩnh vực sản xuất và thi công hoàn thiện cửa nhôm kính.
                        Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng,
                        an toàn và thẩm mỹ. Từ đội ngũ tư vấn, thiết kế chi tiết và tận tâm đến đội ngũ sản xuất,
                        lắp đặt với kinh nghiệm nhiều năm trong nghề
                    </p>
                </div><!-- Col end -->

                <div class="col-lg-6 mt-5 mt-lg-0 row1">
                    <div id="page-slider" class="page-slider small-bg">
                        <div class="item" style="background-image:url(/frontend/images/slider-pages/slide-page1.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Tiên phong</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Item 1 end -->

                        <div class="item" style="background-image:url(/frontend/images/slider-pages/slide-page2.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Hợp tác</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Item 1 end -->

                        <div class="item" style="background-image:url(/frontend/images/slider-pages/slide-page3.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Chất lượng</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Item 1 end -->
                    </div><!-- Page slider end-->
                </div><!-- Col end -->
            </div><!-- Content row end -->

        </div><!-- Container end -->
    </section>

    <!-- Overview -->
    <section id="facts" class="facts-area dark-bg row1">
        <div class="container">
            <div class="facts-wrapper">
                <div class="row">
                    <div class="col-md-3 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="/frontend/images/icon-image/fact1.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="268">0</span></h2>
                            <h3 class="ts-facts-title">Dự án</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="/frontend/images/icon-image/fact2.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="1000">0</span></h2>
                            <h3 class="ts-facts-title">Công trình dân dụng</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="/frontend/images/icon-image/fact3.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="3000">0</span></h2>
                            <h3 class="ts-facts-title">Khách hàng</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="/frontend/images/icon-image/fact4.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="400">0</span></h2>
                            <h3 class="ts-facts-title">Đối tác KTS</h3>
                        </div>
                    </div><!-- Col end -->

                </div> <!-- Facts end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section>

    <!--/ Team member -->
    <section id="ts-team" class="ts-team ">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="section-title">Dịch vụ chất lượng</h2>
                    <h3 class="section-sub-title">Đội ngũ chuyên nghiệp</h3>
                </div>
            </div><!--/ Title row end -->

            <div class="row">
                <div class="col-lg-12">
                    <div id="team-slide" class="team-slide">
                        <div class="item">
                            <div class="ts-team-wrapper">
                                <div class="team-img-wrapper">
                                    <img loading="lazy" class="w-100" src="/frontend/images/team-member/team-member-03.jpg" alt="team-img">
                                </div>
                                <div class="ts-team-content">
                                    <h3 class="ts-name">Mr. Thuỷ</h3>
                                    <p class="ts-designation">Tổng giám đốc</p>
                                    <p class="ts-description">DTH Door luôn tạo ra các giá trị khác biệt</p>
                                </div>
                            </div><!--/ Team wrapper end -->
                        </div><!-- Team 1 end -->

                        <div class="item">
                            <div class="ts-team-wrapper">
                                <div class="team-img-wrapper">
                                    <img loading="lazy" class="w-100" src="/frontend/images/team-member/team-member-01.jpg" alt="team-img">
                                </div>
                                <div class="ts-team-content">
                                    <h3 class="ts-name">Mr. Đông</h3>
                                    <p class="ts-designation">PGD. Vận hành</p>
                                    <p class="ts-description">DTH Door luôn đổi mới sáng tạo trong từng công trình</p>
                                </div>
                            </div><!--/ Team wrapper end -->
                        </div><!-- Team 2 end -->

                        <div class="item">
                            <div class="ts-team-wrapper">
                                <div class="team-img-wrapper">
                                    <img loading="lazy" class="w-100" src="/frontend/images/team-member/team-member-02.jpg" alt="team-img">
                                </div>
                                <div class="ts-team-content">
                                    <h3 class="ts-name">Mr. Hùng</h3>
                                    <p class="ts-designation">PGĐ. Kỹ thuật</p>
                                    <p class="ts-description">DTH Door dịch vụ tuyệt vời làm hài lòng mọi khách hàng</p>
                                </div>
                            </div><!--/ Team wrapper end -->
                        </div><!-- Team 3 end -->
                    </div><!-- Team slide end -->
                </div>
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section>
@endsection
