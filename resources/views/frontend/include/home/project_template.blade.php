@if(!empty($lstProject) && $lstProject->count())
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
            @foreach($lstProject as $key => $project)
                <div class="col-lg-4 col-md-6 col-6 mb-4 {!! $key == 3 ? 'd-md-none' : 'd-block' !!}">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="javascript:void(0)" class="latest-post-img">
                                @if($project->thumbnail)
                                    <div class="highlight-project" style="background-image: url({!! $project->last_large_photo !!})">
                                    </div>
                                @else
                                    <div class="highlight-project" style="background-image: url(/frontend/images/highlight-project/highlight-project-04.jpeg)">
                                    </div>
                                @endif
                            </a>
                        </div>
                        <div class="post-body">
                            <div class="post-title">
                                {!! $project->name !!}
                            </div>
                            <div class="latest-post-meta">
                                @if($project->type == 1)
                                    Nhà dân
                                @elseif($project->type == 2)
                                    Biệt thự
                                @else
                                    Công trình khác
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
{{--            <div class="col-lg-4 col-md-6 col-6 mb-4">--}}
{{--                <div class="latest-post">--}}
{{--                    <div class="latest-post-media">--}}
{{--                        <a href="javascript:void(0)" class="latest-post-img">--}}
{{--                            <div class="highlight-project" style="background-image: url(/frontend/images/highlight-project/highlight-project-03.jpg)">--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="post-body">--}}
{{--                        <h4 class="post-title">--}}
{{--                            Mr. Thắng - Hà Nội--}}
{{--                        </h4>--}}
{{--                        <div class="latest-post-meta">--}}
{{--                            <span class="post-item-date">--}}
{{--                                <i class="fa fa-clock-o"></i>Dec,--}}
{{--                                <script>--}}
{{--                                    document.write(new Date().getFullYear() - 1)--}}
{{--                                </script>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- Latest post end -->--}}
{{--            </div><!-- 3rd post col end -->--}}
{{--            <div class="col-lg-4 col-md-6 col-6 mb-4 d-block d-lg-none">--}}
{{--                <div class="latest-post">--}}
{{--                    <div class="latest-post-media">--}}
{{--                        <a href="javascript:void(0)" class="latest-post-img">--}}
{{--                            <div class="highlight-project" style="background-image: url(/frontend/images/highlight-project/highlight-project-01.jpg)">--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="post-body">--}}
{{--                        <h4 class="post-title">--}}
{{--                            Mr. Lâm - Bắc Ninh--}}
{{--                        </h4>--}}
{{--                        <div class="latest-post-meta">--}}
{{--                            <span class="post-item-date">--}}
{{--                                <i class="fa fa-clock-o"></i>Oct,--}}
{{--                                <script>--}}
{{--                                    document.write(new Date().getFullYear() - 1)--}}
{{--                                </script>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- Latest post end -->--}}
{{--            </div><!-- 1st post col end -->--}}

{{--            <div class="col-lg-4 col-md-6 col-6 mb-4">--}}
{{--                <div class="latest-post">--}}
{{--                    <div class="latest-post-media">--}}
{{--                        <a href="javascript:void(0)" class="latest-post-img">--}}
{{--                            <div class="highlight-project" style="background-image: url(/frontend/images/highlight-project/highlight-project-05.png)">--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="post-body">--}}
{{--                        <h4 class="post-title">--}}
{{--                            Mrs. Trúc - Vĩnh Phúc--}}
{{--                        </h4>--}}
{{--                        <div class="latest-post-meta">--}}
{{--                            <span class="post-item-date">--}}
{{--                                <i class="fa fa-clock-o"></i>Sep,--}}
{{--                                <script>--}}
{{--                                    document.write(new Date().getFullYear() - 1)--}}
{{--                                </script>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- Latest post end -->--}}
{{--            </div><!-- 2nd post col end -->--}}
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
@endif
