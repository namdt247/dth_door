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
{{--                                    <img loading="lazy" class="testimonial-thumb" src="/frontend/images/clients/testimonial1.png" alt="testimonial">--}}
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

                        @if(!empty($product->large_photos) && count($product->large_photos) > 0)
                            <div id="page-slider" class="page-slider">
                                @foreach($product->large_photos as $image)
                                    <div class="item image-product-slide" style="background-image:url({{ $image }})">
                                    </div>
                                @endforeach
    {{--                            <div class="item">--}}
    {{--                                <img loading="lazy" class="img-fluid" src="/frontend/images/projects/project1.jpg" alt="project-slider-image" />--}}
    {{--                            </div>--}}
                            </div><!-- Slider end -->

                            <div class="gap-20"></div>

                            <div class="row">
                                <?php
                                    $count = 0;
                                ?>
                                @while($count < 3)
                                    @foreach($product->large_photos as $image)
                                        @if($count < 3)
                                            <div class="col-md-4 row2">
                                                <div class="item image-product-detail" style="background-image:url({{ $image }})">
                                                </div>
                                            </div>
                                        @endif
                                        <?php
                                            $count++;
                                        ?>
                                    @endforeach
                                @endwhile
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
                        <div class="col-lg-4 col-md-6">
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
