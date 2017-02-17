<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title>Database</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <!--  my  Js-->
        <script src="js/myscript.js"></script>
        
</head>

<body>


<?php


// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
//error_reporting(0);    error reporting  is  switched OFF , in  final  must  be  ON
error_reporting();// it  was  the  first variant
include("config/database.php");
session_start();
// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************





// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
//WORKING
$db = new PDO('mysql:host='.MYSQL_HOST.'; dbname='.MYSQL_DATABASE, MYSQL_LOGIN, MYSQL_PASSWORD); 

/*$db=new PDO('mysql:host=mysql.hostinger.com.ua;dbname=u341473096_gall','u341473096_user','useruser');*/
$db->exec('SET NAMES utf8');
// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************
?>












<div class="wrapper">

<!------------------------------------------------------------Start HEADER------------------------------------------------------------------------------------->
	<header class="header">
<?php
//TRYING TO REFER TO CLASS
include("classes/GetTemplateClass.php");
$get = new GetTemplateClass(); $header=$get->GetTemplateR('templates/header/header.tpl');
echo $header;
?>
        </header><!-- END .header-->
<!------------------------------------------------------------END HEADER------------------------------------------------------------------------------------->










	<div class="middle">



<!------------------------------------------------------------Start  Right SIDE------------------------------------------------------------------------------------->
		<div class="container">
			<div class="content">
<?php


//if(isset($_GET['category'])){
$rightSidebar=$get->GetTemplateR('templates/right/Q&Answ.tpl');
echo $rightSidebar;
//}

if(empty( $_GET ) ) {
$home=$get->GetTemplateR('templates/right/home.tpl');
echo $home;}
?>				
			</div> <!-- END Div class."content" -->
		</div>          <!--END  class "container"-->
<!------------------------------------------------------------END Right SIDE------------------------------------------------------------------------------------->




<!------------------------------------------------------------Start  Left SIDE------------------------------------------------------------------------------------->
		<aside class="left-sidebar">
<?php
$leftSidebar=$get->GetTemplateR('templates/left/left.tpl');
echo $leftSidebar;
?>			
		</aside><!--END .left-sidebar -->
<!------------------------------------------------------------END  Right SIDE------------------------------------------------------------------------------------->


	</div><!--END div .middle-->

</div><!--END div .wrapper -->





<!------------------------------------------------------------Start  footer------------------------------------------------------------------------------------->
<footer class="footer">
<?php
$footer=$get->GetTemplateR('templates/footer/footer.tpl');
echo $footer;
?>
</footer><!-- END  .footer -->
<!------------------------------------------------------------ END  footer------------------------------------------------------------------------------------->
</body>
</html>