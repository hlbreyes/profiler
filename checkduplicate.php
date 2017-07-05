<?php	
	//Check if applicant name, birthday, and parent's name is already in the list.

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

	$fname = $_SESSION['firstname'];
	$lname = $_SESSION['lastname'];
	$bday = $_SESSION['birthdate'];
	$father = $_SESSION['fathername'];
	$mother = $_SESSION['mothername'];	
	
	$query = mysqli_query($con, "SELECT * FROM profile WHERE FirstName='$fname' AND 
															LastName='$lname' AND 
															Birthdate='$bday' AND 
															FatherName='$father' AND 
															MotherName='$mother'");
							
	//Sets a boolean variable named $duplicate to 'true' if duplicate is found.
	if (!($query) || mysqli_num_rows($query) == 0) $duplicate = false;
	else $duplicate = true;
	
	mysqli_close($con);
	
?>

<!-- 
- Profiling system: checkduplicate.php
- Author: Howell Lance B. Reyes
- Date last updated: 7/12/15
 -->