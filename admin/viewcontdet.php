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
                                View Content
                            </span>
                        </div>
                        
                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">


<h4 class="heading-1 clearfix">
    <div class="heading-content">
        View Content
        <small>
            Select a content to edit it.
        </small>
        
    </div>
    <div class="clear"></div>
</h4>

<div class="table-responsive mtl">
                          <?php

$id = $_GET['id'];
$query = "SELECT * FROM goalcomrss where id='$id'";
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
?>
          <form id="form1" name="form1" method="post" action="">
            <table width="1000" height="549" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="129" height="41"><strong>Trans ID: </strong></td>
                <td><?php echo $transid; ?></td>
              </tr>
              <tr>
                <td height="41"><strong>Feed Category: </strong></td>
                <td><?php echo $feedcategory; ?></td>
              </tr>
              <tr>
                <td height="39"><strong>Feed Title: </strong></td>
                <td><?php echo $feedtitle; ?></td>
              </tr>
              <tr>
                <td height="28"><strong>Feed Description:</strong></td>
                <td><?php echo $feeddescript; ?></td>
                </tr>
              <tr>
                <td height="44"><strong>Content Title:</strong></td>
                <td><?php echo $conttitle; ?></td>
                </tr>
              <tr>
                <td height="44"><strong>Content Description:</strong></td>
                <td><?php echo $contdescript; ?></td>
                </tr>
              <tr>
                <td height="44"><strong>Content Link:</strong></td>
                <td><?php echo $contlink; ?></td>
                </tr>
              <tr>
                <td height="44"><strong>Publish Date:</strong></td>
                <td><?php echo $pubdate; ?></td>
                </tr>
              <tr>
                <td height="44"><strong>Active Date:</strong></td>
                <td><?php echo $actdate; ?></td>
                </tr>                                                
              <tr>
                <td height="76"><strong>Timestamp:</strong></td>
                <td><?php echo $timestamp; ?></td>
                </tr>              
              <tr>
                <td height="24">&nbsp;</td>
                <td>

                                <!--    <input type="submit" onClick="return checksubmit(this)" name="submit" value="Submit" />
                  <input type="reset" name="Submit2" value="Cancel" onclick='window.close();' />--></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
                  <div class="row mbl">
                <div class="col-md-3">
                    <input name="close" type="submit" class="btn medium primary-bg radius-all-4 col-md-4" value="Close !">
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
