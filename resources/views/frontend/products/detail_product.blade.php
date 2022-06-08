@extends('frontend.layout_master')

@section('header-css')
    <link rel="stylesheet" href="/frontend/plugins/fancy-box/jquery.fancybox.min.css">
@endsection

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
                                    <li class="breadcrumb-item"><a href="/list-products">Sản phẩm</a></li>
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

                <div class="col-xl-3 col-lg-4 row1">
                    <div class="sidebar sidebar-left">
                        <div class="widget">
                            <h3 class="widget-title">Danh mục</h3>
                            <ul class="nav service-menu">
                                @foreach($lstCate as $cate)
                                    <li><a href="/list-products?cateId={!! $cate->id !!}">{!! $cate->name !!}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- Widget end -->

                        <div class="widget">
                            <div class="quote-item quote-border">
                                <div class="quote-text-border">
                                    Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng
                                </div>

                                <div class="quote-item-footer">
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

                        <h2 class="column-title mrt-0">{!! $product->name !!}</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <p>{!! $product->title !!}</p>
                            </div><!-- col end -->
                        </div><!-- 1st row end-->

                        <div class="gap-20"></div>

                        <!-- Slider images -->
                        @if(!empty($product->large_photos) && count($product->large_photos) > 0)
                            <div class="slider-for mb-3">
                                @foreach($product->large_photos as $image)
                                    <div class="slider-item image-product-slide" style="background-image:url({{ $image }})">
                                    </div>
                                @endforeach
                            </div>
                            <div class="px-3 px-md-0">
                                <div class="slider-nav">
                                    @foreach($product->large_photos as $image)
                                        <div class="slider-item image-product-slide-small m-2" style="background-image:url({{ $image }})">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="gap-20"></div>

                            <div class="text-center">
                                <?php
                                    $count = 0;
                                ?>
                                @foreach($product->large_photos as $image)
                                    @if($count < 1)
                                        <a href="{!! $image !!}" data-fancybox="gallery" class="btn-show-fancy">
                                            <img src="{!! $image !!}" alt="products" class="d-none">
                                            <span>
                                                Xem chi tiết {!! count($product->large_photos) !!} ảnh
                                                <i class="fas fa-image ml-1"></i>
                                            </span>
                                        </a>
                                    @else
                                        <a href="{!! $image !!}" data-fancybox="gallery" class="d-none">
                                            <img src="{!! $image !!}" alt="products">
                                        </a>
                                    @endif

                                    <?php
                                        $count++;
                                    ?>
                                @endforeach
                            </div>
                        @endif

                        <div class="gap-40"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="column-title-small">Chi tiết sản phẩm</h3>

                                {!! $product->description !!}
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
            @if(!empty($lstProductNotIn) && $lstProductNotIn->count())
                <div class="row">
                    @foreach($lstProductNotIn as $prd)
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="ts-service-box">
                                <div class="ts-service-image-wrapper custom-ts-service-image-wrapper">
                                    <a href="{!! route('user.detailProduct', $prd->id) !!}">
                                        <div class="image-product" style="background-image:url({{$prd->large_photo}})">
                                        </div>
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
                                        <h3 class="service-box-title mt-2 mb-0">
                                            <a href="{!! route('user.detailProduct', $prd->id) !!}">{!! $prd->name !!}</a>
                                        </h3>
                                        <a class="learn-more d-inline-block custom-view-detail" href="{!! route('user.detailProduct', $prd->id) !!}" aria-label="service-details">
                                            <i class="fa fa-caret-right"></i> Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div><!-- Main row end -->
            @endif
        </div><!-- Conatiner end -->
    </section>
@endsection

@section('main-script')
    <script src="/frontend/plugins/fancy-box/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                centerMode: true,
                focusOnSelect: true,
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
