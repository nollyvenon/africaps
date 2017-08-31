<?php  ob_start(); 
session_start();

//include_once('utf.php');
include_once('reformat_text.php');
include('Connections/conn.php');
include_once('timeout.php');

if(!isset($_SESSION['adminname'])){	

 header("Location:adminlogin.php");
} 
$adminname=$_SESSION['adminname'];
 ?><!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>AfriCaps E-Library</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="assets/images/icons/favicon.png">

        <!--[if lt IE 9]>
          <script src="assets/js/minified/core/html5shiv.min.js"></script>
          <script src="assets/js/minified/core/respond.min.js"></script>
        <![endif]-->

        <!--[if lt IE 7]>
        <link rel="stylesheet" type="text/css" href="assets/css/minified/icons-ie7.min.css">
        <![endif]-->

        <!-- AfriCaps E-Library CSS Core -->

        <link rel="stylesheet" type="text/css" href="assets/css/minified/aui-production.min.css">

        <!-- Theme UI -->

        <link id="layout-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/layouts/gray.min.css">
        <link id="elements-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/elements/green.min.css">

        <!-- AfriCaps E-Library Responsive -->

        <link rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/responsive.min.css">

        <!-- AfriCaps E-Library JS -->

        <script type="text/javascript" src="assets/js/minified/aui-production.min.js"></script>

        <script>
            jQuery(window).load(
                function(){

                    var wait_loading = window.setTimeout( function(){
                      $('#loading').slideUp('fast');
                      jQuery('body').css('overflow','auto');
                    },500
                    );

                });
        </script>

    </head>
    <body style="overflow: hidden;">
        

        <div id="loading" class="ui-front loader ui-widget-overlay solid-white opacity-100">
            <img src="assets/images/loader-dark.gif" alt="">
        </div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="page-wrapper" class="demo-example">

            <?php include('sidebar.php'); ?>
            <!-- #page-sidebar -->
            
            <div id="page-main">

                <div id="page-main-wrapper">
					 <?php include('header.php'); ?>
                    <!-- #page-header -->

                    <div id="page-breadcrumb-wrapper">
                        <div id="page-breadcrumb">
                            <a href="javascript:;" title="Dashboard">
                                <i class="glyph-icon icon-dashboard"></i>
                                Dashboard
                            </a>
                            <a href="javascript:;" title="Elements">
                                <i class="glyph-icon icon-laptop"></i>
                                Content
                            </a>
                            <span class="current">
                                Update Content
                            </span>
                        </div>
                        
                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">


<h4 class="heading-1 clearfix">
    <div class="heading-content">
        Update Content
        <small>
            
        </small>
        
    </div>
    <div class="clear"></div>
</h4>

                          <?php

$id = $_GET['id'];
$query = "SELECT * FROM goalcomrss where id='$id' order by id DESC";
$result = mysql_query($query);

if (mysql_num_rows($result) == 0 ) {

	echo ('<p>No such information in the Database<br />'.
      'Error: ' . mysql_error() . '</p>');
} else {
			while ($row = mysql_fetch_array($result)) {
				$transid = $row['transid'];
				$feedcategory = $row['feedcategory'];
				$feedtitle = $row['feedtitle'];
				$feeddescript = $row['feeddescript'];
				$conttitle = $row['conttitle'];
				$contdescript = $row['contdescript'];
				$contlink = $row['contlink'];
				$pubdate = $row['pubdate'];
				$actdate = $row['actdate'];
				$timestamp = $row['timestamp'];
			}
			
}

	if ($_POST['close']){
	  header("Location:viewclients.php");
	}
	
	// update process
