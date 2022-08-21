<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="column-title">Phản hồi khách hàng</h3>

                <?php $lstFeedback = \App\Models\Feedback::where(\App\Helper\Query::STATUS, \App\Helper\Query::NOT_EQUAL, \App\Helper\Config::STATUS_DELETED)->orderby(\App\Helper\Query::CREATED_AT, \App\Helper\Query::ORDER_BY_DESC)->get() ?>

                <div id="testimonial-slide" class="testimonial-slide">
                    @foreach($lstFeedback as $feedback)
                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    {!! $feedback->fb_content !!}
                                </span>
                                <div class="quote-item-footer">
                                    {{--                                    <img loading="lazy" class="testimonial-thumb" src="/frontend/images/clients/testimonial1.png"--}}
                                    {{--                                         alt="testimonial">--}}
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">
                                            {!! $feedback->fb_name !!}
                                        </h3>
                                        <span class="quote-subtext">
                                            {!! $feedback->fb_position !!}
                                        </span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                    @endforeach
                </div>
                <!--/ Testimonial carousel end-->
            </div><!-- Col end -->

            <div class="col-lg-6 mt-5 mt-lg-0">

                <h3 class="column-title">Đối tác</h3>

                <div class="row all-clients">
                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="javascript:void(0)"><img loading="lazy" class="img-fluid" src="/frontend/images/partner/partner-01.jpg"
                                             alt="clients-logo"/></a>
                        </figure>
                    </div><!-- Client 1 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="javascript:void(0)"><img loading="lazy" class="img-fluid" src="/frontend/images/partner/partner-02.jpg"
                                                              alt="clients-logo"/></a>
                        </figure>
                    </div><!-- Client 2 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="javascript:void(0)"><img loading="lazy" class="img-fluid" src="/frontend/images/partner/partner-03.jpg"
                                             alt="clients-logo"/></a>
                        </figure>
                    </div><!-- Client 3 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="javascript:void(0)"><img loading="lazy" class="img-fluid" src="/frontend/images/partner/partner-04.jpg"
                                             alt="clients-logo"/></a>
                        </figure>
                    </div><!-- Client 4 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="javascript:void(0)"><img loading="lazy" class="img-fluid" src="/frontend/images/partner/partner-05.png"
                                             alt="clients-logo"/></a>
                        </figure>
                    </div><!-- Client 5 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="javascript:void(0)"><img loading="lazy" class="img-fluid" src="/frontend/images/partner/partner-06.png"
                                              alt="clients-logo"/></a>
                        </figure>
                    </div><!-- Client 6 end -->

                </div><!-- Clients row end -->

            </div><!-- Col end -->

        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section>
