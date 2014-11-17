<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
  	<title>Skagit Valley Senior Village: Contact Us, Request a Brochure, or Schedule a Tour</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<script src="/js/jquery1.7.1.js" type="text/javascript"></script>
	<!-- Stylesheet links, Scripts, begins Body, Wrapper, Navigation, and Container Div -->
	<?php
		include('../includes/header.php'); 
		include('../includes/honeypot.php');
	?>

	<!-- Image -->  

	<div class="row-fluid">    
		<div class="span12">
			<img src="img/_HOP6819porch-contact.jpg">
	  	</div>	
	</div><!-- /row-fluid -->

	<!-- Content --> 
		
	<div class="row-fluid">    
		<div class="span12">
		  	<h1>Contact Us <small></small></h1>
        	<p>We'd like to hear from you. Let us know if you'd like more information,  have questions, or would like to schedule a visit.<br>
        	<span class="muted"><small>Skagit Valley Senior Village &nbsp;  &bull;  &nbsp; 400 Gilkey Road, Burlington, WA 98233 &nbsp;  &bull;  &nbsp; 
			<a href="http://maps.google.com/maps?f=q&hl=en&q=400+Gilkey+Road,+Burlington,+WA+98233" target="blank">View Map</a> &nbsp; &bull;  &nbsp; Phone (360) 755-5550 &nbsp;  &bull;  &nbsp; Fax (360) 755-9098 &nbsp;  &bull;  &nbsp; 
			<script language="javascript">
				<!--
				var part1 = "skagitvalley";
				var part2 = "artegan.com?subject=Contact";
				var part3 = "E-mail";
				document.write('<a  class="dk_link" href="mai' + 'lto:' + part1 + '@' + part2 + '">');
				document.write(part3 + '</a>');
				// -->
				</script>
			</small>
			</span>
<!-- <br><br> -->
        </div>
    </div>  
	<form name="contactForm" id="contactForm" action="/webformmailer.php" method="post" class="form-horizontal">
    	<input type="hidden" name="subject" value="Contact" />
    	<input type="hidden" name="required" value="email">
		<input type="hidden" name="redirect" value="/learn-more/thankyou-contact.php" />

    	<div class="row-fluid">    
	  		<div class="span6"> 	
        		<h3>Your Contact Information</h3>
    			<p>
    				<label for="inputFirstname">Name</label>
    				<input type="text" id="FirstName" placeholder="First" name="FirstName">
    				<input type="text" id="LastName" placeholder="Last" name="LastName">
    			</p>
    			<p>
    				<label for="inputPhone">Phone Number</label>
    				<input type="tel" id="phone" placeholder="ex. 123-456-7890" name="phone"  >
    			</p>
    			<p>
   					<label for="email"><b>Email</b> (required)</label>
    				<div class="control-group">
    					<input type="text" name="email" id="email" placeholder="ex. name@domain.com" data-rules="required|valid_email" data-rules="Email" class="validate required">
    					<p class="help-block"></p>
    				</div>
    			</p>
   				<p>
   					Would you like us to email you about promotions and upcoming events?<br>
    				<label class="radio inline">
						<input type="radio" name="add-to-mailing-list" id="mailing-list-yes" value="yes" checked>Yes
					</label>
					<label class="radio inline">
						<input type="radio" name="add-to-mailing-list" id="mailing-list-no" 			value="no">No
					</label>
				</p>	
				<h3>How can we help you today?</h3>
    			<p>
    				<select class="span10">
						<option value="schedule-a-tour" name="subject">I would like to schedule a tour</option>
						<option value="brochure-request" name="subject">I would like a brochure</option>
						<option value="questions" name="subject">I have questions and/or want to learn more</option>
						<option value="other" name="subject">Other</option>
					</select>
				</p>
				<!-- honeypot -->
				<div class="hide">
    				<label for="spam">(NOTE: Leave this blank if you are human!) What is two plus two?</label>
    				<input id="spam" name="spam" type="text" size="4">
				</div> <!-- /hide -->

			</div> <!-- /span6 -->
    		
    		<div class="span6">
    			<h3>Which living options would you like to learn more about?</h3>
    			<p>
    				<span class="muted">(Mark all that apply.)</span>
    				<label class="checkbox">
						<input type="checkbox" value="independent-cottage" name="cottage">
						Independent Living - Cottage
					</label>
					<label class="checkbox">
						<input type="checkbox" value="independent-apt" name="independent-apartment">
						Independent Living - Apartment
					</label>
					<label class="checkbox">
						<input type="checkbox" value="assisted-apt" name="assisted-apartment">
						Assisted Living Apartment
					</label>
					<label class="checkbox">
						<input type="checkbox" value="memory-care" name="memory-care">
						The Memory Village Apartment
					</label>
    			</p>
    			<label for="message"><h3>Message</h3></label>
   				<textarea rows="4" class="span12" name="message"></textarea>
   				<p>		
   					<label class="checkbox">
						<input type="checkbox" name="brochure-request" value="yes">
						<b>Please send me a brochure.</b>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="schedule-tour" value="yes">
							<b>I would like to schedule a tour.</b>
					</label>
				</p>	
   			<!--	<br> -->
   				<button type="submit" class="btn btn-primary pull-right" value="Send" name="submit">Submit</button>
   				<input type="hidden" name="form_delivery" value="default"/>
				<input type="hidden" name="form_format" value="text"/>
      		</div><!-- /span6 -->
		</div><!-- /row-fluid -->
	</form>

<script>
var $my_form =  $("#contactForm")
$my_form.validate(function($form, e){ alert("Thank you for contacting us.") })
</script>

<!-- Ends Container Page and Wrapper, Footer, Javascript Loading, End Body and HTML  -->
<?php include('../includes/footer.php'); ?>
