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
                                Add Admin
                            </span>
                        </div>
                        
                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">


<h4 class="heading-1 clearfix">
    <div class="heading-content">
       Add Admin
        <small>
            
        </small>
        
    </div>
    <div class="clear"></div>
</h4>

<div class="table-responsive mtl">
                                    <form action="" class="form" method="post">
    	<div class="form-group has-error"><p class="mbn"><?php echo $err = $_GET['err'];
			echo $err ; 
			?></p></div>
            
<?php
if ($_POST){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$phone = $_POST['phone'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$priv = $_POST['priv'];
$bday = $day." ".$month." ".$year;
$gender = $_POST['gender'];
$fullname = $firstname.' '.$lastname;
			$qry1 = "SELECT phone FROM admin WHERE phone='" . addslashes($phone) . "'";
			if (mysql_num_rows(mysql_query($qry1)) > 0) {
			$err .= "* Phone number already exists!<br>";
			}

			$qry2 = "SELECT adminname FROM admin WHERE adminname='" . addslashes($username) . "' ";
			if (mysql_num_rows(mysql_query($qry2)) > 0) {
			$err .= "* Username already exists!<br>";
			}
			
			if ($firstname=='' or $lastname=='' or $email=='' or $username==''){
			$err .= "Please fill compulsory fields correctly.";	
			}
			
			if (strlen($err) > 1){
				echo $err;
			}else{

				$sql = mysql_query("INSERT INTO admin(fullname,adminname,pwd,address,level,phone,email) VALUES ('$fullname','$username','$password','$address','$priv','$phone','$email')");
if ($sql){
	echo "<span class=\"alert-danger\">Staff Account Created Successfully.</span>";
	 		
}
			}

}
?>            
        <div class="row mbl">
        <div class="form-row">                                                        
            <div class="form-label col-md-2">
                <label for="">
                    First Name:
                    <span class="required">*</span>
                </label>
            </div>                                               
        
            <div class="form-input col-md-8">
                <input name="firstname" required class="col-md-8" type="text" placeholder="First Name" size="50">
            </div>
        </div>
        
        <div class="form-row">                                                        
            <div class="form-label col-md-2">
                <label for="">
                    Last Name:
                    <span class="required">*</span>
                </label>
            </div>                                               
        
            <div class="form-input col-md-8">
                <input name="lastname" required class="col-md-8" placeholder="Last Name" type="text" size="50">
            </div>
        </div>
        
        <div class="form-row">                                                        
            <div class="form-label col-md-2">
                <label for="">
                    UserName:
                    <span class="required">*</span>
                </label>
            </div>                                               
        
            <div class="form-input col-md-8">
                <input name="username" required class="col-md-8" placeholder="Your Username" type="text" size="50">
            </div>
        </div> 
        
        <div class="form-row">                                                        
            <div class="form-label col-md-2">
                <label for="">
                    Email:
                    <span class="required">*</span>
                </label>
            </div>                                               
        
            <div class="form-input col-md-8">
                <input name="email" required class="col-md-8" placeholder="Your Email" type="text" size="50">
            </div>
        </div> 
        
        <div class="form-row">                                                        
            <div class="form-label col-md-2">
                <label for="">
                    Phonr:
                    <span class="required">*</span>
                </label>
            </div>                                               
        
            <div class="form-input col-md-8">
                <input name="phone" required class="col-md-8" placeholder="Your Phone" type="text" size="50">
            </div>
        </div>  
        
        <div class="form-row">                                                        
            <div class="form-label col-md-2">
                <label for="">
                    Password:
                    <span class="required">*</span>
                </label>
            </div>                                               
        
            <div class="form-input col-md-8">
                <input name="password" required class="col-md-8" placeholder="Password" type="password" size="50">
            </div>
        </div>
        
        <div class="form-row">                                                        
            <div class="form-label col-md-2">
                <label for="">
                    Confirm Password:
                    <span class="required">*</span>
                </label>
            </div>                                               
        
            <div class="form-input col-md-8">
                <input name="confirm_password" required class="col-md-8" placeholder="Confirm Password" type="password" size="50">
            </div>
        </div> 
        
        <div class="form-row">                                                        
            <div class="form-label col-md-2">
                <label for="">
                    User Privileges:
                    <span class="required">*</span>
                </label>
            </div>                                               
        
            <div class="form-input col-md-4">
                <select name="priv" class="form-control">
            <option value=''>Select a Privilege</option>
                      <?php $sql1=mysql_query("SELECT * FROM userpriv");
            while($fet=mysql_fetch_array($sql1)){
            $accttype=$fet['accttype'];
            $usergroup=$fet['usergroup'];
            echo "<option value='$usergroup'> $accttype </option>";
            
            }?>
                    </select>
            </div>
        </div>                                                        
                                                    
      </div>


                          <div class="form-row">
                              <input type="hidden" name="superhidden" id="superhidden">
                              <div class="form-input col-md-2 col-md-offset-2">

                                  <input name="submit" value="Add Admin" class="btn medium primary-bg radius-all-4" type="submit" />
                              </div>
                          </div>
                                                    
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
