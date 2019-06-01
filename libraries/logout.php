<?php 

	session_start();
	
	if (session_destroy()) {
		header("location: ../pages/auth-login.php");
    }
    
?>