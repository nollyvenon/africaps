<?php 
ob_start();
include_once('Connections/conn.php'); 
include_once('Connections/conn.php'); 
/*session_destroy();
$warning = $_SESSION['warning'];

if ($warning == ''){ 
$_SESSION['warning'] = 0;
} 
if ($_SESSION['warning'] >= 3  || $_SESSION['ustatus'] == 'banned'){
	header("Location:banned.php");
}*/
?>
<!DOCTYPE html>
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

        <!-- <link rel="stylesheet" type="text/css" href="../_assets/css/widgets/theme-switcher.css"> -->

        <!-- Theme UI -->

        <link id="layout-theme" rel="stylesheet" type="text/css" href="../_assets/themes/agileui/color-schemes/layouts/default.html">
        <link id="elements-theme" rel="stylesheet" type="text/css" href="../_assets/themes/agileui/color-schemes/elements/default.html">

        <link rel="stylesheet" type="text/css" href="../_assets/themes/agileui/responsive.html">
        <link rel="stylesheet" type="text/css" href="../_assets/css/helpers/responsive-elements.html">

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

        <div id="login-page" class="mrg25B">

            <div id="page-header" class="clearfix">
                <div id="page-header-wrapper" class="clearfix">
                    <div id="header-logo">
                        AfriCaps E-Library <i class="opacity-80">v1.0</i>

                        <a href="#" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                            <i class="glyph-icon icon-align-justify"></i>
                        </a>
                        <a href="#" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                            <i class="glyph-icon icon-align-justify"></i>
                        </a>
                        <a href="#" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                            <i class="glyph-icon icon-align-justify"></i>
                        </a>
                    </div>
                    <div class="button-group dropdown">
                        <a class="btn" href="" title="Dashboard">
                            <span class="button-content text-center float-none font-size-11 text-transform-upr">
                                <i class="glyph-icon icon-dashboard float-left"></i>
                                Dashboard
                            </span>
                        </a>
                        <a class="btn" href="javascript:;" data-toggle="dropdown">
                            <span class="glyph-icon icon-separator">
                                <i class="glyph-icon icon-angle-down"></i>
                            </span>
                        </a>
                        
                    </div>


                </div>
            </div><!-- #page-header -->

        </div>
<img src="assets/images/login-bg.png" class="login-img" alt="">
<div class="ui-widget-overlay gradient-black opacity-60"></div>
        <div class="pad20A mrg25T">
            <div class="row mrg25T">

      <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="col-md-4 center-margin form-vertical mrg25T">

                    <div class="ui-dialog modal-dialog mrg25T" id="login-form" style="position: relative !important;">
                        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                            <span class="ui-dialog-title">Login page</span>
                        </div>
                        <div class="pad20A pad0B ui-dialog-content ui-widget-content">
                            <div class="infobox clearfix infobox-close-wrapper success-bg mrg20B">
                             <?php
 if(isset($_POST['submit'])){
  

   echo $adminname=mysql_real_escape_string($_POST['user']);
	echo $pwd=md5(mysql_real_escape_string($_POST['password']));
	
		if (strlen($adminname) > 3 and (strlen($pwd) > 4 )){

	$sql=mysql_query("select * from admin where adminname='$adminname' and pwd='$pwd'");
	echo mysql_num_rows($sql);
	if(mysql_num_rows($sql) < 1){
					$warning++;
					$_SESSION['warning'] = $warning;
  		$err="<p class=\"error\"> Your username and password does not match our record.</p>";
			if ($warningval >= 3) $_SESSION['ustatus'] = 'banned';
	}else{
		while ($fet = mysql_fetch_array($sql)){
			
		//  if($fet["level"] =="admin"){
		   	$_SESSION['myuserpriv'] = 'admin'; 
			$_SESSION['adminname']=$fet["adminname"];
			$_SESSION['uifullname'] = $fet["fullname"];
			$_SESSION['myuserpriv'] = $fet["level"]; 
			
			if( $fet['banned'] == 1){
				header("Location:banned.php");
				exit;
			}
	$PHPSESSID = session_id();
	$sesId = session_id();
	 
	//$adminname=$_SESSION['adminname'];
	$sesLifeTime = ini_get("session.gc_maxlifetime");
	$now = time();


		  header("location:index.php?PHPSESSID=$PHPSESSID&USERID=$adminname");
		  exit;
	}
	

		}
	
	}else{// if the user entered input less than 4 characters
			echo "Invalid input.";
					$warning++;
					$_SESSION['warning'] = $warning;
			if ($_SESSION['warning'] >= 3) $_SESSION['ustatus'] = 'banned';
			mysql_query("UPDATE admin SET banned='1' where adminname='$adminname'");


	}

			switch ($warning) {
				  case 1:
					  echo " You've got three more trials.";
					  break;
				  case 2:
					  echo " You've got two more trials.";
					  break;
				  case 3:
					  echo " You've got one last trial.";
					  break;
			  }
			  
} /// END LOGIN SECTION
			  
