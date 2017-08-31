<?php  ob_start(); 
session_start();
include('Connections/conn.php');
include_once('timeout.php');

if(!isset($_SESSION['adminname'])){	

 header("Location:adminlogin.php");
} 
$id = $_GET['id'];		


mysql_query("DELETE FROM services where services_id = '$id'");
header("Location:viewservices.php");
?>