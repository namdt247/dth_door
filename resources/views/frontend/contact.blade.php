@extends('frontend.layout_master')

@section('content')
    <!-- Banner -->
    <div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Liên hệ</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liên hệ với chúng tôi</li>
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

            <!-- Message -->
            @if( \Illuminate\Support\Facades\Session::has('success_message'))
                <div class="alert alert-success alert-dismissible mb-5">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>
                        <i class="icon fas fa-lg fa-check text-success"></i>
                        Thành công
                    </h4>
                    {{ \Illuminate\Support\Facades\Session::get('success_message') }}
                </div>
            @elseif( \Illuminate\Support\Facades\Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible mb-5">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>
                        <i class="icon fas fa-lg fa-exclamation-triangle text-danger"></i>
                        Thất bại
                    </h4>
                    {{ \Illuminate\Support\Facades\Session::get('error_message') }}
                </div>
            @endif

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Văn phòng</h2>
                    <h3 class="section-sub-title">Vị trí của chúng tôi</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-md-4 mb-md-0 mb-1">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fas fa-map-marker-alt mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Văn phòng giao dịch</h4>
                            <p>Số 9, LK11B, Khu đô thị Mỗ Lao, HN</p>
                        </div>
                    </div>
                </div><!-- Col 1 end -->

                <div class="col-md-4 mb-md-0 mb-1">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-envelope mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Email</h4>
                            <p>dthdoor68@gmail.com</p>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

                <div class="col-md-4 mb-md-0 mb-1">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-phone-square mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Phone</h4>
                            <p>(+84) 846863336</p>
                        </div>
                    </div>
                </div><!-- Col 3 end -->

            </div><!-- 1st row end -->

            <div class="gap-60"></div>

{{--            <div class="google-map">--}}
{{--                <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Constra"></div>--}}
{{--            </div>--}}

            <div class="gap-40"></div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="column-title">Bạn cần tư vấn?</h3>
{{--                    <h3 class="column-title">Liên hệ ngay để nhận tư vấn</h3>--}}
                    <!-- contact form works with formspree.io  -->
                    <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                    <form id="contact-form" action="/contact" method="post" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input class="form-control form-control-name" name="txtFullName" id="txtFullName"
                                           placeholder="" type="text" maxlength="100" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input class="form-control form-control-email" name="txtPhone" id="txtPhone"
                                           placeholder="" minlength="8" maxlength="12" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lời nhắn</label>
                            <textarea class="form-control form-control-message" name="txtMessage" id="txtMessage"
                                      placeholder="Vui lòng để lại lời nhắn tại đây" maxlength="1000"
                                      rows="10" required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank btn-submit-contact" type="submit">Gửi yêu cầu</button>
                        </div>
                    </form>
                </div>

            </div><!-- Content row -->
        </div><!-- Conatiner end -->
    </section>
@endsection