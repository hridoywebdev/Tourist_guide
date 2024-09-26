<!--footer-->
<footer>
    <div class="footer-sec-w3-agileits py-lg-5 py-3">
        <div class="container py-lg-4 py-3">
            <div class="row">
                <div class="col-lg-4 footer-grid-wthree text-left">
                    <h3>About Our Tour Agency</h3>
                    <p>TG-Travel is one of few travel companies in Bangladesh working on the field of sustainable tourism. We empower communities with tourism.</p>
                    <address class="ad-info mt-3">
                        <strong>Our Office</strong>
                        <br> East Jurain
                        <br> Dhaka, 1204
                        <br>
                        <abbr title="Phone">Mobile:</abbr> 01968922171
                    </address>
                </div>
                <div class="col-lg-4 footer-grid-wthree text-left">

                    <div class="tech-btm copyrighttop">
                        <h3>Our Social Media Links</h3>
                        <ul>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                    <span>Google+</span>
                                </a>
                            </li>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-pinterest-p"></i>
                                    <span>Pinterest</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- subscribe -->
                <div class="col-lg-4 subscribe-main footer-grid-wthree text-left">
                    <h2>Signup to our newsletter</h2>
                    <div class="subscribe-main text-left">
                        <div class="subscribe-form">
                            <form action="#" method="post" class="subscribe_form">
                                <input class="form-control" type="email" placeholder="Enter your email..." required="">
                                <button type="submit" class="btn btn-primary submit">Submit</button>
                            </form>
                            <div class="clearfix"> </div>
                        </div>
                        <p>We respect your privacy.No spam ever!</p>
                    </div>
                    <!-- //subscribe -->
                </div>
            </div>
            <!-- //footer -->
        </div>
    </div>
    <!-- footer -->
    <div class="footer-cpy p-lg-4 p-md-3 p-3 container-fluid">
        <div class="row">
            <div class="col-lg-12 copyrightbottom text-center">
                <img src="assets/images/logo.png" alt="">
                <p>© 2022 Tourist guide Travel, All Rights Reserved</p>

            </div>
        </div>
    </div>
</footer>
<!---->

<!-- /.footer -->

    <div class="whatsapp-message">
            <a href="https://wa.me/01777536838"><img src="assets/images/whatsapp.png" alt=""></a>
    </div>


<script src="assets/js/jquery-2.2.3.min.js"></script>
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();

</script>
<!-- //stats -->
<!-- start-smooth-scrolling -->
<script src="assets/js/move-top.js"></script>
<script src="assets/js/easing.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });

</script>
<!-- //end-smooth-scrolling -->
<!-- dropdown nav -->
<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });

</script>
<!-- //dropdown nav -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function() {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });

</script>
<!-- //smooth-scrolling-of-move-up -->
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/main.js"></script>
<!-- js file -->

</body>

</html>
