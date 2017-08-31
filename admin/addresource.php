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
                                Add A Resource
                            </span>
                        </div>
                        
                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">


<h4 class="heading-1 clearfix">
    <div class="heading-content">
        Add A Resource
        <small>
            
        </small>
        
    </div>
    <div class="clear"></div>
</h4>

<form name="frmBulkUpload" id="frmBulkUpload"   enctype="multipart/form-data" method="post" action="">
<?php
$valid_file = true;
//if they DID upload a file...
if($_FILES['fileName']['name'])
{
	//if no errors...
	if(!$_FILES['fileName']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['fileName']['tmp_name']); //rename file
		if($_FILES['fileName']['size'] > (20024000)) //can't be larger than 20 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is too large.';
		}
		
		//if the file has passed the test
		if($valid_file)
		{
			$filename = $_FILES['fileName']['name'];
			$category = $_POST['category'];
			$tags = $_POST['tags'];
			move_uploaded_file($_FILES['fileName']['tmp_name'], '../files/'.$_FILES['fileName']['name']);
			$message = 'Congratulations!  Your file was accepted.';
			  $sql = mysql_query("INSERT INTO libraryfiles(filename,folder,tags,category) VALUES ('$filename','$folder','$tags','$category')");
			  if ($sql){		
				 $message = "<div class=\"infobox clearfix infobox-close-wrapper success-bg mrg20B\"> File added successfully  </div>";
			  }

		}
		
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['fileName']['error'];
	}
}

//you get the following information for each file:
/*echo $_FILES['fileName']['name'];
$_FILES['field_name']['size'];
$_FILES['field_name']['type'];
$_FILES['field_name']['tmp_name'];*/

echo $message;

?>
													<div class="form-row">                                                        
                                                        <div class="form-label col-md-2">
                                                            <label for="">
                                                                Upload File:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>                                               
                                                    
                                                        <div class="form-input col-md-8">
                                                            <input type="file" size="50" id="fileName"  name="fileName" />
                                                        </div>
                                                    </div>

													<div class="form-row">                                                        
                                                        <div class="form-label col-md-2">
                                                            <label for="">
                                                                Tags:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>                                               
                                                    
                                                        <div class="form-input col-md-8">
                                                            <input type="text" size="50" id="tags"  name="tags" />
                                                        </div>
                                                    </div>

													<div class="form-row">                                                        
                                                        <div class="form-label col-md-2">
                                                            <label for="">
                                                                Category:
                                                                <span class="required">*</span>
                                                            </label>
                                                        </div>                                               
                                                    
                                                        <div class="form-input col-md-8">
                                                            <select class="form-control" id="category" name="category" required="required">
                                                            <option value="">Select a category</option>
                                                            <option value="religion">Religion</option>
                                                            <option value="christian">Christian</option>
                                                            <option value="history">History</option>
                                                            <option value="service">Humanities</option>
                                                            <option value="security">Security</option>
                                                            <option value="action-adventure">Action/Adventure</option>
                                                            <option value="political-science">Political Science</option>
                                                            <option value="education">Education</option>
                                                            <option value="biography">Biography</option>
                                                            <option value="poetry">Poetry</option>
                                                            <option value="drama">Drama</option>
                                                            <option value="classics">Classics</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                                                                       
                                                    <div class="form-row">
                                                        <input type="hidden" name="superhidden" id="superhidden">
                                                        <div class="form-input col-md-2 col-md-offset-2">

                                                            <input name="btnBulkUpload" value="Add Resource" class="btn medium primary-bg radius-all-4" type="submit" />
                                                        </div>
                                                    </div>
                           </form>
                           
                           
                    </div><!-- #page-content -->
			            <!-- #page-footer-wrapper -->
	            </div><!-- #page-main -->
            </div><!-- #page-main-wrapper -->
					 <?php include('footer.php'); ?>
        </div><!-- #page-wrapper -->

    </body>
</html>
