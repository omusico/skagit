<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
  	<title>Careers at Skagit Valley Senior Village</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  	<script src="/js/jquery1.7.1.js" type="text/javascript"></script>
  	
<!-- Stylesheet links, Scripts, begins Body, Wrapper, Navigation, and Container Div -->
<?php include('../includes/header.php'); ?>
  
<!-- Image -->  

<div class="row-fluid">    
	  <div class="span12">
	  		<img src="img/lone-pink-tulip.jpg">
	  </div>	
</div><!-- /row-fluid -->    

<!-- Content --> 
	<div class="row-fluid">    
	  <div class="span12">
	  	<h1>Careers <small></small></h1>
      <p>We believe providing compassionate service is a calling and those who are fortunate to be in the senior-living profession are above all else heart centered.  Our Skagit Valley Senior Village team makes a difference in the lives of our residents every day in an atmosphere of mutual respect and fun.</p>
      <p>If you share our commitment to service and love of seniors explore a career with Skagit Valley Senior Village.  Contact us using the form below.</p>
      <p><strong>* Please note: Due to the high number of career inquiries, we cannot respond to every one. Inquiries with cover letters and resumes will be given preference.</strong></p>
      <br>
    </div> <!-- /span12 -->
  </div>  <!-- /row-fluid -->
     					
  <form name="careerForm" id="careerForm" action="../includes/honeypot-careers.php" method="post" class="form-horizontal">
  	<input type="hidden" name="subject" value="Career Inquiry" />
  	<input type="hidden" name="required" value="email">
		<input type="hidden" name="redirect" value="/learn-more/thankyou-career.php" />
			
    <div class="row-fluid">    
	    <div class="span4"> 	
        <p>
    			<label for="inputFirstname">First Name</label>
    			<input type="text" id="FirstName" name="FirstName" placeholder="First Name">
    		</p>
    		<p>
    			<label for="inputLastname">Last Name</label>
    			<input type="text" id="LastName" name="LastName" placeholder="Last Name">
    		</p>
    		<p>
   				<label for="email">Email (required)</label>
    			<div class="control-group">
    		  	<input type="text" name="email" id="email" placeholder="Email" data-rules="required|valid_email" data-rules="Email" class="validate required">
    				<p class="help-block"></p>
    			</div> <!-- /control-group -->
    		</p>
    		<p>
   				<label for="inputPhone">Phone Number</label>
    			<input type="text" id="phone" name="phone" placeholder="Phone">
    		</p>
        <!-- honeypot -->

        <div class="" id = "pot">
            <label for="robotest">(NOTE: Leave this blank if you are human!) What is 1000 plus two?</label>
            <input id="robotest" name="robotest" class="robotest" type="text" size="4">
        </div> <!-- /hide -->

    	</div> <!-- /span4 -->
      <div class="span8"> 	
   			<label for="message">Message/Cover Letter</label>
        <textarea rows="4" name="message" class="span12"></textarea>
   			<br><br>
    		<label for="resume">R&eacute;sum&eacute; <br>(Copy and paste your simple text r&eacute;sum&eacute; here.  You may include links.)</label>
   			<textarea rows="4" name="resume" class="span12"></textarea>
   			<br><br>
   			<button type="submit" class="btn btn-primary pull-right" value="Send" name="submit">Submit</button>
   			<input type="hidden" name="form_delivery" value="default"/>
				<input type="hidden" name="form_format" value="text"/>
    	</div><!-- /span8 -->
    </div><!-- /row-fluid -->
	</form>


<script>
var $my_form =  $("#careerForm")
$my_form.validate(function($form, e){ alert("submitted") })
</script>

	
    
    
<!-- Ends Container Page and Wrapper, Footer, Javascript Loading, End Body and HTML  -->
<?php include('../includes/footer.php'); ?>