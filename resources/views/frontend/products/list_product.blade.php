@extends('frontend.layout_master')

@section('content')
    <!-- Banner -->
    <div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Sản phẩm</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
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
            <div class="row">
                @if(!empty($lstProduct) && $lstProduct->count())
                    @foreach($lstProduct as $prd)
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="ts-service-box">
                                <div class="ts-service-image-wrapper custom-ts-service-image-wrapper">
                                    <a href="{!! route('user.detailProduct', $prd->id) !!}">
                                        <div class="image-product" style="background-image:url({{$prd->large_photo}})">
                                        </div>
    {{--                                    <img loading="lazy" class="w-100" src="{{ $prd->large_photo }}" alt="product" style="height: 300px">--}}
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
    {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                        <a class="learn-more d-inline-block custom-view-detail" href="{!! route('user.detailProduct', $prd->id) !!}" aria-label="service-details">
                                            <i class="fa fa-caret-right"></i> Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 d-flex justify-content-center">
                        {!! $lstProduct->links() !!}
                    </div>
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
            </div><!-- Main row end -->
        </div><!-- Conatiner end -->
    </section>
@endsection