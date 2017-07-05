<?php
	//removes whitespace and related characters from the beginning and end of the string
	function trim_value(&$value) 
	{
		$value = trim($value);		
	} 

	if (isset($_POST['submit'])) 
	{	
		if($_POST['email'] != '' || $_POST['password'] != '') //kills session if email and password field is filled (by bots/spammers)
		{
			die("Spammer!");
		}
		else //else save the form data to session
		{
			array_filter($_POST, 'trim_value');

			//check if $_POST['variable'] is available
			/* pseudocode:
			*	if($_POST[variable] is available) {
			*		save $_POST[variable] to $variable
			*	} else {
			*		save an empty string/0
			*	}
			*/
			$purokstreet = !isset($_POST['purokstreet']) ? '' : $_POST['purokstreet'];
			$barangay = !isset($_POST['barangay']) ? '' : $_POST['barangay'];
			$address = !isset($_POST['address']) ? '' : $_POST['address'];
			$fatheroccupation = !isset($_POST['fatheroccupation']) ? '' : $_POST['fatheroccupation'];
			$motheroccupation = !isset($_POST['motheroccupation']) ? '' : $_POST['motheroccupation'];
			$guardianoccupation = !isset($_POST['guardianoccupation']) ? '' : $_POST['guardianoccupation'];
			$fatherotheroccupation = !isset($_POST['fatherotheroccupation']) ? '' : $_POST['fatherotheroccupation'];
			$motherotheroccupation = !isset($_POST['motherotheroccupation']) ? '' : $_POST['motherotheroccupation'];
			$guardianotheroccupation = !isset($_POST['guardianotheroccupation']) ? '' : $_POST['guardianotheroccupation'];			
			$annualincome = !isset($_POST['annualincome']) ? 0 : $_POST['annualincome'];
			$schoolother = !isset($_POST['schoolother']) ? '' : $_POST['schoolother'];
			$school = $_POST['school'] . '; ' . $schoolother;
			
			//strips tags and html entities (ie single and double spaces) before saving them to $_SESSION variables
			$_SESSION['firstname'] = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
			$_SESSION['middlename'] = filter_var($_POST['middlename'], FILTER_SANITIZE_STRING);
			$_SESSION['lastname'] = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
			$_SESSION['contact'] = filter_var($_POST['contact'], FILTER_SANITIZE_STRING);
			$_SESSION['gender'] = $_POST['gender']; 
			$_SESSION['civilstatus'] = filter_var($_POST['civilstatus'], FILTER_SANITIZE_STRING);
			$_SESSION['birthdate'] = date("Y-m-d", strtotime($_POST['birthdate'])); 
			$_SESSION['birthplace'] = filter_var($_POST['birthplace'], FILTER_SANITIZE_STRING);
			$_SESSION['purokstreet'] = filter_var($purokstreet, FILTER_SANITIZE_STRING);
			$_SESSION['barangay'] = filter_var($barangay, FILTER_SANITIZE_STRING);
			$_SESSION['municipality'] = filter_var($_POST['municipality'], FILTER_SANITIZE_STRING);
			$_SESSION['address'] = filter_var($address, FILTER_SANITIZE_STRING);
			$_SESSION['height'] = filter_var($_POST['height'], FILTER_SANITIZE_NUMBER_INT);
			$_SESSION['weight'] = filter_var($_POST['weight'], FILTER_SANITIZE_NUMBER_INT);
			$_SESSION['fathername'] = filter_var($_POST['fathername'], FILTER_SANITIZE_STRING);
			$_SESSION['fatheroccupation'] = filter_var($fatheroccupation, FILTER_SANITIZE_STRING);
			$_SESSION['fatheroccupation'] .= ", " . filter_var($fatherotheroccupation, FILTER_SANITIZE_STRING);
			$_SESSION['mothername'] = filter_var($_POST['mothername'], FILTER_SANITIZE_STRING);
			$_SESSION['motheroccupation'] = filter_var($motheroccupation, FILTER_SANITIZE_STRING);
			$_SESSION['motheroccupation'] .= ", " . filter_var($motherotheroccupation, FILTER_SANITIZE_STRING);
			$_SESSION['guardianname'] = filter_var($_POST['guardianname'], FILTER_SANITIZE_STRING);
			$_SESSION['guardianoccupation'] = filter_var($guardianoccupation, FILTER_SANITIZE_STRING);
			$_SESSION['guardianoccupation'] .= ", " . filter_var($guardianotheroccupation, FILTER_SANITIZE_STRING);
			$_SESSION['annualincome'] = filter_var($annualincome, FILTER_SANITIZE_STRING);
			$_SESSION['boysiblings'] = filter_var($_POST['boysiblings'], FILTER_SANITIZE_NUMBER_INT);
			$_SESSION['girlsiblings'] = filter_var($_POST['girlsiblings'], FILTER_SANITIZE_NUMBER_INT);
			$_SESSION['school'] = filter_var($school, FILTER_SANITIZE_STRING);
			$_SESSION['startyear'] = filter_var($_POST['startyear'], FILTER_SANITIZE_NUMBER_INT);
			$_SESSION['currentyear'] = filter_var($_POST['currentyear'], FILTER_SANITIZE_NUMBER_INT);
			$_SESSION['gwa'] = filter_var($_POST['gwa'], FILTER_SANITIZE_NUMBER_FLOAT);
			$_SESSION['scholarshiptype'] = $_POST['scholarshiptype']; 
			$_SESSION['scholarshipacquiredthru'] = $_POST['scholarshipacquiredthru'];
			$_SESSION['scholarshipstatus'] = 'Applicant';
			$_SESSION['remarks'] = '';
			$_SESSION['isDisqualified'] = false;
			
			//catches special remarks, sets $_SESSION['isDisqualified'] if necessary
			if ($_SESSION['fatheroccupation'] == 'Deceased' || $_SESSION['motheroccupation'] == 'Deceased') 
			{
				$_SESSION['remarks'] .= "One or both of the applicant's parents are deceased. ";
			}
			
			if ($_SESSION['scholarshipacquiredthru'] == 'Valedictorian' || 
				$_SESSION['scholarshipacquiredthru'] == 'Salutatorian' || 
				$_SESSION['scholarshipacquiredthru'] == 'First Place in Athletics' || 
				$_SESSION['scholarshipacquiredthru'] == 'First Place in Academic Competition') 
			{
				$_SESSION['remarks'] .= "The applicant graduated with honors. ";
			} 
			
			if ($_SESSION['scholarshipacquiredthru'] == 'PWD' || $_SESSION['scholarshipacquiredthru'] == 'ALS')
			{
				$_SESSION['remarks'] .= "The applicant graduated under special condition/s. ";
			} 			
			
			if ($_SESSION['annualincome'] > 120000)
			{
				$_SESSION['remarks'] .= "Applicant's annual income exceeds 120000. (DISQUALIFIED) ";
				$_SESSION['isDisqualified'] = true;
			}
			
			if ($_SESSION['fatheroccupation'] == 'Government Employee' || $_SESSION['motheroccupation'] == 'Government Employee') 
			{
				$_SESSION['remarks'] .= "One or both of the applicant's parents are a government employee. (DISQUALIFIED) ";
				$_SESSION['isDisqualified'] = true;
			}
			
			if ($_SESSION['municipality'] == 'Outside CN') 
			{
				$_SESSION['remarks'] .= "The applicant is not a CN native. (DISQUALIFIED) ";
				$_SESSION['isDisqualified'] = true;
			}

			if ($_SESSION['gwa'] < 84) 
			{
				$_SESSION['remarks'] .= "The applicant's GWA is lower than 84%. (DISQUALIFIED) ";
				$_SESSION['isDisqualified'] = true;
			}
		}
	}
?>

<!-- 
- Profiling system: storeprofileformdata.php
- Author: Howell Lance B. Reyes
- Date last updated: 7/12/15
 -->