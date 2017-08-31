<?php
ob_start();
session_start();
include_once('reformat_text.php');
include('Connections/conn.php');
include_once('timeout.php');

if(!isset($_SESSION['adminname'])){	

 header("Location:adminlogin.php");
} 
$id = $_GET['id'];		

$query = "SELECT * FROM goalcomrss where id ='$id'";
$result = mysql_query($query);

if (mysql_num_rows($result) == 0 ) {

	echo ('<p>No such information in the Database<br />'.
      'Error: ' . mysql_error() . '</p>');
} else {
			while ($row = mysql_fetch_array($result)) {
				$fullname = $row['fullname'];
				$adminname = $row['adminname'];
				$address = $row['address'];
				$myuserpriv = $row['level'];
				$phone = $row['phone'];
				$email = $row['email'];
				$state = $row['state'];
				$country = $row['country'];
				
			}
}

mysql_query("DELETE FROM goalcomrss where id = '$id'");
header("Location:editcontent.php");
?>