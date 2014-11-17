<?php 
if (isset($_POST["spam"])) {
	$spa = $_POST["spam"];
	if (!empty($spa) && !($spa == "4" || $spa == "four")) {
    	echo "You failed the bot test!";
    	exit ();
	}	
}

?>