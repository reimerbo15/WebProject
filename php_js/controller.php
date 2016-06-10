<?php
	session_start();	
	if(isset($_POST["subbutton"])){
		include("model.php");
		$_SESSION["username"] = $_POST["Username"];
		$_SESSION["password"] = $_POST["Password"];
	   	if (($_SESSION["username"] == getUserData()) AND ($_SESSION["password"] == getPassData())){
	   		include("view.php");
	   	}else{
	   		echo "Username or Password are incorrect!";
	   		exit;
	   	} 	
	}
?>
	
	
