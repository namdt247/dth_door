@extends('frontend.layout_master')

@section('content')
    <!--/ banner -->
    @include('frontend.include.home.banner2')

    <!--/ Action home -->
    @include('frontend.include.home.action_home')
    @include('frontend.include.home.action_home2')

    <!-- About us -->
    @include('frontend.include.home.about_us')

    <!-- Overview -->
    @include('frontend.include.home.overview')

    <!-- Service -->
    @include('frontend.include.home.service')

    <!-- Project highlight -->
    @if(!empty($lstProductNewest) && $lstProductNewest->count())
        <section id="project-area" class="project-area solid-bg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2 class="section-title">Sản phẩm</h2>
                        <h3 class="section-sub-title">Sản phẩm nổi bật</h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <?php $count = 0; ?>
                    @foreach($lstProductNewest as $prd)
                        <?php $count++; ?>
                        <div class="col-lg-4 col-md-6 col-6 mb-4 {{ $count >= 4 ? 'd-block d-md-none' : '' }}">
                            <div class="latest-post">
                                <div class="latest-post-media">
{{--                                    <a href="{!! route('user.detailProduct', $prd->id) !!}" class="latest-post-img">--}}
{{--                                        <img loading="lazy" class="img-fluid" src="/frontend/images/news/news1.jpg" alt="img">--}}
{{--                                    </a>--}}
                                    <a href="{!! route('user.detailProduct', $prd->id) !!}" class="latest-post-img">
                                        <div class="image-product" style="background-image:url({{$prd->large_photo}})">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex">
                                    <div class="ts-service-info custom-ts-service-info">
                                        <h3 class="service-box-title mt-2 mb-0">
                                            <a href="{!! route('user.detailProduct', $prd->id) !!}">{!! $prd->name !!}</a>
                                        </h3>
                                        {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                        <a class="learn-more d-inline-block custom-view-detail" href="{!! route('user.detailProduct', $prd->id) !!}" aria-label="service-details">
                                            <i class="fa fa-caret-right"></i> Chi tiết</a>
                                    </div>
                                </div>
{{--                                <div class="post-body">--}}
{{--                                    <h4 class="post-title">--}}
{{--                                        <a href="{!! route('user.detailProduct', $prd->id) !!}" class="d-inline-block">{!! $prd->name !!}</a>--}}
{{--                                    </h4>--}}
{{--                                </div>--}}
                            </div><!-- Latest post end -->
                        </div><!-- 1st post col end -->
                    @endforeach
                    <div class="col-12">
                        <div class="general-btn text-center m-btn-mobile">
                            <a class="btn btn-primary" href="/list-cate">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Container end -->
        </section>
    @endif

    <!-- Feedback -->
    @include('frontend.include.home.feedback')

    <!--/ Call action -->
    @include('frontend.include.home.call_action')

    <!--/ Project template -->
    @include('frontend.include.home.project_template')
@endsection
