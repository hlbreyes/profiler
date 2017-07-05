<!-- Checks if a session is already started. If it is, unsets and destroys it. Requires PHP 5.4 and above -->
<?php
	if(version_compare(phpversion(), "5.4.0") != -1){
		if (session_status() != PHP_SESSION_NONE) {
			session_unset();
			session_destroy();
		}
	} else {
		if(session_id() != '') {
			session_unset();
			session_destroy();
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Welcome | PGCEAP</title>

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
		#welcomeBody{
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			text-align:center;
			font-size:28px;
			padding-top:50px;
		}
		#welcomeBody2{
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			text-align:center;
			font-size:21px;
			padding-top:15px;
		}
		#welcomeSection{
			margin-top:170px;
			margin-left: auto; 
			margin-right: auto; 
			width: 8in;
			height:3in;
			background-color: #fdfdfd
		}
		#welcomeButton{
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			width:2in;
			font-size:18px;
			margin-left: 285px;
		}
	</style>
</head>

<body style="background-color:#F3F3F3;">
	<header style="top: 0;position: fixed; width:20in">
		<?php include('header.php'); ?>
	</header>
	
	<section class="panel panel-primary" id="welcomeSection">
		<div class="panel-heading" style="font-size:18px">

		</div>
		<div id="welcomeBody">
			Welcome to the PGCEAP online profile submission website. <br>
		</div>
		<div id="welcomeBody2">
			Please be careful in filling up the form as you are only allowed to submit once. <br>
			Double check each information that you input. <br> <br>
		</div>
		<a href="profileform.php" type="button" class="btn btn-primary" id="welcomeButton"> Click Here to Start </a>
	</section>
	
	<footer style="bottom: 0; position:fixed; width:20in" >
		<?php include('footer.php'); ?>	
	</footer>
</body>

</html>

<!-- 
- Profiling system: verifyalldata.php
- Author: Howell Lance B. Reyes
- Author: Rheymark Q. Casero
- Date last updated: 7/12/15
 -->