<?php 

if ($_POST) {
	$first = $_POST['FirstName'];
	$last = $_POST['LastName'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$robotest = $_POST['robotest'];
 
    	if($robotest) {
    		header('Location: ../learn-more/reuest-brochure.php');
    	}
    	else
    		header('Location: ../learn-more/thankyou-contact.php');
    		die();
}
?>