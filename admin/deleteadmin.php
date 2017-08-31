<?php
ob_start();
include_once "Connections/conn.php";
echo $id = $_REQUEST['sid'];		


mysql_query("DELETE FROM admin where id = '$id'");
header("Location:editadmin.php");
?>