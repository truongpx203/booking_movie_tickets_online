 <!-- footer-area -->
 <footer>
    <div class="footer-top-wrap">
        <div class="container">
            <div class="footer-menu-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="footer-menu">
                            <nav>
                                <ul class="navigation">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="index.html">Movie</a></li>
                                    <li><a href="index.html">tv show</a></li>
                                    <li><a href="index.html">pages</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                                <div class="footer-search">
                                    <form action="#">
                                        <input type="text" placeholder="Find Favorite Movie">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-quick-link-wrap">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="quick-link-list">
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2023. Trường, Kỳ, Phong <a href="#">Movflx</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="payment-method-img text-center text-md-right">
                        <img src="img/images/card_img.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->





<!-- JS here -->
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.odometer.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

 <!-- bootstrap -->
 <script src="account/js-login/bootstrap.bundle.min.js"></script>

<!-- CUSTOM JS -->
<script src="account/js-login/app.js"></script>

<script>
    $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
   slidesToShow: 6,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: true,
   focusOnSelect: true
 });

 $('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = $(this).data('slide');
   $('.slider-nav').slick('slickGoTo', slideno - 1);
 });
</script>
<!-- partial -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- <script src="../slideshow/dist/script.js"></script> -->
</body>

<!-- Mirrored from themebeyond.com/html/movflx/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Nov 2023 09:51:42 GMT -->
</html>
