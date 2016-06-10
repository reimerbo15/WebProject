<?php
	session_start();	
	if(isset($_POST["subbutton"])){
		include("model.php");
		$_SESSION["username"] = $_POST["Username"];
		$_SESSION["password"] = $_POST["Password"];
	   	if (($_SESSION["username"] == getUserData()) AND ($_SESSION["password"] == getPassData())){
	   		echo "Verified User <br>";
	   		$_SESSION["username"];
	   	} else {
	   		echo "Username or Password are incorrect!";
	   		exit;
	   	}
	   	if (isset($_SESSION['username'])){
	  		echo "Logged in user : ". $_SESSION["username"];
	   		
	  		$colour = array("blue", "yellow");
	  		
	  		echo '<select name="colour">';
	  		
	  		foreach ($colour as &$option) {
	  			echo '<option>'. $option . '</option>';
	  		}
	  		
	  		echo '</select>';
	  		
	  		
	   	}
	}
?>
	
	
