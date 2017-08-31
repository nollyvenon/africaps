<?php
header("Content-type: application/vnd.ms-word");  
header("Content-Disposition: attachment; filename=testing.doc");  
include ('../db_vars.inc');
?>
<html>
<style type="text/css">
.aasa {
	color: #F00;
}
</style>  
<body>  
<?php
//your code here to create your sql statement...we'll call it $finalSQL
$firstdate = $_GET['date1'];
$secdate = $_GET['date2'];

 if ($isvote!=""){
		$strSQL = "SELECT * FROM registration WHERE timestamp >= '$firstdate' AND timestamp <= 'DATE_ADD($secdate, INTERVAL 1 DAY)' order by id DESC";

 } else {
		$strSQL = "SELECT * FROM registration order by id DESC";	 
 }
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");  
?>  
<table width="637" border="0">  
<tr bgcolor="#FF6600">  
<th width="50"> <div align="center">S/No </div></th>  
<th width="79"> <div align="center">Merc. Name </div></th>  
<th width="65"> <div align="center">Biz Name </div></th>  
<th width="81"> <div align="center">Web </div></th>  
<th width="80"> <div align="center">Phone No </div></th>  
<th width="77"> <div align="center">Email </div></th>  
<th width="67"> <div align="center">Biz </div></th>  
<th width="86"> <div align="center">Biz Addr </div></th>  
</tr>  
<?  
$i = 1;
while($objResult = mysql_fetch_array($objQuery))  
{  
?>  
<tr>  
<td bgcolor="#FF9966"><div align="center"><?php $i;?></div></td>  
<td bgcolor="#FF9966"><?=$objResult["merchantname"];?></td>  
<td bgcolor="#FF9966"><?=$objResult["businessname"];?></td>  
<td bgcolor="#FF9966"><div align="center"><?=$objResult["website"];?></div></td>  
<td bgcolor="#FF9966"><?=$objResult["phoneno"];?></td>  
<td bgcolor="#FF9966"><?=$objResult["meremail"];?></td>  
<td bgcolor="#FF9966"><div align="center"><?=$objResult["business"];?></div></td>  
<td align="right" bgcolor="#FF9966"><?=$objResult["bizaddress"];?></td>  
</tr>  
<?  
$i++;
}  
?>  
</table>  
</body>  
</html>  