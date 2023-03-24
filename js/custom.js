
	// function send_mail() {

	// 	jQuery('#mail_submit').html('');
	// 	jQuery('#mail_error').html('');
		
	// 	var email = jQuery("#email_footer").val();
		
	// 	var is_error = '';
		
		
	// 	if (email == "") {
	// 		jQuery('#mail_error').html('Please Enter Email');
	// 		is_error = 'yes';
	// 	}
		
	// 	if (is_error == '') {
	// 		jQuery.ajax({
	// 			url: 'send_mail.php',
	// 			type: 'post',
	// 			data: '&email=' + email,
	// 			success: function (result) {
	// 				result = result.trim();
	// 				if (result == 'insert') {
	// 					jQuery('#mail_submit').html('Thankyou..Your Email Submitted.');
	// 					jQuery("#email_footer").val('');
	// 				} else {
	// 					jQuery('#mail_submit').html('');
	// 					jQuery('#mail_error').html('Oops!! Somthing Went Wrong Please Try After Some Time.');
	// 					jQuery("#email_footer").val('');
		
	// 				}
	// 			}
	// 		});
	// 	}
	// 	}
		
		
		
	// 	function send_message() {
		
	// 	jQuery('#contact_submit').html('');
	// 	jQuery('#contact_error').html('');
		
	// 	var name = jQuery("#name").val();
	// 	var email = jQuery("#email").val();
	// 	var mobile = jQuery("#mobile").val();
	// 	var message = jQuery("#message").val();
		
		
	// 	var is_error = '';
		
	// 	if (name == "") {
	// 		jQuery('#contact_error').html('Please Enter Name');
	// 		is_error = 'yes';
		
	// 	} else if (email == "") {
	// 		jQuery('#contact_error').html('Please Enter Email');
	// 		is_error = 'yes';
	// 	} else if (mobile == "") {
	// 		jQuery('#contact_error').html('Please Enter Mobile');
	// 		is_error = 'yes';
	// 	} else if (message == "") {
	// 		jQuery('#contact_error').html('Please Enter Message');
	// 		is_error = 'yes';
	// 	}
	// 	if (is_error == '') {
	// 		jQuery.ajax({
	// 			url: 'send_message.php',
	// 			type: 'post',
	// 			data: 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&message=' + message,
	// 			success: function (result) {
	// 				result = result.trim();
		
	// 				if (result == 'message_send') {
	// 					jQuery('#contact_submit').html('Thankyou..Your Query Submitted');
		
	// 					jQuery("#name").val('');
	// 					jQuery("#email").val('');
	// 					jQuery("#mobile").val('');
	// 					jQuery("#message").val('');
		
		
		
		
		
		
	// 				} else {
	// 					jQuery('#contact_submit').html('');
	// 					jQuery('#contact_error').html('Oops!! Somthing Went Wrong Please Try After Some Time.');
	// 					jQuery("#name").val('');
	// 					jQuery("#email").val('');
	// 					jQuery("#mobile").val('');
	// 					jQuery("#message").val('');
		
	// 				}
	// 			}
	// 		});
		
		
		
		
	// 	}
	// 	}
		
		
		
		
		
		function sort_product_drop(cat_id, site_path) {
		var sort_product_id = jQuery('#sort_product_id').val();
		window.location.href = site_path + "categories.php?id=" + cat_id + "&sort=" + sort_product_id;
		}
		
		
		jQuery('.imageZoom').imgZoom();
		
		
		