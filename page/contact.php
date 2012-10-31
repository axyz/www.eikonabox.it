<?php include("header.php"); ?>
<?php
if(isset($_POST['submit'])) {

//Check to make sure that the name field is not empty
if(trim($_POST['contactname']) == '') {
	$hasError = true;
} else {
	$name = trim($_POST['contactname']);
}

//Check to make sure that the phone field is not empty
if(trim($_POST['phone']) == '') {
	$hasError = true;
} else {
	$phone = trim($_POST['phone']);
}

//Check to make sure that the subject field is not empty
if(trim($_POST['subject']) == '') {
	$hasError = true;
} else {
	$subject = trim($_POST['subject']);
}

//Check to make sure sure that a valid email address is submitted
if(trim($_POST['email']) == '') {
	$hasError = true;
} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
	$hasError = true;
} else {
	$email = trim($_POST['email']);
}

//Check to make sure comments were entered
if(trim($_POST['message']) == '') {
	$hasError = true;
} else {
	if(function_exists('stripslashes')) {
		$comments = stripslashes(trim($_POST['message']));
	} else {
		$comments = trim($_POST['message']);
	}
}

//If there is no error, send the email
if(!isset($hasError)) {
	$emailTo = 'axyzxp@gmail.com'; // Put your own email address here
	$body = "Name: $name \n\nEmail: $email \n\nPhone Number: $phone \n\nSubject: $subject \n\nComments:\n $comments";
	$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	}
}
?>

<section>
	<div class="container">
		<div class="row"><br>
			<div class="span6">
 				<div class="hero-unit">
 					<legend>Address</legend>
 					<address>
 						<strong>Guido Fu&agrave;</strong><br>
 						Via degli Anemoni 6<br /> 
 						00172, Roma, Italia<br />
 						mobile: +39 3356053840
 					</address>
					<iframe style="width:100%;height:300px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=Eikona+Photography+and+Digital+Imaging,+Via+degli+Anemoni,+Roma,+RM&amp;aq=3&amp;oq=eikon&amp;sll=41.908557,12.535998&amp;sspn=0.311204,0.676346&amp;t=m&amp;ie=UTF8&amp;hq=Eikona+Photography+and+Digital+Imaging,&amp;hnear=Via+degli+Anemoni,+Roma,+Lazio&amp;ll=41.875756,12.565478&amp;spn=0.006295,0.006295&amp;output=embed"></iframe><br /><small><a href="https://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=Eikona+Photography+and+Digital+Imaging,+Via+degli+Anemoni,+Roma,+RM&amp;aq=3&amp;oq=eikon&amp;sll=41.908557,12.535998&amp;sspn=0.311204,0.676346&amp;t=m&amp;ie=UTF8&amp;hq=Eikona+Photography+and+Digital+Imaging,&amp;hnear=Via+degli+Anemoni,+Roma,+Lazio&amp;ll=41.875756,12.565478&amp;spn=0.006295,0.006295" style="color:#0000FF;text-align:left">View larger</a></small>
 					<br><br><br><br><br>
 				</div>
 			</div>
 			
 			<div class="span6">
 				<div class="hero-unit">
 					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
						<fieldset>
						<legend>Send Us a Message</legend>
						<?php if(isset($hasError)) { //If errors are found ?>
						<p class="alert-message error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
						<?php } ?>
						
						<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
						<div class="alert-message success">
						<p><strong>Message Successfully Sent!</strong></p>
						<p>Thank you for using our contact form, <strong><?php echo $name;?></strong>! Your email was successfully sent and we&rsquo;ll be in touch with you soon.</p>
						</div>
						<?php } ?>
						<div class="clearfix">
						<label for="name">
						Your Name<span class="help-required">*</span>
						</label>
						<div class="input">
						<input type="text" name="contactname" id="contactname" value="" class="span4 required" role="input" aria-required="true" />
						</div>
						</div>
						<div class="clearfix">
						<label for="phone">
						Your Phone Number<span class="help-required">*</span>
						</label>
						<div class="input">
						<input type="text" name="phone" id="phone" value="" class="span4 required" role="input" aria-required="true" />
						</div>
						</div>
						
						<div class="clearfix">
						<label for="email">
						Your Email<span class="help-required">*</span>
						</label>
						<div class="input">
						<input type="text" name="email" id="email" value="" class="span4 required email" role="input" aria-required="true" />
						</div>
						</div>
						
						<div class="clearfix">
						<label for="subject">
						Subject<span class="help-required">*</span>
						</label>
						<div class="input">
						<select name="subject" id="subject" class="span4 required" role="select" aria-required="true">
						<option></option>
						<option>Quote request</option>
						<option>Information</option>
						<option>Other</option>
						</select>
						</div>
						</div>
						
						<div class="clearfix">
						<label for="message">Message<span class="help-required">*</span></label>
						<div class="input">
						<textarea rows="8" name="message" id="message" class="span4 required" role="textbox" aria-required="true"></textarea>
						</div>
						</div>
						<div class="actions">
						<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn primary" title="Click here to submit your message!" />
						<input type="reset" value="Clear Form" class="btn" title="Remove all the data from the form." />
						</div>
						</fieldset>
					</form>
 				</div>
 			</div>
 			
 		</div>
 	</div>

<?php include("footer.php"); ?>

<script type="text/javascript" >
$(document).ready(function(){

	$.getJSON('php/image_preloading.php', function(data) {
    Core.preloader.queue(data).preload();
  });

	$('#header-container').removeClass('container-fluid').addClass('container');
	$('#footer-container').removeClass('container-fluid').addClass('container');
	$('.navbar-inner .brand').addClass('brand-fix');

// validate signup form on keyup and submit
var validator = $("#contactform").validate({
	errorClass:'error',
	validClass:'success',
	errorElement:'span',
	highlight: function (element, errorClass, validClass) {
	$(element).parents("div[class='clearfix']").addClass(errorClass).removeClass(validClass);
},
unhighlight: function (element, errorClass, validClass) {
	$(element).parents(".error").removeClass(errorClass).addClass(validClass);
},
rules: {
	contactname: {
		required: true,
		minlength: 2
	},
	email: {
		required: true,
		email: true
	},
	phone: {
		required: true,
		phoneUS: true
	},
	subject: {
		required: true
	},
	message: {
		required: true,
		minlength: 10
	}
},
messages: {
	contactname: {
		required: '<span class="help-inline">Please enter your name.</span>',
		minlength: jQuery.format('<span class="help-inline">Your name needs to be at least {0} characters.</span>')
	},
	email: {
		required: '<span class="help-inline">Please enter a valid email address.</span>',
		minlength: '<span class="help-inline">Please enter a valid email address.</span>'
	},
	phone: {
		required: '<span class="help-inline">You need to enter your phone number.</span>',
		phoneUS: jQuery.format('<span class="help-inline">You need to enter a valid phone number.</span>')
	},
	subject: {
		required: '<span class="help-inline">You need to enter a subject.</span>'
	},
	message: {
		required: '<span class="help-block">You need to enter a message.</span>',
		minlength: jQuery.format('<span class="help-block">Enter at least {0} characters.</span>')
	}
}
});
});
</script>
