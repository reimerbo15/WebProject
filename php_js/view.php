<?php
	if (isset($_SESSION['username'])){
		include("HTML/city.html");	
	}else{
		include("HTML/login.html");
	}
?>