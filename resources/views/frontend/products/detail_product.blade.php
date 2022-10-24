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
        @if(!empty($message_error))
            <div class="container">
                <div style="height: 300px; padding-bottom: 70px" class="col-12">
                    <div style="font-size: 1.75rem; color: darkgray" class="d-flex w-100 h-100 justify-content-center align-items-center">
                        <div class="text-center">
                            <div class="mb-4">
                                {!! $message_error !!}
                            </div>
                            <a class="btn btn-primary" href="/list-cate">Sản phẩm khác</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 d-lg-block d-none">
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
                            <div class="row">
                                <div class="col-md-5 col-12 mb-md-0 mb-5">
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
                                            <?php $count = 0; ?>
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
                                                <?php $count++; ?>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-7 col-12">
                                    <h3 class="column-title mb-3">{!! $product->name !!}</h3>

                                    <div>
                                        <span class="product-price">Giá: </span>
                                        @if($product->price)
                                            <span class="product-price-text">{!! number_format($product->price, 0, '', ',') !!}đ</span>
                                        @else
                                            <span class="product-price-text">Liên hệ</span>
                                        @endif
                                    </div>
                                    <hr class="my-2"/>

                                    <div class="mb-1">
                                        Nếu quý khách có nhu cầu đặt hàng vui lòng liên hệ với
                                        <span class="product-contact-text">Dthdoor</span>
                                    </div>

                                    <div>
                                        <div class="mb-1">
                                            <i class="fa fa-hand-point-right" aria-hidden="true"></i>
                                            <span><b>Địa chỉ: </b></span>
                                            <span>Số 9, LK11B, Khu đô thị Mỗ Lao, Hà Đông, Hà Nội</span>
                                        </div>
                                        <div class="mb-1">
                                            <i class="fa fa-hand-point-right" aria-hidden="true"></i>
                                            <span><b>Hotline: </b></span>
                                            <span>084 686 3336</span>
                                        </div>
                                        <div class="mb-1">
                                            <i class="fa fa-hand-point-right" aria-hidden="true"></i>
                                            <span><b>Email: </b></span>
                                            <span>dthdoor68@gmail.com</span>
                                        </div>
                                        <div class="mb-1">
                                            <i class="fa fa-hand-point-right" aria-hidden="true"></i>
                                            <span><b>Website: </b></span>
                                            <span>dthdoor.com.vn</span>
                                        </div>
                                        <div>
                                            Ngoài mẫu trên chúng tôi còn có rất nhiều mẫu khác có thể đáp ứng những nhu cầu khác nhau của quý khách hàng.
                                            Quý khách cần tư vấn, hỗ trợ vui lòng gọi qua Hotline: <span class="product-hotline">084 686 3336</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="column-title-small custom-column-title-small">Chi tiết sản phẩm</h3>

                            <div class="row">
                                <div class="col-md-12 product-description">
                                    <p>{!! $product->title !!}</p>
                                    {!! $product->description !!}
                                </div>
                            </div>
                            <!--2nd row end -->

                            <div class="gap-40"></div>

                        </div><!-- Content inner end -->
                    </div><!-- Content Col end -->
                </div><!-- Main row end -->

                <div class="gap-40"></div>

                <h3 class="column-title-small mb-0">Sản phẩm liên quan</h3>
                <hr style="margin: 1rem 0;"/>
                <div class="gap-20"></div>
                @if(!empty($lstProductNotIn) && $lstProductNotIn->count())
                    <div class="row">
                        @foreach($lstProductNotIn as $prd)
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="ts-service-box">
                                    <div class="ts-service-image-wrapper custom-ts-service-image-wrapper">
                                        <a href="{!! route('user.detailProduct', $prd->id) !!}">
                                            <div class="image-product-other" style="background-image:url({{$prd->large_photo}})">
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
                            </div>
                        @endforeach
                    </div><!-- Main row end -->
                @endif
            </div><!-- Conatiner end -->
        @endif
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
                slidesToShow: 1,
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
