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
                                Edit Content
                            </span>
                        </div>
                        
                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">


<h4 class="heading-1 clearfix">
    <div class="heading-content">
        Edit Content
        <small>
            Select a content to edit it.
        </small>
        
    </div>
    <div class="clear"></div>
</h4>

<div class="table-responsive mtl">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <th>Feed Category</th>
                                            <th>Feed Title</th>
                                            <th>Feed Description</th>
                                            <th>Active Date</th>
                                            <th width="3%">Edit</th>
                                            <th width="4%">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                   <?php 
	if( $limit=""){$limit = 40; }else{$limit = $_POST['limval'];}
	
	$sql = mysql_query("SELECT * FROM goalcomrss order by id");
	$totalrows = mysql_num_rows($sql);
	$page=(int)$_GET['page'];
			if(empty($page)){
  			  $page = 1;
			}
			$limit = 40;	 	$page;
		$limitvalue = $page * $limit - ($limit);

	$sql = mysql_query("SELECT * FROM goalcomrss order by id DESC LIMIT $limitvalue, $limit");
		if(mysql_num_rows($sql) > 0){			
			while ($row = mysql_fetch_array($sql)) {
		 $id = $row['id'];
?>
                                    <tr>
                                        <td><?php echo $row['feedcategory']; ?></td>
                                        <td><?php echo $row['feedtitle']; ?></td>
                                        <td><?php echo $row['feeddescript']; ?></td>
                                        <td class="center"><?php echo $row['actdate']; ?></td>
                                        <td><a href="javascript:;" class="edit"><?php echo "<a href='updatecontent.php?id=$id'>Update</a>";?></a></td>
                                        <td><a href="javascript:;" class="delete"><?php echo "<a href='deletecontent.php?id=$id'>Delete</a>"; ?></a></td>
                                    </tr>
<?php					}
		}
?>
                                      
                                        </tbody>
                                    </table>
                                </div>
                    </div><!-- #page-content -->
			            <!-- #page-footer-wrapper -->
	            </div><!-- #page-main -->
            </div><!-- #page-main-wrapper -->
					 <?php include('footer.php'); ?>
        </div><!-- #page-wrapper -->

    </body>
</html>