if ($_POST['forgotpass']){   ///START FORGET PASSWORD SECTION
$email=mysql_real_escape_string($_POST['email']);
$status = "OK";
$msg="";
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
if (!stristr($email,"@") OR !stristr($email,".")) {
$msg="Your email address is not correct<BR>"; 
$status= "NOTOK";}


echo "<br><br>";
if($status=="OK"){  $query="SELECT email,adminname,password FROM admin WHERE admin.email = '$email'";
$st=mysql_query($query);
 $recs=mysql_num_rows($st);
$row=mysql_fetch_object($st);
$em=$row->email;// email is stored to a variable
 if ($recs == 0) {  echo "<center><font face='Verdana' size='2' color=red><b>No Password</b><br> Sorry Your address is not there in our database . You can Contact our Site Admin </center>"; exit;}

        $headers4="admin@africaps.org";         ///// Change this address within quotes to your address ///
$headers.="Reply-to: $headers4\n";
$headers .= "From: $headers4\n"; 
$headers .= "Errors-to: $headers4\n"; 
//$headers = "Content-Type: text/html; charset=iso-8859-1\n".$headers;// for html mail un-comment this line

 if(mail("$em","Your Request for login details","This is in response to your request for login detailst at site_name \n \nLogin ID: $row->userid \n Password: $row->password \n\n Thank You \n \n PlentyPlus Group.","$headers")){echo "<center><font face='Verdana' size='2' ><b>THANK YOU</b> <br>Your password is posted to your emil address . Please check your mail after some time. </center>";}
else{ echo " <center><font face='Verdana' size='2' color=red >There is some system problem in sending login details to your address. Please contact site-admin. <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";}


	} 

	else {echo "<center><font face='Verdana' size='2' color=red >$msg <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";}	
}
  ?>   
                      <span class="style11 style2"><?php echo $err; ?></span></p>
                		<p> <?php echo $msg; ?></p>
                                <a href="#" title="Close Message" class="glyph-icon infobox-close icon-remove"></a>
                            </div>
                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    <label for="">
                                        Username:
                                    </label>
                                </div>
                                <div class="form-input col-md-10">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-envelope-alt ui-state-default"></i>
                                        <input type="text" name="user" placeholder="User ID/Email" required autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    <label for="">
                                        Password:
                                    </label>
                                </div>
                                <div class="form-input col-md-10">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-unlock-alt ui-state-default"></i>
                                         <input type="password" name="password" required placeholder="Password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-checkbox-radio col-md-6">
                                    <input type="checkbox" class="custom-checkbox" name="remember-me" id="remember-me">
                                    <label for="remember-password" class="pad5L">Remember password?</label>
                                </div>
                                <div class="form-checkbox-radio text-right col-md-6">
                                    <a href="#" class="toggle-switch" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Forgot your password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="ui-dialog-buttonpane text-center">
                            <input name="submit" class="btn large primary-bg radius-all-4" value="Login" type="submit">
                             <button data-dismiss="modal" class="btn large transparent no-shadow toggle-switch font-bold font-size-11 radius-all-4" type="button">
                 			 Cancel
                			</button>
                        </div>
                    </div>

          
                    <div class="ui-dialog mrg15T hide" id="login-forgot" style="position: relative !important;">
                        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                            <span class="ui-dialog-title">Recover password</span>
                        </div>
                        <div class="pad20A ui-dialog-content ui-widget-content">
                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    <label for="">
                                        Email address:
                                    </label>
                                </div>
                                <div class="form-input col-md-10">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-envelope-alt ui-state-default"></i>
                                        <input placeholder="Email address" type="text" name="" id="">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="ui-dialog-buttonpane text-center">
                        	<input name="forgotpass" class="btn large primary-bg radius-all-4" value="Recover Password" type="submit"><a href="#" class="toggle-switch" switch-target="#login-form" switch-parent="#login-forgot" title="Recover password"><button data-dismiss="modal" class="btn large transparent no-shadow toggle-switch font-bold font-size-11 radius-all-4" type="button">
                            
                 			 Cancel
                			</button></a>
                            
                        </div>
                    </div>

                </form>

            </div>

        </div>


        <div id="page-footer-wrapper" class="login-footer">
            <div id="page-footer">
        	    Copyright &copy; 2013 - AfriCaps E-Library
            </div>
        </div><!-- #page-footer-wrapper -->

    </body>
</html>
