<?php
require('fpdf/fpdf.php');
$firstdate = $_GET['date1'];
$secdate = $_GET['date2'];
 $isvote = $_GET['isvote'];
 
 //Column titles
$header=array('ID','Name','Date','Time','Phone No');
	  if ($isvote!=""){
$strSQL = "SELECT merchantname, businessname,website, phoneno,meremail,business,bizaddress FROM registration WHERE UNIX_TIMESTAMP(timestamp) between '$firstdate' and '$secdate' order by id";	 
	  }else{
$strSQL = "SELECT merchantname, businessname,website, phoneno,meremail,business,bizaddress FROM registration order by id DESC";		  
	  }

//Data loading

//*** Load MySQL Data ***//
include ('../db_vars.inc');
//Parameter='$cont' AND 


class PDF extends FPDF
{

//Colored table
function FancyTable($header,$data)
{
	$firstdate = $_GET['date1'];
$secdate = $_GET['date2'];
 $isvote = $_GET['isvote'];

	  if ($isvote!=""){
		  //Column titles
$header=array('ID','Name','Date','Time','Phone No');

	  $strSQL = "SELECT merchantname, businessname,website, phoneno,meremail,business,bizaddress FROM registration WHERE timestamp >= '$firstdate' AND timestamp <= 'DATE_ADD($secdate, INTERVAL 1 DAY)' order by id ASC";
	//  $strSQL = "SELECT merchantname, businessname,website, phoneno,meremail,business,bizaddress FROM registration WHERE UNIX_TIMESTAMP(timestamp) between '$firstdate' and '$secdate' order by id";	 

	  } else {
		  

if ($firstdate!=""){
	$this->SetTextColor(0);
	$this->SetFillColor(255,255,255);
	$this->SetFont('','B',10);
	$this->Cell(100,7,"From: $firstdate   To:   $secdate",1,0,'C',true);
	$this->Ln();

	$this->Ln();

}
	//Colors, line width and bold font
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B',10);

	//Header
	$w=array(20,85,25,25,35);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	//Color and font restoration
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('','B',9);
	
	//Data
	$fill=false;
	$i =1;
	
	 if ($voters!=""){
		foreach($data as $row)
		{
		$enterdata = substr($row[0]." ".$row[2],0,100);
			$this->Cell($w[0],6,$i,'LR',0,'L',$fill);
			$this->Cell($w[1],7,$enterdata,'LR',0,'L',$fill);	
			$this->Cell($w[2],7,$row[1],'LR',0,'L',$fill);	
			$this->Ln();
			$fill=!$fill;
			$i++;
		}
		$this->Cell(array_sum($w),0,'','T');
		 
		 
	 } else {
		foreach($data as $row)
		{
		$enterdata = substr($row[0]." ".$row[1],0,100);
			$this->Cell($w[0],6,$i,'LR',0,'L',$fill);
			$this->Cell($w[1],7,$enterdata,'LR',0,'L',$fill);
			$this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
			$this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
			$this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
	
			$this->Ln();
			$fill=!$fill;
			$i++;
		}
		$this->Cell(array_sum($w),0,'','T');
		
	 }
}

}
}
$objQuery = mysql_query($strSQL);
$resultData = array();
for ($i=0;$i<mysql_num_rows($objQuery);$i++) {
	$result = mysql_fetch_array($objQuery);
	array_push($resultData,$result);
}
//************************//
$pdf=new PDF();

$pdf->SetFont('Arial','',7);
$pdf->AddPage();
 //$pdf->Image('timerangsearch_clip_image002.jpg',80,8,33);
$pdf->Ln(20);
$pdf->FancyTable($header,$resultData);
 
	$str1 = mysql_query("SELECT * FROM registration WHERE  timestamp >= '$firstdate' AND timestamp <= 'DATE_ADD($secdate, INTERVAL 1 DAY)' order by id ASC");

$strCount = mysql_num_rows($str1);

//	$pdf->Cell(10,7,"No of voters = $strCount",2,0,'C',true);

$pdf->Write(10,"No of Records = $strCount");
 $pdf->Output("files/kapsasms".date("m-d-Y-hiA").".pdf","F");

$fullPath = "files/kapsasms".date("m-d-Y-hiA").".pdf";
if ($fd = fopen ($fullPath, "r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "pdf":
        header("Content-type: application/pdf"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download
        break;
        default;
        header("Content-type: application/octet-stream");
        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
    }
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);

?>
