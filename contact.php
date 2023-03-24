<?php
require('top.php');
?>
<div class="ht__bradcaump__area"
    style="background: rgba(0, 0, 0, 0) url(images/bg/1.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner">
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.php">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                            <span class="breadcrumb-item active">Contact Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Contact Area -->
<section class="htc__contact__area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="map-contacts--2">
                    <div id="" class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.726873073887!2d81.65681010187568!3d21.16326507276154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28db654fdf4aa9%3A0x3ac2ad9bd20088ab!2sGovernment%20Engineering%20College%20Raipur!5e0!3m2!1sen!2sin!4v1649852291330!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <h2 class="title__line--6">CONTACT US</h2>
                <div class="address">
                    <div class="address__icon">
                        <i class="icon-location-pin icons"></i>
                    </div>
                    <div class="address__details">
                        <h2 class="ct__title">Our Address</h2>
                        <p>666 5th Kushalpur Raipur , Chhatisgarh </p>
                    </div>
                </div>
                <div class="address">
                    <div class="address__icon">
                        <i class="icon-envelope icons"></i>
                    </div>
                    <div class="address__details">
                        <h2 class="ct__title">Email Address</h2>
                        <p>uqwgd@gmail.com</p>
                    </div>
                </div>

                <div class="address">
                    <div class="address__icon">
                        <i class="icon-phone icons"></i>
                    </div>
                    <div class="address__details">
                        <h2 class="ct__title">Phone Number</h2>
                        <p>123-6586-587456</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="contact-form-wrap mt--60">
                <div class="col-xs-12">
                    <div class="contact-title">
                        <h2 class="title__line--6">SEND A MAIL</h2>
                    </div>
                </div>
                <div class="col-xs-12">
                    <form id="contact-form" action="#" method="post">
                        <div class="single-contact-form">
                            <div class="contact-box name">
                                <input type="text" id="name" name="name" placeholder="Your Name*">
                                <input type="email" id="email" name="email" placeholder="Email*">
                                <input type="email" id="mobile" name="mobile" placeholder="Mobile*">
                            </div>

                        </div>

                        <div class="single-contact-form">
                            <div class="contact-box message">
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div>
                            <strong>
                                <span id="contact_submit" class="sucess_msg "></span>
                                <span id="contact_error" class="danger_msg "></span>
                            </strong>
                        </div>


                        <div class="contact-btn">
                            <button type="button" onclick="send_message()" class="fv-btn">Send MESSAGE</button>
                        </div>
                    </form>
                    <div class="form-output">
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->






<script>
	
    function send_message() {
		
		jQuery('#contact_submit').html('');
		jQuery('#contact_error').html('');
		
		var name = jQuery("#name").val();
		var email = jQuery("#email").val();
		var mobile = jQuery("#mobile").val();
		var message = jQuery("#message").val();
		
		
		var is_error = '';
		
		if (name == "") {
			jQuery('#contact_error').html('Please Enter Name');
			is_error = 'yes';
		
		} else if (email == "") {
			jQuery('#contact_error').html('Please Enter Email');
			is_error = 'yes';
		} else if (mobile == "") {
			jQuery('#contact_error').html('Please Enter Mobile');
			is_error = 'yes';
		} else if (message == "") {
			jQuery('#contact_error').html('Please Enter Message');
			is_error = 'yes';
		}
		if (is_error == '') {
			jQuery.ajax({
				url: 'send_message.php',
				type: 'post',
				data: 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&message=' + message,
				success: function (result) {
					result = result.trim();
		
					if (result == 'message_send') {
						jQuery('#contact_submit').html('Thankyou..Your Query Submitted');
		
						jQuery("#name").val('');
						jQuery("#email").val('');
						jQuery("#mobile").val('');
						jQuery("#message").val('');
		
		
		
		
		
		
					} else {
						jQuery('#contact_submit').html('');
						jQuery('#contact_error').html('Oops!! Somthing Went Wrong Please Try After Some Time.');
						jQuery("#name").val('');
						jQuery("#email").val('');
						jQuery("#mobile").val('');
						jQuery("#message").val('');
		
					}
				}
			});
		
		
		
		
		}
		}
</script>




<?php
require('footer.php');

?>