if ($_POST['update']){
$datecreated = date ('d-m-Y');	
$feedtitle = madSafety($_POST['feedtitle']);
$feedcategory = madSafety($_POST['feedcategory']);
$feeddescript = madSafety($_POST['feeddescript']);
$conttitle = madSafety($_POST['conttitle']);
$contdescript = madSafety($_POST['contdescript']);
$contlink = madSafety($_POST['contlink']);
$pubdate = madSafety($_POST['pubdate']);
$actdate = madSafety($_POST['actdate']);

$sql = mysql_query("UPDATE goalcomrss SET feedcategory='$feedcategory',feedtitle='$feedtitle',feeddescript='$feeddescript',conttitle='$conttitle',contdescript='$contdescript',contlink='$contlink',pubdate='$pubdate',actdate='$actdate' where id='$id'");

if ($sql){
		 echo "<div class=\"infobox clearfix infobox-close-wrapper success-bg mrg20B\"> Content updated successfully  </div>";
}
header("Location:editcontent.php");
}
?>
          <form id="form1" name="form1" method="post" action="">
													<div class="form-row">
                                                        <div class="form-label col-md-4">
                                                            <label for="">
                                                                Trans ID:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                            <input type="text" name="title" readonly class="col-md-3" value="<?php echo $transid; ?>" id="title" />
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                         <div class="form-label col-md-4">
                                                            <label for="">
                                                                Feed Title:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                            <input type="text" name="feedtitle" class="col-md-8" value="<?php echo $feedtitle; ?>" id="feedtitle" />
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                         <div class="form-label col-md-4">
                                                            <label for="">
                                                                Feed Description:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                             <input type="text" name="feeddescript" class="col-md-8" value="<?php echo $feeddescript; ?>" id="feeddescript" />
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-row">
                                                        <div class="form-label col-md-4">
                                                            <label for="">
                                                                Feed Category:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                            <input type="text" name="feedcategory" class="col-md-8" value="<?php echo $feedcategory; ?>" id="title" />
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-row">                                                        
                                                        <div class="form-label col-md-4">
                                                            <label for="">
                                                                Content Title:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>                                               
                                                    
                                                        <div class="form-input col-md-8">
                                                            <input type="text" name="conttitle" class="col-md-8" value="<?php echo $conttitle; ?>" id="conttitle" />
                                                        </div>
                                                    </div>
                                                        
                                                    <div class="form-row">
                                                        <div class="form-label col-md-4">
                                                            <label for="" class="label-description">
                                                                Content Description:
                                                                <span>10 chars min, 300 max</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                            <textarea id="contdescript" name="contdescript" data-trigger="keyup" data-rangelength="[10,300]" class="parsley-validated"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-row">
                                                        <div class="form-label col-md-4">
                                                            <label for="">
                                                                Content Link:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                             <input type="text" name="contlink" class="col-md-8" value="<?php echo $contlink; ?>" id="contlink" />
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-row">
                                                        <div class="form-label col-md-4">
                                                            <label for="">
                                                                Pub Date:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                             <input type="text" name="pubdate" class="col-md-3" value="<?php echo $pubdate; ?>"  data-trigger="change" data-required="true" id="datepicker2" />
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-row">
                                                     	<div class="form-label col-md-4">
                                                            <label for="">
                                                                Active Date:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                             <input type="text" name="actdate" class="col-md-3" value="<?php echo $actdate; ?>" data-trigger="change" data-required="true" id="datepicker2" />
                                                        </div>
                                                    </div>
                                                        
                                                    <div class="form-row">
                                                        <div class="form-label col-md-4">
                                                            <label for="">
                                                                Timestamp:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                             <input type="text" name="timestamp" class="col-md-3" value="<?php echo $timestamp; ?>" id="timestamp" />
                                                        </div>
                                                    </div>
                                                        
                                                   
                                                    <div class="divider"></div>
                                                    <div class="form-row">
                                                        <input type="hidden" name="superhidden" id="superhidden">
                                                        <div class="form-input col-md-3 col-md-offset-4">

                                                            <input name="btnBulkUpload" class="btn medium primary-bg radius-all-4" type="submit" size="50" value="Upload Now" />
                                                        </div>
                                                    </div>          
        </form>

                            </div>                    </div><!-- #page-content -->
			            <!-- #page-footer-wrapper -->
	            </div><!-- #page-main -->
            </div><!-- #page-main-wrapper -->
					 <?php include('footer.php'); ?>
        </div><!-- #page-wrapper -->

    </body>
</html>
