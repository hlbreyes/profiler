<?php
	session_start();
	require_once('saveprofiledatatodb.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Submission Successful | PGCEAP</title>

	<!--[if !IE]><!-->
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<!--<![endif]-->

	<!--[if gte IE 7]>
		<link rel="stylesheet" type="text/css" href="/css/main.css" media="screen, projection" />
	<![endif]-->

	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="http://universal-ie6-css.googlecode.com/files/ie6.0.3.css" media="screen, projection" />
	<![endif]-->
	<style>
		#successBody{
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			text-align:center;
			font-size:28px;
			padding-top:50px;
		}
		#pdfLink{
			font-size:20px;
			padding-left:160px;
		}
		#returnLink{
			font-size:15px;
			margin-left:315px;
		}
		#successSection{
			margin-top:150px;
			margin-left: auto; 
			margin-right: auto; 
			width: 8in;
			height:3in;
			background-color: #fdfdfd;
		}
	</style>
</head>

<body  style="background-color:#F3F3F3;">
	<header style="top: 0;position: fixed; width:20in">
		<?php include('header.php'); ?>
	</header>
	
	<section>
		 <br>
	
		
	</section>
	<section class="panel panel-primary" id="successSection">
		<div class="panel-heading" style="font-size:18px">
		
		</div>
		<div id="successBody">
			Successfully saved data.<br>
			Congratulations. Your application has been saved. 
		</div>
		<br> <br>
		<a href="generatepdf.php" target="_blank" id="pdfLink"> Please click here to generate your printable slip. </a> <br> <br> 
		<!-- Return link commented out and will be removed if deemed unnecessary -->
		<!--a href="index.php" id="returnLink" type="button" class="btn btn-primary"> Return to Home </a-->
	
	</section>
	<footer  style="bottom: 0;position: fixed; width:20in ">
		<?php include('footer.php'); ?>	
	</footer>
</body>

</html>

<!-- 
- Profiling system: success.php
- Author: Howell Lance B. Reyes
- Author: Rheymark Q. Casero
- Date last updated: 6/29/15
 -->