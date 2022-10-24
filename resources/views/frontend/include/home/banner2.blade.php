<div class="container">
    <div class="row mt-1">
        <div class="col-md-3 pr-0 col-12 d-md-block d-none">
            <?php
                $lstCate = \App\Models\Category::where(\App\Helper\Query::STATUS, \App\Helper\Query::NOT_EQUAL, \App\Helper\Config::STATUS_DELETED)->orderby(\App\Helper\Query::CREATED_AT, \App\Helper\Query::ORDER_BY_ASC)->get();
                $count = 0;
            ?>
            @foreach($lstCate as $cate)
                @if($count < 8)
                    <a href="/list-products?cateId={!! $cate->id !!}" class="wrap-sidebar-cate d-flex align-items-center">
                        @if($cate->thumbnail)
                            <img class="cate-thumbnail mr-2" src="{!! $cate->thumbnail !!}" alt="">
                        @else
                            <img class="cate-thumbnail mr-2" src="/frontend/images/cate_default.png" alt="">
                        @endif
                        <span class="cate-name">{!! $cate->name !!}</span>
                    </a>
                @endif
                <?php $count++; ?>
            @endforeach
            @if($count >= 8)
                <a href="/list-cate" class="wrap-sidebar-cate d-flex align-items-center">
                    <img class="cate-thumbnail mr-2" src="/frontend/images/cate_default.png" alt="">
                    <span class="cate-name">Xem thêm</span>
                </a>
            @endif
        </div>
        <div class="col-md-9 col-12">
            <div class="banner-carousel banner-carousel-2 mb-0">
                <div class="banner-carousel-item" style="background-image:url(/frontend/images/slider-main/bg4.jpg)">
                    <div class="container">
                        <div class="box-slider-content">
                            <div class="box-slider-text">
                                <h2 class="box-slide-title">Với 6 năm kinh nghiệm</h2>
                                <h3 class="box-slide-sub-title">Nhôm kính cao cấp</h3>
                                <p class="box-slide-description">
                                    Chuyên sản xuất và thi công trọn gói cửa nhôm kính, cửa kính cường lực, vách kính, lan can kính, cầu thang kính, cabin tắm
                                </p>
                                <p>
                                    <a href="/about-us" class="slider btn btn-primary">Giới thiệu</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner-carousel-item" style="background-image:url(/frontend/images/slider-main/bg5.jpg)">
                    <div class="slider-content text-left">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Dịch vụ quốc tế</h2>
                                    <h3 class="box-slide-sub-title">Sự lựa chọn hoàn hảo</h3>
                                    <p class="box-slide-description">Chúng tôi luôn cố gắng từng ngày để đưa đến người tiêu dùng những sản phẩm chất lượng, an toàn và thẩm mỹ</p>
                                    <p><a href="/list-products" class="slider btn btn-primary" aria-label="about-us">Sản phẩm</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
