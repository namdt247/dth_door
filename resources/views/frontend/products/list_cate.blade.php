@extends('frontend.layout_master')

@section('content')
    <!-- Banner -->
    <div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Danh mục sản phẩm</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <!-- Main container -->
    <section id="main-container" class="main-container pb-2">
        <div class="container">
            @if(!empty($lstCate) && $lstCate->count())
                @foreach($lstCate as $cate)
                    <?php $lstPrd = $cate->product; ?>
                    <h4 class="text-danger title-cate pb-1 mb-4">
                        {!! $cate->name !!}
                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="" aria-disabled="false">Next</button>
                    </h4>
                    <div class="px-3 mb-5">
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
                @endforeach
            @else
                <div style="height: 300px; padding-bottom: 70px" class="col-12">
                    <div style="font-size: 1.75rem; color: darkgray" class="d-flex w-100 h-100 justify-content-center align-items-center">
                        <div class="text-center">
                            <div class="mb-4">
                                Không có danh sách sản phẩm
                            </div>
                            <a class="btn btn-primary" href="/">Về trang chủ</a>
                        </div>
                    </div>
                </div>
            @endif
        </div><!-- Conatiner end -->
    </section>

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
