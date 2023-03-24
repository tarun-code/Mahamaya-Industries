<footer id="htc__footer">
    <!-- Start Footer Widget -->
    <div class="footer__container bg__cat--1">
        <div class="container">
            <div class="row">
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer">
                        <h2 class="title__line--2">ABOUT US</h2>
                        <div class="ft__details">
                            <p> <strong>Castle Shine </strong> is a brand under <strong> Mahamaya Industries</strong>. a
                                fast growing
                                startup for
                                domestic and industrial cleaning products. We are glad to introduce ourself as a company
                                moving on the accelerated growth pace since inception.</p>
                            <div class="ft__social__link">
                                <ul class="social__link">
                                    <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                    <div class="footer">
                        <h2 class="title__line--2">information</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="about.php">About us</a></li>



                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2"> Account</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="contact.php">Contact Us</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">Vision</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="services.php"> Our Vision</a></li>



                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">NEWSLETTER </h2>
                        <div class="ft__inner">

                            <div class="news__input">
                                <form method="post">
                                    <input type="email" id="email_footer" placeholder=" Your Email*" required>
                                    <div class="send__btn">
                                        <div>
                                            <strong>
                                                <span id="mail_submit" class="sucess_msg"></span>
                                                <span id="mail_error" class="danger_msg"></span>
                                            </strong>
                                        </div>
                                        <a class="fr__btn" type="button" onclick="send_mail()">Send
                                            Mail</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
            </div>
        </div>
    </div>
    <!-- End Footer Widget -->
    <!-- Start Copyright Area -->
    <div class="htc__copyright bg__cat--5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright__inner">
                        <p>Copyright© <a href="#">Mahamaya Industries</a>
                            <?php echo date('Y')?> . All right reserved.</p>
                        <!-- <a href="#"><img src="images/others/shape/paypol.png" alt="payment images"></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
</footer>
<!-- End Footer Style -->
</div>
<!-- Body main wrapper end -->

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="js/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap framework js -->
<script src="js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="js/plugins.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!-- Waypoints.min.js. -->
<script src="js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="js/main.js"></script>
<script src="js/jquery.imgzoom.js"></script>
<script src="js/custom.js"></script>

<!-- preloader script  -->
<script>
var loader = document.getElementById("preloader");
window.addEventListener("load", function loading() {

    loader.style.display = "none";
})
</script>



<!-- preloader script end here  -->

<script>

    
	function send_mail() {

jQuery('#mail_submit').html('');
jQuery('#mail_error').html('');

var email = jQuery("#email_footer").val();

var is_error = '';


if (email == "") {
    jQuery('#mail_error').html('Please Enter Email');
    is_error = 'yes';
}

if (is_error == '') {
    jQuery.ajax({
        url: 'send_mail.php',
        type: 'post',
        data: '&email=' + email,
        success: function (result) {
            result = result.trim();
            if (result == 'insert') {
                jQuery('#mail_submit').html('Thankyou..Your Email Submitted.');
                jQuery("#email_footer").val('');
            } else {
                jQuery('#mail_submit').html('');
                jQuery('#mail_error').html('Oops!! Somthing Went Wrong Please Try After Some Time.');
                jQuery("#email_footer").val('');

            }
        }
    });
}
}


</script>








</body>

</html>