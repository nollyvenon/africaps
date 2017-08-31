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
 ?>
<!DOCTYPE html>
    <html>
    <head>


		<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
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
                                Add RSS Feed (Manual)
                            </span>
                        </div>

                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">


<h4 class="heading-1 clearfix">
    <div class="heading-content">
        Allocate Plan 
        <small>
            Enter Now.
        </small>
        
    </div>
    <div class="clear"></div>
</h4>
<form id="demo-form" action="" class="col-md-12" method="post">
  <?php
if ($_POST){
$username = madSafety($_POST['username']);	
$paid_from = madSafety($_POST['fromDate']);	
$paid_until = madSafety($_POST['toDate']);	
$cost = madSafety($_POST['cost']);	

$mdate = date('Y-m-d');

		$sql = mysql_query("INSERT INTO subscriptions(username,paid_from,paid_until,cost,transid) VALUES ( \"$username\",\"$paid_from\", \"$paid_until\", \"$cost\", \"$transid\")");

		  if ($sql){		

		  $msg = "Record added successfully ";
		 echo "<div class=\"infobox clearfix infobox-close-wrapper success-bg mrg20B\">$msg  </div>";
	  }
}
?>
										
                                                        
                                                    <div class="form-row">
                                                        <div class="form-label col-md-2">
                                                            <label for="" class="label-description">
                                                                Username:
                                                                <span>10 chars min, 300 max</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-input col-md-8">
                                                            <select name="username" class="col-md-8" required id="username" onchange="MM_jumpMenu('parent',this,0)">
                                     <option selected="selected">Select A User</option>
                                     <?php
		$sql1=mysql_query("SELECT * FROM subscribers");	
		while($fet1=mysql_fetch_array($sql1)){
			$username=$fet1['username'];
			$fullname=$fet1['fullname'];
			echo "<option value=\"$username\">".$fullname."</option>";
		}
		
		?>              

                                 </select>
                                                        </div>
                                                    </div>

<div class="form-row col-lg-3 float-left form-vertical">
            <div class="form-label">
                <label for="from">
                    From:
                </label>
            </div>
            <div class="form-input">
                <input type="text" size="10" class="fromDate" name="fromDate">
            </div>
        </div>

        <div class="form-row col-lg-3 float-left form-vertical">
            <div class="form-label">
                <label for="to">
                    To:
                </label>
            </div>
            <div class="form-input">
                <input type="text" size="10" class="toDate" name="toDate">
            </div>
        </div>
                                                    
                                                    <div class="form-row">
                                                        <div class="form-input col-md-3 col-md-offset-4">

                                                            <input name="btnBulkUpload" class="btn medium primary-bg radius-all-4" type="submit" size="50" value="Upload Now" />
                                                        </div>
                                                    </div>

                                              </form>
                    </div><!-- #page-content -->
			            <!-- #page-footer-wrapper -->
	            </div><!-- #page-main -->
					 <?php include('footer.php'); ?>
            </div><!-- #page-main-wrapper -->
        </div><!-- #page-wrapper -->

    </body>
</html>
