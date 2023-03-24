<?php 
require('top.php');

$resBanner=mysqli_query($con,"select * from banner where status='1' order by order_no asc");

?>
<div class="body__overlay"></div>
<?php if(mysqli_num_rows($resBanner)>0){?>
<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        <?php while($rowBanner=mysqli_fetch_assoc($resBanner)){?>
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2><?php echo $rowBanner['heading1']?></h2>
                                <h1><?php echo $rowBanner['heading2']?></h1>

                                <?php
										if($rowBanner['btn_txt'] !='' && $rowBanner['btn_link']!=''){
											?>
                                <div class="cr__btn">
                                    <a href="<?php echo $rowBanner['btn_link']?>"><?php echo $rowBanner['btn_txt']?></a>
                                </div>
                                <?php
										}
										?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="<?php echo BANNER_SITE_PATH.$rowBanner['image']?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!-- Start Slider Area -->
<?php } ?>

<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Our Products</h2>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
                    <?php
							$get_product=get_product($con,);
							foreach($get_product as $list){
							?>
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product.php?id=<?php echo $list['id']?>">
                                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                </a>
                            </div>

                            <div class="fr__product__inner">
                                <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a>
                                </h4>
                                <ul class="fr__pro__prize">
                                    <li class=""><?php echo $list['mrp']?></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->
<!-- Start Product Area -->
<section class="ftr__product__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Best Seller</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product__list clearfix mt--30">
                <?php
							$get_product=get_product($con,4,'','','','','yes');
							foreach($get_product as $list){
							?>
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product.php?id=<?php echo $list['id']?>">
                                <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                            </a>
                        </div>

                        <div class="fr__product__inner">
                            <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                            <ul class="fr__pro__prize">
                                <li class=""><?php echo $list['mrp']?></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- End Product Area -->




<section id="" class="htc__good__sale bg__cat--3">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="fr__prize__inner">
                    <h2>WHO WE ARE?</h2>
                    <h3>we are redefining the standards of
                        cleanliness in India. Investing time and effort in
                        understanding the Indian market, Mahamaya Industries has innovated products that make
                        your everyday life easy. Every user of Mahamaya Industries can take pride in the fact
                        that our products and manufacturing have minimal impact on the environment.</h3>
                    <a class="fr__btn" href="contact.php">Contact Us</a>
                </div>
                <div id="social_share_box">
                    <ul class="pro__share">
                        <li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a></li>

                        <li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

                        <li><a href="https://www.facebook.com/Furny/?ref=bookmarks" target="_blank"><i
                                    class="icon-social-facebook icons"></i></a></li>

                        <li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a></li>

                        <li><a href="#" target="_blank"><i class="icon-social-linkedin icons"></i></a></li>

                        <li><a href="#" target="_blank"><i class="icon-social-pinterest icons"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="prize__inner">
                    <div class="prize__thumb">
                        <img src="images/about/about2.png" alt="about images">
                    </div>
                    <div class="banner__info">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section id="" class="htc__blog__area bg__white ptb--100">
    <div class="container">

        <div class="ht__blog__wrap row">
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-md-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details.html">
                            <img src="images/vision/floor.jpg" alt="floor images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>Floor cleaning</span>
                        </div>
                        <h2><a href="blog-details.html">To remove stains, dirt, litter and obstructions.
                            </a></h2>
                        <p>To remove grit and sand which scratch and wear down the surface. To remove allergens, in
                            particular dust. To prevent wear to the surface. the fluid perfectly removes
                            stubborn dirt, leaving surfaces shiny and clean.</p>
                        <div class="blog__btn">
                            <a href="contact.php">Read More</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-md-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details.html">
                            <img src="images/vision/handwash.jpg" alt="handwash images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>Gentle HandWash</span>
                        </div>
                        <h2><a href="blog-details.html">Washing hands can keep you healthy and prevent the spread of
                                respiratory and diarrheal infections.</a></h2>
                        <p> Germs can spread from person to person or from surfaces to people when you: Touch your eyes,
                            nose, and mouth with unwashed hands. Prepare or eat food and drinks with unwashed hands.</p>
                        <div class="blog__btn">
                            <a href="contact.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->

            <!-- Start Single Blog -->
            <div class="col-xl-4 col-md-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details.html">
                            <img src="images/vision/toilet.jpg" alt="toilet images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>Toilet Cleaning</span>
                        </div>
                        <h2><a href="blog-details.html">Reduce the transmission of some rather unpleasant diseases.</a>
                        </h2>
                        <p> Since cleaning and sanitising your public bathrooms remove germs and other pathogens from
                            the area. Influenza is
                            a prime example of a disease that can be transmitted from person to person since the sick
                            person touches the surfaces in the bathroom.</p>
                        <div class="blog__btn">
                            <a href="contact.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class="col-xl-4 col-md-6">
                <div class="blog">
                    <div class="blog__thumb">
                        <a href="blog-details.html">
                            <img src="images/vision/hygiene.jpg" alt="hygiene images">
                        </a>
                    </div>
                    <div class="blog__details">
                        <div class="bl__date">
                            <span>Maintained Hygiene</span>
                        </div>
                        <h2><a href="blog-details.html"> It is important for maintaining both physical and mental
                                health.</a>
                        </h2>
                        <p> Good personal hygiene involves keeping all parts of the external body clean and healthy. In
                            people with poor personal
                            hygiene, the body provides an ideal environment for germs to grow, leaving it vulnerable to
                            infection.</p>
                        <div class="blog__btn">
                            <a href="contact.php">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->

        </div>
    </div>
</section>


<section id="contact">

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
                            <p>sydfghhg@gmail.com</p>
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
                                    <span id="contact_submit" class="sucess_msg"></span>
                                    <span id="contact_error" class="danger_msg"></span>
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
    q

</section>

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

<input type="hidden" id="qty" value="1" />
<?php require('footer.php')?>