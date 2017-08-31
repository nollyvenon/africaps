<?php 
//start the session 
session_start(); 

//check to make sure the session variable is registered 

//session variable is registered, the user is ready to logout 
session_unset(); 
session_destroy(); 
	header( "Location: adminlogin.php" ); 

?>