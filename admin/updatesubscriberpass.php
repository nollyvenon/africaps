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
                                User
                            </a>
                            <span class="current">
                                Update Password
                            </span>
                        </div>
                        
                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">


<h4 class="heading-1 clearfix">
    <div class="heading-content">
       Update Password
        <small>
            
        </small>
        
    </div>
    <div class="clear"></div>
</h4>

<div class="table-responsive mtl">

          <form id="form1" name="form1" method="post" action="">
<?php
if(isset($_POST['change'])){
$uname=$_POST['uname'];
$err='';
$opwd=md5($_POST['opwd']);
$npwd=$_POST['npwd'];
$cpwd=$_POST['cpwd'];

if($npwd !==$cpwd){
$err .="Your new password does not match confirm password!<br />";
}
$sql=mysql_query("select * from subscribers where username='$uname' and pwd='$opwd'");
if(!mysql_num_rows($sql)){
$err .="Your password does not match the one on record.<br />";
}
if(strlen($err)>0){
echo "<p class='error'>$err</p>";
}else{
$npwd=md5($npwd);
$sql=mysql_query("update subscribers set pwd='$npwd' where username='$uname'");
if($sql){
//$st->db_update();
echo "<p> Password changed successfully!</p>";		

}
}
}

$username =  $_GET['dd'];

?>            <div class="form-row">
                                <div class="form-label col-md-4">
                                    <label for="" class="label-description">
                                        Username:
                                        <span></span>
                                    </label>
                                </div>
                                <div class="form-input col-md-8">
                                    <input type="text" name="uname" class="col-md-8" value="<?php echo $username; ?>"  id="uname" />
                                </div>
                            </div>
                          <div class="form-row">
                                <div class="form-label col-md-4">
                                    <label for="" class="label-description">
                                       Old Password:
                                        <span></span>
                                    </label>
                                </div>
                                <div class="form-input col-md-8">
                                    <input name="opwd" type="password" id="opwd" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label col-md-4">
									<label for="" class="label-description">
                                       New Password:
                                        <span></span>
                                    </label>
                                </div>
                                <div class="form-input col-md-8">
                                    <input name="npwd" type="password" id="npwd" />
                                </div>
                            </div>                                          
                          <div class="form-row">
                                <div class="form-label col-md-4">
                                    <label for="" class="label-description">
                                       Confirm Password:
                                        <span></span>
                                    </label>
                                </div>
                                <div class="form-input col-md-8">
                                    <input name="cpwd" type="password" id="cpwd" />
                                </div>
                            </div>
                          
                <div class="form-input col-md-6 ">
<input type="submit" class="btn medium primary-bg"  onClick="return checksubmit(this)" name="change" value="Submit" /></div>
                 <div class="form-input col-md-6 "> <input type="reset" name="Submit2" value="Cancel" onclick='window.close();' /> </div>
            
          </form>
                            </div>
                    </div><!-- #page-content -->
			            <!-- #page-footer-wrapper -->
	            </div><!-- #page-main -->
            </div><!-- #page-main-wrapper -->
					 <?php include('footer.php'); ?>
        </div><!-- #page-wrapper -->

    </body>
</html>
