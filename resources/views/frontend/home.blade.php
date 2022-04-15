@extends('frontend.layout_master')

@section('content')
    <!--/ banner -->
    <div class="banner-carousel banner-carousel-1 mb-0">
        <div class="banner-carousel-item" style="background-image:url(/frontend/images/slider-main/bg1.jpg)">
            <div class="slider-content">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12 text-center">
                            <h2 class="slide-title" data-animation-in="slideInLeft">DTH Door</h2>
                            <h3 class="slide-sub-title" data-animation-in="slideInRight">Tận Tâm Đến Từng Chi Tiết</h3>
                            <p data-animation-in="slideInLeft" data-duration-in="1.2">
                                <a href="#" class="slider btn btn-primary">Sản phẩm</a>
                                <a href="#" class="slider btn btn-primary border">Liên hệ ngay</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url(/frontend/images/slider-main/bg2.jpg)">
            <div class="slider-content text-left">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h2 class="slide-title-box" data-animation-in="slideInDown">Dịch vụ quốc tế</h2>
                            <h3 class="slide-title" data-animation-in="fadeIn">Dịch vụ hàng đầu</h3>
                            <h3 class="slide-sub-title" data-animation-in="slideInLeft">Chất lượng quốc tế</h3>
                            {{--                            <p data-animation-in="slideInRight">--}}
                            {{--                                <a href="services.html" class="slider btn btn-primary border">Our Services</a>--}}
                            {{--                            </p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url(/frontend/images/slider-main/bg3.jpg)">
            <div class="slider-content text-right">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h2 class="slide-title" data-animation-in="slideInDown">Gặp gỡ các kỹ sư của chúng tôi</h2>
                            <h3 class="slide-sub-title" data-animation-in="fadeIn">Sự bền vững</h3>
                            <p class="slider-description lead" data-animation-in="slideInRight">
                                Sẽ làm nên thành công cho công trình của bạn
                            </p>
                            {{--                            <div data-animation-in="slideInLeft">--}}
                            {{--                                <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Get--}}
                            {{--                                    Free Quote</a>--}}
                            {{--                                <a href="about.html" class="slider btn btn-primary border"--}}
                            {{--                                   aria-label="learn-more-about-us">Learn more</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Call action -->
    <section class="call-to-action-box no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Bạn cần tư vấn cho công trình của bạn?</h3>
                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-dark" href="#">Gửi yêu cầu</a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action style box -->
        </div><!-- Container end -->
    </section>

    <!-- About us -->
    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ts-intro">
                        <h2 class="into-title">Về chúng tôi</h2>
                        <h3 class="into-sub-title">
                            Dự án của chúng tôi
                        </h3>
                        <p>Với 6 năm kinh nghiệm trong lĩnh vực sản xuất và thi công hoàn thiện cửa nhôm kính,
                            cửa kính cường lực, vách kính, lan can kính, cầu thang kính, cabin tắm.
                            Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng,
                            an toàn và thẩm mỹ. Từ đội ngũ tư vấn, thiết kế chi tiết và tận tâm đến đội ngũ sản xuất,
                            lắp đặt với kinh nghiệm nhiều năm trong nghề.
                        </p>
                    </div><!-- Intro box end -->

                    <div class="gap-20"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="ts-service-box">
                                <span class="ts-service-icon">
                                  <i class="fas fa-trophy"></i>
                                </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Luôn luôn cải tiến</h3>
                                </div>
                            </div><!-- Service 1 end -->
                        </div><!-- col end -->

                        <div class="col-md-6">
                            <div class="ts-service-box">
                                <span class="ts-service-icon">
                                  <i class="fas fa-sliders-h"></i>
                                </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Đối tác tin cậy</h3>
                                </div>
                            </div><!-- Service 2 end -->
                        </div><!-- col end -->
                    </div><!-- Content row 1 end -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="ts-service-box">
                                <span class="ts-service-icon">
                                  <i class="fas fa-thumbs-up"></i>
                                </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Cam kết chất lượng</h3>
                                </div>
                            </div><!-- Service 1 end -->
                        </div><!-- col end -->

                        <div class="col-md-6">
                            <div class="ts-service-box">
                                <span class="ts-service-icon">
                                  <i class="fas fa-users"></i>
                                </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Đội ngũ chuyên nghiệp</h3>
                                </div>
                            </div><!-- Service 2 end -->
                        </div><!-- col end -->
                    </div><!-- Content row 1 end -->
                </div><!-- Col end -->

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <h3 class="into-sub-title">Giá trị cốt lõi</h3>
                    <p>
                        Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng, an toàn và thẩm mỹ
                    </p>

                    <div class="accordion accordion-group" id="our-values-accordion">
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Chất lượng
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng, an toàn và thẩm mỹ
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        An toàn
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng, an toàn và thẩm mỹ
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        Thẩm mỹ
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng, an toàn và thẩm mỹ
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Accordion end -->

                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section>

    <!-- Overview -->
    <section id="facts" class="facts-area dark-bg">
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
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="+1000">0</span></h2>
                            <h3 class="ts-facts-title">Công trình dân dụng</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="/frontend/images/icon-image/fact3.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="+3000">0</span></h2>
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

    <!-- Service -->
    <section id="ts-service-area" class="ts-service-area pb-0">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Dịch vụ của chúng tôi</h2>
                    <h3 class="section-sub-title">Các dịch vụ</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="/frontend/images/icon-image/service-icon1.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Thiết kế</a></h3>
                            <p>Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng</p>
                        </div>
                    </div><!-- Service 1 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="/frontend/images/icon-image/service-icon2.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Thiết kế</a></h3>
                            <p>Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng</p>
                        </div>
                    </div><!-- Service 2 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="/frontend/images/icon-image/service-icon3.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Thiết kế</a></h3>
                            <p>Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng</p>
                        </div>
                    </div><!-- Service 3 end -->

                </div><!-- Col end -->

                <div class="col-lg-4 text-center">
                    <img loading="lazy" class="img-fluid" src="/frontend/images/services/service-center.jpg"
                         alt="service-avater-image">
                </div><!-- Col end -->

                <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="/frontend/images/icon-image/service-icon4.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Thiết kế</a></h3>
                            <p>Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng</p>
                        </div>
                    </div><!-- Service 4 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="/frontend/images/icon-image/service-icon5.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Thiết kế</a></h3>
                            <p>Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng</p>
                        </div>
                    </div><!-- Service 5 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="/frontend/images/icon-image/service-icon6.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Thiết kế</a></h3>
                            <p>Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng</p>
                        </div>
                    </div><!-- Service 6 end -->
                </div><!-- Col end -->
            </div><!-- Content row end -->

        </div>
        <!--/ Container end -->
    </section>

    <!-- Project highlight -->
    <section id="project-area" class="project-area solid-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    {{--                    <h2 class="section-title">Dự án</h2>--}}
                    <h3 class="section-sub-title">Sản phẩm nổi bật</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/news/news1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="news-single.html" class="d-inline-block">Cửa nhôm Xingfa</a>
                            </h4>
                        </div>
                    </div><!-- Latest post end -->
                </div><!-- 1st post col end -->

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/news/news2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="news-single.html" class="d-inline-block">Cửa nhôm Xingfa</a>
                            </h4>
                        </div>
                    </div><!-- Latest post end -->
                </div><!-- 2nd post col end -->

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/news/news3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="news-single.html" class="d-inline-block">Cửa nhôm Xingfa</a>
                            </h4>
                        </div>
                    </div><!-- Latest post end -->
                </div><!-- 3rd post col end -->
                <div class="col-12">
                    <div class="general-btn text-center">
                        <a class="btn btn-primary" href="projects.html">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Container end -->
    </section>

    <!-- Feedback -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="column-title">Phản hồi khách hàng</h3>

                    <div id="testimonial-slide" class="testimonial-slide">
                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Kĩ sư xây dựng: Tôi rất hài lòng về dịch vụ cũng như sản phẩm của DTHDOOR,
                                    đặc thù công việc của tôi bên lĩnh vực xây dựng nên rất cần các đơn vị nhà thầu về các hạng mục nhôm kính uy tín,
                                    tiến độ như DTHDOOR nên tôi rất yên tâm và tin dùng
                                </span>
                                <div class="quote-item-footer">
                                    {{--                                    <img loading="lazy" class="testimonial-thumb" src="/frontend/images/clients/testimonial1.png"--}}
                                    {{--                                         alt="testimonial">--}}
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Anh Đức</h3>
                                        <span class="quote-subtext">Kĩ sư xây dựng</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 1 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Chủ nhà: Tôi làm bên lĩnh vực y tế nên công việc khá bận.
                                    Thời gian vừa rồi tôi hoàn thiện căn nhà ở Quận Hoàng Mai nhờ sự hỗ trợ và tư vấn rất nhiệt tình của DTHDOOR
                                    mà tôi đã chọn được vật liệu ưng ý để hoàn thiện toàn căn nhà.
                                    Tôi rất hài lòng và cảm ơn đội ngũ DTHDOOR!
                                </span>

                                <div class="quote-item-footer">
                                    {{--                                    <img loading="lazy" class="testimonial-thumb" src="/frontend/images/clients/testimonial2.png"--}}
                                    {{--                                         alt="testimonial">--}}
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Chị Lan</h3>
                                        <span class="quote-subtext">Chủ nhà</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 2 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Cảm ơn anh em bên DTHDOOR đã hỗ trợ tôi về các hạng mục nhôm kính của căn biệt thự dưới
                                    Ba Vì mới hoàn thiện của tôi.
                                    Chúc anh em cty nhiều sức khỏe và chúc cty càng ngày càng phát triển hơn nữa.
                                </span>

                                <div class="quote-item-footer">
                                    {{--                                    <img loading="lazy" class="testimonial-thumb" src="/frontend/images/clients/testimonial3.png"--}}
                                    {{--                                         alt="testimonial">--}}
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Anh Tài</h3>
                                        <span class="quote-subtext">TGĐ VCM</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 3 end -->

                    </div>
                    <!--/ Testimonial carousel end-->
                </div><!-- Col end -->

                <div class="col-lg-6 mt-5 mt-lg-0">

                    <h3 class="column-title">Đối tác</h3>

                    <div class="row all-clients">
                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="/frontend/images/clients/client1.png"
                                                  alt="clients-logo"/></a>
                            </figure>
                        </div><!-- Client 1 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="/frontend/images/clients/client2.png"
                                                  alt="clients-logo"/></a>
                            </figure>
                        </div><!-- Client 2 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="/frontend/images/clients/client3.png"
                                                  alt="clients-logo"/></a>
                            </figure>
                        </div><!-- Client 3 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="/frontend/images/clients/client4.png"
                                                  alt="clients-logo"/></a>
                            </figure>
                        </div><!-- Client 4 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="/frontend/images/clients/client5.png"
                                                  alt="clients-logo"/></a>
                            </figure>
                        </div><!-- Client 5 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="/frontend/images/clients/client6.png"
                                                  alt="clients-logo"/></a>
                            </figure>
                        </div><!-- Client 6 end -->

                    </div><!-- Clients row end -->

                </div><!-- Col end -->

            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section>

    <!--/ Call action 2 -->
    <section class="subscribe no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="subscribe-call-to-acton">
                        <h3>Chúng tối có thể giúp đỡ?</h3>
                        <h4>(+84) 846-863-336</h4>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-6">
                    <div class="ts-newsletter row align-items-center">
                        <div class="col-md-12 newsletter-introtext">
                            <h4 class="text-white mb-0">Tư vấn tận tâm</h4>
                            <p class="text-white">Hỗ trợ giải đáp các thắc mắc của khách hàng</p>
                        </div>
                    </div><!-- Newsletter end -->
                </div><!-- Col end -->

            </div><!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section>

    <!--/ Project template -->
    <section id="news" class="news">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Dự án</h2>
                    <h3 class="section-sub-title">Các công trình tiêu biểu</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/news/news1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="news-single.html" class="d-inline-block">Hà Đông</a>
                            </h4>
                            <div class="latest-post-meta">
                                <span class="post-item-date">
                                    <i class="fa fa-clock-o"></i> July 20, 2017
                                </span>
                            </div>
                        </div>
                    </div><!-- Latest post end -->
                </div><!-- 1st post col end -->

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/news/news2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="news-single.html" class="d-inline-block">Hà Đông</a>
                            </h4>
                            <div class="latest-post-meta">
                                <span class="post-item-date">
                                  <i class="fa fa-clock-o"></i> June 17, 2017
                                </span>
                            </div>
                        </div>
                    </div><!-- Latest post end -->
                </div><!-- 2nd post col end -->

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img">
                                <img loading="lazy" class="img-fluid" src="/frontend/images/news/news3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="news-single.html" class="d-inline-block">Hà Đông</a>
                            </h4>
                            <div class="latest-post-meta">
                                <span class="post-item-date">
                                  <i class="fa fa-clock-o"></i> Aug 13, 2017
                                </span>
                            </div>
                        </div>
                    </div><!-- Latest post end -->
                </div><!-- 3rd post col end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section>
@endsection