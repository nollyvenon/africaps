<?php  
if(!isset($_SESSION)) session_start(); 
// set time-out period (in seconds)
$inactive = 6000;
 
// check to see if $_SESSION["timeout"] is set
if (isset($_SESSION["timeout"])) {
    // calculate the session's "time to live"
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
    	session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();
        header("Location: ../login.php");
    }
}
 
$_SESSION["timeout"] = time();
?>	  