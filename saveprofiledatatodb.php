<?php 
	/*Defaults
	* $host = "localhost"
	* $username = "root";
	* $password = "";
	* $db = "profiling_db";	
	*/

	$host = "localhost";
	$username = "root";
	$password = "vem515";
	$db = "profiling_db";

	$con = mysqli_connect($host, $username, $password, $db);
	if(mysqli_connect_error()) echo "Connection Fail";

	//Removes tags that slipped through earlier sanitation. (See storeprofileformdata.php)
	$fname = mysqli_real_escape_string($con, $_SESSION['firstname']); 
	$mname = mysqli_real_escape_string($con, $_SESSION['middlename']); 
	$lname = mysqli_real_escape_string($con, $_SESSION['lastname']); 
	$contact = mysqli_real_escape_string($con, $_SESSION['contact']); 
	$gender = mysqli_real_escape_string($con, $_SESSION['gender']); 
	$cstatus = mysqli_real_escape_string($con, $_SESSION['civilstatus']); 
	$bday = mysqli_real_escape_string($con, $_SESSION['birthdate']); 
	$bplace = mysqli_real_escape_string($con, $_SESSION['birthplace']); 
	$height = mysqli_real_escape_string($con, (($_SESSION['height'])/100));
	$weight = mysqli_real_escape_string($con, $_SESSION['weight']); 
	$father	= mysqli_real_escape_string($con, $_SESSION['fathername']); 
	$foccupation = mysqli_real_escape_string($con, $_SESSION['fatheroccupation']); 		
	$mother = mysqli_real_escape_string($con, $_SESSION['mothername']); 
	$moccupation = mysqli_real_escape_string($con, $_SESSION['motheroccupation']); 
	$guardian = mysqli_real_escape_string($con, $_SESSION['guardianname']); 
	$goccupation = mysqli_real_escape_string($con, $_SESSION['guardianoccupation']);
	$sboys = mysqli_real_escape_string($con, $_SESSION['boysiblings']); 
	$sgirls = mysqli_real_escape_string($con, $_SESSION['girlsiblings']); 
	$purok = mysqli_real_escape_string($con, $_SESSION['purokstreet']); 
	$brgy = mysqli_real_escape_string($con, $_SESSION['barangay']); 
	$municipality = mysqli_real_escape_string($con, $_SESSION['municipality']);
	$address = mysqli_real_escape_string($con, $_SESSION['address']);
	$income = mysqli_real_escape_string($con, $_SESSION['annualincome']);
	$school = mysqli_real_escape_string($con, $_SESSION['school']);
	$start = mysqli_real_escape_string($con, $_SESSION['startyear']);
	$current = mysqli_real_escape_string($con, $_SESSION['currentyear']); 
	$gwa = mysqli_real_escape_string($con, $_SESSION['gwa']); 
	$type = mysqli_real_escape_string($con, $_SESSION['scholarshiptype']); 
	$thru = mysqli_real_escape_string($con, $_SESSION['scholarshipacquiredthru']); 
	$status = mysqli_real_escape_string($con, $_SESSION['scholarshipstatus']); 
	$remarks = mysqli_real_escape_string($con, $_SESSION['remarks']); 

	$sql = "INSERT INTO profile VALUES (null,
										now(),
										'$fname', 
										'$mname',
										'$lname',
										'$contact',
										'$gender',
										'$cstatus',
										'$bday',
										'$bplace',
										'$height',
										'$weight',
										'$father',
										'$foccupation',
										'$mother',
										'$moccupation',
										'$guardian',
										'$goccupation',
										'$sboys',
										'$sgirls',
										'$purok',
										'$brgy',
										'$municipality',
										'$address',
										'$income',
										'$school',
										'$start',
										'$current',
										'$gwa',
										'$type',
										'$thru',
										'$status',
										'$remarks'
										)";
										
	if (!$sql) {
		die('Invalid query: ' . mysql_error());
	}

	mysqli_query($con, $sql);
	
	//Adds a session variable that contains the latest application id.
	$_SESSION['application_id'] = mysqli_insert_id($con);
	
	mysqli_close($con);	
?>

<!-- 
- Profiling system: saveprofiledatatodb.php
- Author: Howell Lance B. Reyes
- Date last updated: 7/12/15
 -->