<?php 

if ($_POST) {
	$first = $_POST['FirstName'];
	$last = $_POST['LastName'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$robotest = $_POST['robotest'];
 
    	if($robotest && $robotest == "1002")
    		echo "You are a gutless robot.";
    	else
    		echo "You are human.";
    		exit();
}
?>