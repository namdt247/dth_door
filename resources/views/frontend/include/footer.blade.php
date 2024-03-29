<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 footer-widget footer-about">
                    <h3 class="widget-title">Thông tin</h3>
{{--                    <img loading="lazy" width="150px" class="footer-logo" src="/frontend/images/footer-logo.png"--}}
{{--                         alt="Constra">--}}
{{--                    <p>--}}
{{--                        DTHDoor luôn cố gắng tận tâm đến từng chi tiết để đưa đến người tiêu dùng những sản phẩm chất lượng, an toàn và thẩm mỹ--}}
{{--                    </p>--}}
                    <div>
                        <p>
                            <a href="{!! \App\Helper\CompanyInfo::LOCATION_MAP !!}" target="_blank" class="footer-map">
                                <i class="fa fa-map-marker-alt mr-2"></i> Địa chỉ: {!! \App\Helper\CompanyInfo::ADDRESS !!}
                            </a>
                        </p>
                        <p>
                            <i class="fa fa-home mr-2"></i>VPGD: {!! \App\Helper\CompanyInfo::OFFICE !!}
                        </p>
                        <p>
                            <a href="tel:0846863336">
                                <i class="fa fa-phone-alt mr-2"></i> (+84) {!! \App\Helper\CompanyInfo::PHONE !!}
                            </a>
                        </p>
                        <p>
                            <i class="fa fa-envelope mr-2"></i> {!! \App\Helper\CompanyInfo::EMAIL !!}
                        </p>
                    </div>
                    <div class="footer-social">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/dthdoor68" aria-label="Facebook" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- Footer social end -->
                </div><!-- Col end -->

                <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title">Thời gian làm việc</h3>
                    <div class="working-hours">
                        Chúng tôi làm việc 7 ngày một tuần, cả các ngày lễ lớn.
                        Liên hệ với chúng tôi qua số điện thoại hoặc email nếu bạn cần được tư vấn.
                        <br><br>Thứ 2 - Chủ nhật: <span class="text-right">08:00 - 22:00 </span>
                        <br>Các ngày lễ: <span class="text-right">08:00 - 17:00</span>
                    </div>
                </div><!-- Col end -->

                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 footer-widget">
                    <h3 class="widget-title">Fanpage DTHDoor</h3>
                    <div class="fb-page" data-href="https://www.facebook.com/dthdoor68" data-tabs="timeline" data-width="" data-height="320" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dthdoor68" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dthdoor68">Nhôm Kính DTH</a></blockquote></div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright" style="padding: 16px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="copyright-info text-center text-md-center">
                        <span>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            Designed &amp; Developed by DTHDoor
                        </span>
                    </div>
                </div>
            </div><!-- Row end -->

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-double-up"></i>
                </button>
            </div>

        </div><!-- Container end -->
    </div><!-- Copyright end -->
</footer>
