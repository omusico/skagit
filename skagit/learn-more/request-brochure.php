<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
  	<title>Skagit Valley Senior Village: Request a Brochure</title>
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
	  		<img src="img/HOP_6755request-brochure.jpg">
		</div>	
	</div><!-- /row-fluid -->

	<!-- Content --> 
	
	<div class="row-fluid">    
		<div class="span12">
		  	<h1>Request a Brochure <small></small></h1>
        	<p>We're happy to send you more information about what Skagit Valley Senior Village has to offer for you! Just fill out the form below and we will mail you a brochure.<br>
<!--        	<br><br> -->
        </div> <!-- /span12 -->
    </div> <!-- / row-fluid -->  
    <!-- action="../webformmailer.php"-->
    <form name="contactForm" id="contactForm" action="../includes/honeypot.php" method="post" class="form-horizontal">
    	<input type="hidden" name="subject" value="Brochure Request" />
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
   					<label for="email"><b>Email</b></label>
    				<div class="control-group">
    					<input type="text" name="email" id="email" placeholder="ex. name@domain.com">    					
    				</div> <!-- /control-group -->
    			</p>
    			<p>	
	    			Would you like us to send you information about promotions and upcoming events?<br>
    				<label class="radio inline">
						<input type="radio" name="add-to-mailing-list" id="mailing-list-yes" value="yes" checked>Yes
					</label>
					<label class="radio inline">
						<input type="radio" name="add-to-mailing-list" id="mailing-list-no" value="no">No
					</label><br><br>
				</p>
					
				<p style="margin-left:30px;">
					If so, how do you prefer to receive the information?<br>
    				<label class="radio inline">
						<input type="radio" name="mail-preference" id="prefer-email" value="prefer-email" checked>email
					</label>
					<label class="radio inline">
						<input type="radio" name="mail-preference" id="prefer-regular-mail" value="prefer-regular-mail">regular mail
					</label>
				</p>	
				
				<!-- honeypot -->

				<div class="hide">
    				<label for="robotest">(NOTE: Leave this blank if you are human!) What is two plus two?</label>
    				<input id="robotest" name="robotest" class="robotest" type="text" size="4">
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
						<input type="checkbox" name="brochure-request" value="yes" checked>
						<b>Please send me a brochure.</b>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="schedule-tour" value="yes">
						<b>I would also like to schedule a tour.</b>
					</label>
				</p>
				<button type="submit" class="btn btn-primary pull-right" value="Send" name="submit">Submit</button>
   				<input type="hidden" name="form_delivery" value="default"/>
				<input type="hidden" name="form_format" value="text"/>
       		</div><!-- /span6 -->
		</div><!-- /row-fluid -->
	</form>

<script>
var $my_form =  $("#contactForm")
$my_form.validate(function($form, e){ alert("Thank you for contacting us. We will mail you a brochure right away!") })
</script>
    
<!-- Ends Container Page and Wrapper, Footer, Javascript Loading, End Body and HTML  -->
<?php include('../includes/footer.php'); ?>