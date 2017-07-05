<?php
	session_start();
	require_once('storeprofileformdata.php');
	require_once('checkduplicate.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Verify Data | PGCEAP</title>

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
		#verifyBasicInfo, #verifyFamilyBackground, #verifyEducationalBackground{
			margin-left: auto; 
			margin-right: auto; 
			width: 6in;
			background-color: #fdfdfd
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			font-size:14px;
		}
		#verifyName{
			margin-left: auto; 
			margin-right: auto; 
			height:50px;
			width: 6in;
			font-size:20px;
			text-align:center;
			background-color: #3881C0;
			margin-top:10px;
			margin-bottom:10px;
			padding-top:10px;
			color:white;
		}
		#duplicateSection{
			
			margin-top:120px;
			margin-left: auto; 
			margin-right: auto; 
			width: 8in;
			height:3in;
			background-color: #fdfdfd;
		}
		#duplicateBody{
			padding-top:70px;
			font-size:28px;
			text-align:center;
		}
	
	</style>
</head>

<body  style="background-color:#F3F3F3;">
	<header>
		<?php include('header.php'); ?>
	</header>
	
	<section>
		<!-- If duplicate checker variable (see checkduplicate.php) returns true. -->
		<?php if($duplicate) { ?> 
			<section class="panel panel-primary" id="duplicateSection">
				<div class="panel-heading" style="font-size:18px">
				
				</div> 
				<div class="panel-body" id="duplicateBody">
					Duplicate Submission.
				</div> 
				<a href = "javascript:history.back()" type="button" class="btn btn-primary" style="margin-left:335px;">Go back.</a> <br>
				
			</section>
			
		<?php } else { ?>
			<div id="verifyName">
				Verify Data 
			</div>
			<section class="panel panel-primary" id="verifyBasicInfo">
				<div class="panel-heading">
					Basic Information
				</div>	
				<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<td>Name:</td>
							<td><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['middlename']; ?> <?php echo $_SESSION['lastname']; ?></td>
						</tr>
						<tr>
							<td>Contact Number:</td>
							<td><?php echo $_SESSION['contact']; ?></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td> <?php echo $_SESSION['gender']; ?></td>
						</tr>
						<tr>
							<td>Civil Status:</td>
							<td><?php echo $_SESSION['civilstatus']; ?></td>
						</tr>
						<tr >
							<td>Birthday: </td>
							<td> <?php echo $_SESSION['birthdate']; ?></td>
						</tr>
						<tr >
							<td>Birthplace:</td>
							<td> <?php echo $_SESSION['birthplace']; ?> </td>
						</tr>
						<tr >
							<td>Height:</td>
							<td><?php echo ($_SESSION['height'])/100; ?> meters (<?php echo $_SESSION['height']; ?> centimeters)</td>
						</tr>
						<tr >
							<td>Weight:</td>
							<td> <?php echo $_SESSION['weight']; ?> kg</td>
						</tr>
						<tr >
							<td>Address:</td>
							<!-- Prints the purokstreet-barangay-municipality if available, else prints address entered in the 'outside address' textbox. -->
							<?php if($_SESSION['address'] == '') { ?>
								<td><?php echo $_SESSION['purokstreet']; ?>,  <?php echo $_SESSION['barangay']; ?>, <?php echo $_SESSION['municipality']; ?>, Camarines Norte</td>
							<?php } else { ?>
								<td><?php echo $_SESSION['address']; ?> </td>
							<?php } ?>
						</tr>
					</table>
				</div>
			</section>
			
			<section class="panel panel-primary" id="verifyFamilyBackground">
				<div class="panel-heading">
				Family Background
				</div>	
				<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<td>Father's Name:</td>
							<td> <?php echo $_SESSION['fathername']; ?></td>
						</tr>
						<tr>
							<td>Father's Occupation:</td>
							<td> <?php echo $_SESSION['fatheroccupation']; ?></td>
						</tr>
						<tr>
							<td>Mother's Name:</td>
							<td> <?php echo $_SESSION['mothername']; ?></td>
						</tr>
						<tr>
							<td>Mother's Occupation: </td>
							<td><?php echo $_SESSION['motheroccupation']; ?> </td>
						</tr>
						<tr>
							<td>Guardian's Name:  </td>
							<td><?php echo $_SESSION['guardianname']; ?></td>
						</tr>
						<tr>
							<td>Guardian's Occupation:</td>
							<td> <?php echo $_SESSION['guardianoccupation']; ?></td>
						</tr>
						<tr>
							<td>Annual Income:</td>
							<td> <?php echo $_SESSION['annualincome']; ?>
							</td>
						</tr>
						<tr>
							<td>Male Siblings: </td>
							<td><?php echo $_SESSION['boysiblings']; ?></td>
						</tr>
						<tr>
							<td>Female Siblings:</td>
							<td><?php echo $_SESSION['girlsiblings']; ?></td>
						</tr>
					</table>
				</div>
			</section>
			
			<section class="panel panel-primary" id="verifyEducationalBackground">
				<div class="panel-heading">
				Educational Background
				</div>	
				<div class="panel-body">		
					<table class="table table-striped">
						<tr>
							<td>School Last Attended: </td>
							<td><?php echo $_SESSION['school']; ?> </td>
						</tr>
						<tr>
							<td>Current Year: </td>
							<td><?php echo $_SESSION['startyear']; ?> </td>
						</tr>
						<tr>
							<td>Enrollment Year: </td>
							<td><?php echo $_SESSION['currentyear']; ?> </td>
						</tr>
						<tr>
							<td>GWA: </td>
							<td><?php echo $_SESSION['gwa']; ?>% </td>
						</tr>
						<tr>
							<td>Scholarship Type: </td>
							<td><?php echo $_SESSION['scholarshiptype']; ?> </td>
						</tr>
						<tr>
							<td>Scholarship Acquired Through: </td>
							<td><?php echo $_SESSION['scholarshipacquiredthru']; ?> </td>
					</table>
				</div>
			</section>
			
			<section style="padding-left:530px;margin-bottom:50px;">
				
				<a href = "javascript:history.back()" type="button" class="btn btn-danger" >Errors? Go back.</a>
				<a href="success.php" onclick="return confirm('Please click OK to continue.');" type="button" class="btn btn-primary" > Submit and Generate Slip </a>	

			</section>
		<?php } ?>
	
	</section>
	
	<footer style="bottom: 0;position: fixed; width:20in ">
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