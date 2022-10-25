@extends('frontend.layout_master')

@section('content')
    <!--/ banner -->
    @include('frontend.include.home.banner2')

    <!--/ Action home -->
    @include('frontend.include.home.action_home')
    @include('frontend.include.home.action_home2')

    <!-- Service -->
    @include('frontend.include.home.service')

    <!-- Project highlight -->
    @if(!empty($lstCate) && $lstCate->count())
        <div id="project-area" class="project-area wrap-child-component-2 solid-bg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2 class="section-title">Sản phẩm</h2>
                        <h3 class="section-sub-title section-sub-title-mobile">Sản phẩm nổi bật</h3>
                    </div>
                </div>

                <?php $countCate = 0; ?>
                @foreach($lstCate as $cate)
                    <?php $lstPrd = $cate->product; ?>

                    @if(!empty($lstPrd) && count($lstPrd) >= 4 && $countCate < 3)
                        <?php $countCate++; ?>
                        <h4 class="title-cate pb-1 mb-4">
                            {!! $cate->name !!}
                            <button class="slick-next slick-arrow" aria-label="Next" type="button" style="" aria-disabled="false">Next</button>
                        </h4>
                        <div class="px-3 mb-md-5 mb-4">
                            <div class="cate-slick">
                                @foreach($lstPrd as $prd)
                                    <div class="m-2">
                                        <a href="{!! route('user.detailProduct', $prd->id) !!}">
                                            <div class="image-product-slider" style="background-image:url({{$prd->large_photo}})">
                                            </div>
                                        </a>
                                        <div class="d-flex">
                                            <div class="ts-service-info custom-ts-service-info">
                                                <div class="wrap-star">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="service-box-title-custom mt-2 mb-1">
                                                    <a href="{!! route('user.detailProduct', $prd->id) !!}">{!! $prd->name !!}</a>
                                                </div>
                                                <div>
                                                    <span><b>Giá: </b></span>
                                                    @if($prd->price)
                                                        <span class="product-price-text-2">{!! number_format($prd->price, 0, '', ',') !!}đ</span>
                                                    @else
                                                        <span class="product-price-text-2">Liên hệ</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach

                <div class="col-12 mt-5">
                    <div class="general-btn text-center m-btn-mobile">
                        <a class="btn btn-primary" href="/list-cate">Xem thêm</a>
                    </div>
                </div>

{{--                <div class="row">--}}
{{--                        <?php $count = 0; ?>--}}
{{--                    @foreach($lstProductNewest as $prd)--}}
{{--                            <?php $count++; ?>--}}
{{--                        <div class="col-lg-4 col-md-6 col-6 mb-4 {{ $count >= 4 ? 'd-block d-lg-none' : '' }}">--}}
{{--                            <div class="latest-post">--}}
{{--                                <div class="latest-post-media">--}}
{{--                                    <a href="{!! route('user.detailProduct', $prd->id) !!}" class="latest-post-img">--}}
{{--                                        <div class="image-product" style="background-image:url({{$prd->large_photo}})">--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="ts-service-info custom-ts-service-info">--}}
{{--                                        <h3 class="service-box-title mt-2 mb-0">--}}
{{--                                            <a href="{!! route('user.detailProduct', $prd->id) !!}">{!! $prd->name !!}</a>--}}
{{--                                        </h3>--}}
{{--                                        --}}{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
{{--                                        <a class="learn-more d-inline-block custom-view-detail" href="{!! route('user.detailProduct', $prd->id) !!}" aria-label="service-details">--}}
{{--                                            <i class="fa fa-caret-right"></i> Chi tiết</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                --}}{{--                                <div class="post-body">--}}
{{--                                --}}{{--                                    <h4 class="post-title">--}}
{{--                                --}}{{--                                        <a href="{!! route('user.detailProduct', $prd->id) !!}" class="d-inline-block">{!! $prd->name !!}</a>--}}
{{--                                --}}{{--                                    </h4>--}}
{{--                                --}}{{--                                </div>--}}
{{--                            </div><!-- Latest post end -->--}}
{{--                        </div><!-- 1st post col end -->--}}
{{--                    @endforeach--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="general-btn text-center m-btn-mobile">--}}
{{--                            <a class="btn btn-primary" href="/list-cate">Xem thêm</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    @endif

    <!--/ Project template -->
    @include('frontend.include.home.project_template')

    <!--/ Call action -->
    @include('frontend.include.home.call_action')

    <!-- About us -->
    @include('frontend.include.home.about_us')

    <!-- Overview -->
    @include('frontend.include.home.overview')

    <!-- Feedback -->
    @include('frontend.include.home.feedback')
@endsection

@section('main-script')
    <script>
        $(document).ready(function(){
            $('.cate-slick').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                ]
            });
        });
    </script>
@endsection
