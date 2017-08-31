<?php
ob_start();
session_start();
 set_time_limit(0); // Remove the time limit for command-line usage;

$timeout = 45; // Set timeout minutes
$logout_redirect_url = "adminlogin.php"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        header("Location: $logout_redirect_url");
    } else {
	//echo "Not yet time";	
	}
}
$_SESSION['start_time'] = time();
?> 
