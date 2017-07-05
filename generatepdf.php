<?php
	session_start();	
	require('fpdf/fpdf.php');
	
	//Used for testing purposes 
	/* 
	$_SESSION['application_id'] = "TESTING";
	$_SESSION['firstname'] = "TESTING";
	$_SESSION['middlename'] = "TESTING";
	$_SESSION['lastname'] = "TESTING";
	$_SESSION['contact'] = "TESTING";
	$_SESSION['gender'] = "TESTING";
	$_SESSION['civilstatus'] = "TESTING";
	$_SESSION['birthdate'] = date("F j\, Y", strtotime('08-01-1995'));
	$_SESSION['birthplace'] = "TESTING";
	$_SESSION['purokstreet'] = "TESTING";
	$_SESSION['barangay'] = "TESTING";
	$_SESSION['municipality'] = "TESTING";
	$_SESSION['address'] = "TESTING";		
	$_SESSION['height'] = 100;
	$_SESSION['weight'] = 100;

	$_SESSION['fathername'] = "TESTING";
	$_SESSION['fatheroccupation'] = "TESTING";
	$_SESSION['fatherincome'] = "TESTING";	
	$_SESSION['mothername'] = "TESTING";
	$_SESSION['motheroccupation'] = "TESTING";
	$_SESSION['motherincome'] = "TESTING";
	$_SESSION['guardianname'] = "TESTING";
	$_SESSION['guardianoccupation'] = "TESTING";
	$_SESSION['annualincome'] = 100;
	$_SESSION['boysiblings'] = 0;
	$_SESSION['girlsiblings'] = 0;

	$_SESSION['school'] = "TESTING";
	$_SESSION['startyear'] = 0;
	$_SESSION['currentyear'] = 0;
	$_SESSION['gwa'] = 100;		
	$_SESSION['scholarshiptype'] = "TESTING";
	$_SESSION['scholarshipacquiredthru'] = "TESTING";
	$_SESSION['scholarshipstatus'] = 'Applicant';

	$_SESSION['isDisqualified'] = true;
	*/
	
	$application_number = 'Application Number: ' . $_SESSION['application_id'];
	$application_name = 'Name: ' . $_SESSION['firstname'] . ' ' . $_SESSION['middlename'] . ' ' . $_SESSION['lastname'];
	$application_bday = 'Birthday(Y-m-d)/Birthplace: ' . $_SESSION['birthdate'] . '/' . $_SESSION['birthplace'];	
	$application_gender = 'Gender: ' . $_SESSION['gender'];
	$application_cs = 'Civil Status: ' . $_SESSION['civilstatus'];
	$application_height = 'Height: ' . $_SESSION['height']/100 . ' meters' . ' (' . $_SESSION['height'] . ' centimeters)';
	$application_weight = 'Weight: ' . $_SESSION['weight'];
	$application_address1 = 'Address: ' . $_SESSION['purokstreet'] . ', ' . $_SESSION['barangay'] . ', ' . $_SESSION['municipality'] . ', Camarines Norte, Philippines ' ;	
	$application_address2 = 'Address (If outside C.N.): ' . $_SESSION['address'];
	$application_contact = 'Contact number/s: ' . $_SESSION['contact'];

	$application_father = "Father's Name: " . $_SESSION['fathername'];
	$application_foccu = "Father's Occupation: " . $_SESSION['fatheroccupation'];
	$application_mother = "Mother's Name: " . $_SESSION['mothername'];
	$application_moccu = "Mother's Occupation: " . $_SESSION['motheroccupation'];
	$application_guardian = "Guardian's Name: " . $_SESSION['guardianname'];
	$application_goccu = "Guardian's Occupation: " . $_SESSION['guardianoccupation'];
	$application_annual = "Annual Income: " . "P" . $_SESSION['annualincome'];	
	$application_male = "Number of Male Siblings: " . $_SESSION['boysiblings'];
	$application_female = "Number of Female Siblings: " . $_SESSION['girlsiblings'];	

	$application_school = "School last attended: " . $_SESSION['school'];	
	$application_start = "Current year in school: " . $_SESSION['startyear']; //start year
	$application_enrollment = "Enrollment year when applying for scholarship: " . $_SESSION['currentyear']; //current year
	$application_gwa = "GWA: " . $_SESSION['gwa'];	
	$application_type = "Scholarship type: " . $_SESSION['scholarshiptype'];	
	$application_acquired = "Scholarship acquired through: " . $_SESSION['scholarshipacquiredthru'];	
	
	$application_remarks = $_SESSION['remarks'];
	$isDisqualified = $_SESSION['isDisqualified'];
	
	//Instantiates a new .pdf file.
	$pdf = new FPDF('P', 'pt', 'Letter');
	
	$pdf->SetAuthor("PGCEAP"); 
	$pdf->SetTitle("Application Form"); 
	$pdf->SetSubject("Application Form"); 
	$pdf->SetKeywords("PGCEAP"); 
	$pdf->SetCreator("FPDF");

	//Sets a new page and writes the string variables above.
	$pdf->AddPage();
	$pdf->SetFont('courier','',8);		
	$pdf->MultiCell(0,0, "Generated on: " . date('l jS \of F Y'));
	$pdf->MultiCell(0,30, ''); //new line 
	$pdf->Image('img/header.png');
	$pdf->SetFont('Helvetica','',12);			
	$pdf->MultiCell(0,15, ''); 	
	$pdf->MultiCell(0,15, $application_number);
	$pdf->MultiCell(0,15, ''); 	
	$pdf->MultiCell(0,15, "Applicant Information", 'B');
	$pdf->MultiCell(0,15, $application_name);
	$pdf->MultiCell(0,15, $application_bday);
	$pdf->MultiCell(0,15, $application_gender);	
	$pdf->MultiCell(0,15, $application_cs);
	$pdf->MultiCell(0,15, $application_height);
	$pdf->MultiCell(0,15, $application_weight);	
	$pdf->MultiCell(0,15, $application_address1);
	$pdf->MultiCell(0,15, $application_address2);	
	$pdf->MultiCell(0,15, $application_contact);
	$pdf->MultiCell(0,15, ''); 	
	$pdf->MultiCell(0,15, "Family Background", 'B');
	$pdf->MultiCell(0,15, $application_father);
	$pdf->MultiCell(0,15, $application_foccu);
	$pdf->MultiCell(0,15, $application_mother);
	$pdf->MultiCell(0,15, $application_moccu);
	$pdf->MultiCell(0,15, $application_guardian);
	$pdf->MultiCell(0,15, $application_goccu);	
	$pdf->MultiCell(0,15, $application_annual);	
	$pdf->MultiCell(0,15, $application_male);
	$pdf->MultiCell(0,15, $application_female);	
	$pdf->MultiCell(0,15, ''); 
	$pdf->MultiCell(0,15, "Education", 'B');
	$pdf->MultiCell(0,15, $application_school);
	$pdf->MultiCell(0,15, $application_start);
	$pdf->MultiCell(0,15, $application_enrollment);	
	$pdf->MultiCell(0,15, $application_gwa);
	$pdf->MultiCell(0,15, $application_type);
	$pdf->MultiCell(0,15, $application_acquired);
	$pdf->MultiCell(0,15, ''); 
	$pdf->SetFont('Helvetica','',14);		
	$pdf->MultiCell(0,15, 'Please present this to the examination personnel for verification of data.');
	$pdf->MultiCell(0,15, 'For any concern (e.g. mispelled name), please raise them when you present this form.');

	if($isDisqualified)
	{
		$pdf->MultiCell(0,65, '');
		$pdf->SetFont('courier','',8);		
		$pdf->MultiCell(0,0, "REMARKS CASE 2", 0,false);
	}
	else 
	{
		$pdf->MultiCell(0,65, '');
		$pdf->SetFont('courier','',8);		
		$pdf->MultiCell(0,0, "REMARKS CASE 1", 0,false);		
	}
	$pdf->Output();
?>

<!-- PDF Generator used: FPDF (http://www.fpdf.org/) -->

<!-- 
- Profiling system: generatepdf.php
- Author: Howell Lance B. Reyes
- Date last updated: 7/12/15
 -->