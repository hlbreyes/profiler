<?php
	session_start();
	require_once('storeprofileformdata.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Profile Form | PGCEAP</title>

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

	<script type="text/javascript" src="js/misc.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<style>
		body{
			background-color:#F3F3F3;
		}
		.form-control{
			background-color: #F3F3F3;
		}
		
		.requiredF{
			color: red;
		}
		
		.antispam {
			display:none;
			visibility:hidden;
		}
		
	</style>
	
</head>

<body>
	<header>
		<?php include('header.php'); ?>
	</header>
	
	<div style="text-align:center;background-color: #3881C0;width:8in;margin-left: auto; margin-right: auto;height:1in;margin-bottom:20px;">
		<h1>PGCEAP APPLICATION FORM</h1>
	</div>
	
	<section>
		<form class="form-horizontal" id="profileform" name="profile" action="verifyalldata.php" method="post" autocomplete="on" enctype="multipart/form-data">
			<div style=" margin-left: auto; margin-right: auto; width: 8in;padding-left:10px;">
				<label class="requiredF" >* </label><label style="color:black">Indicates Required Field</label>		
			</div>
		
			<div class="panel panel-primary"  style=" margin-left: auto; margin-right: auto; width: 8in;background-color: #fdfdfd">
				<div class="panel-heading">
					Basic Information 
				</div>
				<div class="panel-body">	
					<div class="form-group">						
						<div class="col-xs-4">	
							<label class="requiredF">* </label><label style="color:black">First Name</label>
							<input type="text" class = "form-control" name="firstname" placeholder="First Name" pattern="^[A-Z][a-z]*\s?[A-Z]?[a-z]?*$" required > 
						</div>
						<div class="col-xs-4">
							<label style="color:black">Middle Name</label>
							<input type="text" class = "form-control" name="middlename" pattern="^[A-Z][a-z]*\s?[A-Z]?[a-z]?*$" placeholder="Middle Name" >
						</div>
						<div class="col-xs-4">
							<label class="requiredF">* </label><label style="color:black">Last Name</label>
							<input type="text" class = "form-control" name="lastname" pattern="^[A-Z][a-z]*\s?[A-Z]?[a-z]?*$" placeholder="Last Name" required >
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-3">	
							<label class="requiredF">* </label><label style="color:black">Contact Number</label>	
							<input type="text" class = "form-control" name="contact" placeholder="09xxxxxxxxx" required>
						</div>
						<div class="col-xs-3">	
							<label class="requiredF">* </label><label style="color:black">Gender</label>	
							<select name="gender" class = "form-control" required>
								<option selected disabled value >  </option>
								<option value="Male" > Male </option>
								<option value="Female" > Female </option>
							</select>
						</div>
						<div class="col-xs-3">	
							<label class="requiredF">* </label><label style="color:black">Civil Status</label>	
							<select name="civilstatus" class = "form-control" required>
								<option selected disabled value >  </option>
								<option value="Single" > Single </option>
								<option value="Married" > Married </option>
								<option value="Widow" > Widow </option>
								<option value="Widower" > Widower </option>
								<option value="Separated" > Separated </option>
							</select>
						</div>
						<div class="col-xs-3">	
							<label class="requiredF">* </label><label style="color:black">Birthdate</label>	
							<input type="text" class = "form-control" name="birthdate"  placeholder="dd-mm-yyyy" required >
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-4">
							<label class="requiredF">* </label><label style="color:black">Birthplace</label>	
							<input type="text" class = "form-control" name="birthplace"  pattern="^[A-Z][a-z]*\s?[A-Z]?[a-z]?*$" placeholder="Place of Birth" required >
						</div>
						<div class="col-xs-4">
							<label class="requiredF">* </label><label style="color:black">Height</label>	
							<input type="number" class = "form-control" name="height"  placeholder="Height (in Centimeters)" min="100" step="0.01" required >
						</div>
						<div class="col-xs-4">
							<label class="requiredF">* </label><label style="color:black">Weight</label>	
							<input type="number" class = "form-control" name="weight"  placeholder="Weight (in Kilograms)" min="0" step="0.01" required > 
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-4">
							<label class="requiredF">* </label><label style="color:black">Municipality</label>
							<select name="municipality" class = "form-control" size="1" id="ddl1" onchange="populateDropdownList(this, document.getElementById('ddl2'))" onclick	="populateDropdownList(this, document.getElementById('ddl2'))" required>
								<option selected disabled value >  </option> 
								<option value="Basud" > Basud </option> 
								<option value="Capalonga" > Capalonga </option> 
								<option value="Daet" > Daet </option> 
								<option value="Jose Panganiban" > Jose Panganiban </option> 
								<option value="Labo" > Labo </option> 
								<option value="Mercedes" > Mercedes </option> 	
								<option value="Paracale" > Paracale </option> 
								<option value="San Lorenzo Ruiz" > San Lorenzo Ruiz </option> 
								<option value="San Vicente" > San Vicente </option> 
								<option value="Sta Elena" > Sta. Elena </option> 
								<option value="Vinzons" > Vinzons </option> 
								<option value="Outside CN" > Outside C.N. </option> 
							</select>	
						</div>
						<div class="col-xs-8">
							<div class="col-xs-14" id="address">
								<div class="col-xs-6">
									<label class="requiredF">* </label><label style="color:black">Barangay</label>
									<select name="barangay" class = "form-control" size="1" id="ddl2" required> 
										<option selected disabled value > Select a Municipality First </option> 
									</select>	
								</div>
								<div class="col-xs-6">
									<label class="requiredF">* </label><label style="color:black">Purok/ Street No</label>
									<input type="text"  class = "form-control" id="purokstreet" name="purokstreet" placeholder="Purok/Street No" required>	
								</div>
							</div>
							
						</div>
						<div class="col-xs-8" id="outsideaddress" style="display:none">
							<label class="requiredF">* </label><label style="color:black">Address (If Outside Camarines Norte)</label>
							<input type="text" class = "form-control" id="addressoutside" name="address" placeholder="Enter your address." required>
						</div>
					</div>
				</div>
			</div>
						
			<div class="panel panel-primary" style=" margin-left: auto; margin-right: auto; width: 8in;background-color: #fdfdfd">
				<div class="panel-heading">
					Family Background
				</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-xs-4">
							<label style="color:black">Father's Name</label>
							<input type="text" class = "form-control" name="fathername" placeholder="Father's Name" >
						</div>
						<div class="col-xs-4">
							<label style="color:black">Occupation</label>
							<select name="fatheroccupation" id="foccu" onclick="checkOther(this, document.getElementById('fother'))" onchange="checkOther(this, document.getElementById('fother'))" class = "form-control" >
								<option selected disabled value > Choose One </option> 
								<option value="Unemployed" > UNEMPLOYED </option> 
								<option value="Deceased" > DECEASED </option> 
								<option value="Automechanic" > Automechanic</option> 
								<option value="Bus Driver" > Bus Driver </option> 
								<option value="Businessman" > Businessman </option> 
								<option value="Carpenter" > Carpenter </option> 
								<option value="Carwasher" > Carwasher </option> 
								<option value="Clerk" > Clerk </option> 	
								<option value="Coconut Farmer" > Coconut Farmer </option> 
								<option value="Company Driver" > Company Driver </option> 
								<option value="Computer Technician" > Computer Technician </option> 
								<option value="Dressmaker" > Dressmaker </option> 
								<option value="Electrician" > Electrician </option> 
								<option value="Electronic Technician" > Electronic Technician </option> 
								<option value="Family Driver" > Family Driver </option>
								<option value="Farmer" > Farmer </option> 
								<option value="Fisherman" > Fisherman </option> 
								<option value="Fish Vendor" > Fish Vendor </option> 
								<option value="Government Employee" > Government Employee </option> 
								<option value="Heavy Equipment Operator" > Heavy Equipment Operator </option> 
								<option value="Housekeeper" > Housekeeper </option> 
								<option value="Jeepney Driver" > Jeepney </option> 
								<option value="Laborer" > Laborer </option> 	
								<option value="Mason" > Mason </option> 
								<option value="Mechanic" > Mechanic </option> 
								<option value="Painter" > Painter </option> 
								<option value="Repairman" > Repairman </option> 
								<option value="Rice Farmer" > Rice Farmer </option> 
								<option value="Salesman" > Salesman </option> 
								<option value="Tailor" > Tailor </option> 	
								<option value="Tricycle Driver" > Tricycle </option> 
								<option value="Utility Worker" > Utility </option> 
								<option value="Vendor" > Vendor </option>
								<option value="Other" > Other </option>
							</select>
						</div>
						<div class="col-xs-4">
							<label style="color:black">Other Occupation/s</label>
							<input type="text" id="fother" class = "form-control" name="fatherotheroccupation" placeholder="Other Occupation" title="Separate each occupation them by comma ( , )" disabled="true">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-4">
							<label style="color:black">Mother's Name</label>
							<input type="text" class = "form-control" name="mothername" placeholder="Mother's Name" >
						</div>
						<div class="col-xs-4">
							<label style="color:black">Occupation</label>
							<select name="motheroccupation" id="moccu"  class = "form-control" onclick="checkOther(this, document.getElementById('mother'))" onchange="checkOther(this, document.getElementById('mother'))" class = "form-control" >
								<option selected disabled value > Choose One </option> 
								<option value="Unemployed" > UNEMPLOYED </option> 
								<option value="Deceased" > DECEASED </option> 
								<option value="Automechanic" > Automechanic</option> 
								<option value="Bus Driver" > Bus Driver </option> 
								<option value="Businessman" > Businessman </option> 
								<option value="Carpenter" > Carpenter </option> 
								<option value="Carwasher" > Carwasher </option> 
								<option value="Clerk" > Clerk </option> 	
								<option value="Coconut Farmer" > Coconut Farmer </option> 
								<option value="Company Driver" > Company Driver </option> 
								<option value="Computer Technician" > Computer Technician </option> 
								<option value="Dressmaker" > Dressmaker </option> 
								<option value="Electrician" > Electrician </option> 
								<option value="Electronic Technician" > Electronic Technician </option> 
								<option value="Family Driver" > Family Driver </option> 	
								<option value="Farmer" > Farmer </option> 
								<option value="Fisherman" > Fisherman </option> 
								<option value="Fish Vendor" > Fish Vendor </option> 
								<option value="Government Employee" > Government Employee </option> 
								<option value="Heavy Equipment Operator" > Heavy Equipment Operator </option> 
								<option value="Housekeeper" > Housekeeper </option> 
								<option value="Jeepney Driver" > Jeepney </option> 
								<option value="Laborer" > Laborer </option> 	
								<option value="Mason" > Mason </option> 
								<option value="Mechanic" > Mechanic </option> 
								<option value="Painter" > Painter </option> 
								<option value="Repairman" > Repairman </option> 
								<option value="Rice Farmer" > Rice Farmer </option> 
								<option value="Salesman" > Salesman </option> 
								<option value="Tailor" > Tailor </option> 	
								<option value="Tricycle Driver" > Tricycle </option> 
								<option value="Utility Worker" > Utility </option> 
								<option value="Vendor" > Vendor </option> 
								<option value="Other" > Other </option>
							</select>
						</div>
						<div class="col-xs-4">
							<label style="color:black">Other Occupation/s</label>
							<input type="text" id="mother" class = "form-control" name="motherotheroccupation" placeholder="Other Occupation" title="Separate each occupation them by comma ( , )" disabled="true">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-4">
							<label class="requiredF">* </label><label style="color:black">Guardian</label>
							<input type="text" class = "form-control" name="guardianname" placeholder="Guardian's Name" required >
						</div>
						<div class="col-xs-4">
							<label class="requiredF">* </label><label style="color:black">Occupation</label>
							<select name="guardianoccupation" id="goccu" onclick="checkOther(this, document.getElementById('gother'))" onchange="checkOther(this, document.getElementById('gother'))" class = "form-control" required>
								<option selected disabled value > Choose One </option> 
								<option value="Unemployed" > UNEMPLOYED </option> 
								<option value="Automechanic" > Automechanic</option> 
								<option value="Bus Driver" > Bus Driver </option> 
								<option value="Businessman" > Businessman </option> 
								<option value="Carpenter" > Carpenter </option> 
								<option value="Carwasher" > Carwasher </option> 
								<option value="Clerk" > Clerk </option> 	
								<option value="Coconut Farmer" > Coconut Farmer </option> 
								<option value="Company Driver" > Company Driver </option> 
								<option value="Computer Technician" > Computer Technician </option> 
								<option value="Dressmaker" > Dressmaker </option> 
								<option value="Electrician" > Electrician </option> 
								<option value="Electronic Technician" > Electronic Technician </option> 
								<option value="Family Driver" > Family Driver </option> 	
								<option value="Farmer" > Farmer </option> 
								<option value="Fisherman" > Fisherman </option> 
								<option value="Fish Vendor" > Fish Vendor </option> 
								<option value="Government Employee" > Government Employee </option> 
								<option value="Heavy Equipment Operator" > Heavy Equipment Operator </option> 
								<option value="Housekeeper" > Housekeeper </option> 
								<option value="Jeepney Driver" > Jeepney </option> 
								<option value="Laborer" > Laborer </option> 	
								<option value="Mason" > Mason </option> 
								<option value="Mechanic" > Mechanic </option> 
								<option value="Painter" > Painter </option> 
								<option value="Repairman" > Repairman </option> 
								<option value="Rice Farmer" > Rice Farmer </option> 
								<option value="Salesman" > Salesman </option> 
								<option value="Tailor" > Tailor </option> 	
								<option value="Tricycle Driver" > Tricycle </option> 
								<option value="Utility Worker" > Utility </option> 
								<option value="Vendor" > Vendor </option>
								<option value="Other" > Other </option>
							</select>
						</div>
						<div class="col-xs-4">
							<label style="color:black">Other Occupation/s</label>
							<input type="text" id="gother" class = "form-control" name="guardianotheroccupation" placeholder="Other Occupation" title="Separate each occupation them by comma ( , )" disabled="true">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-3" id="annual" >
							<label class="requiredF">* </label><label style="color:black; font-size:10">Annual Income</label>	
							<input type="number" id="aincome" class = "form-control" name="annualincome" placeholder="0" min="0" step="0.01" title="May be estimated." required >
						</div>
						<div class="col-xs-3"></div> 
						<div class="col-xs-3">
							<label class="requiredF">* </label><label style="color:black">No. of Male Siblings</label>	
							<input type="number" class = "form-control" name="boysiblings"  placeholder="0" min="0" required >
						</div>
						<div class="col-xs-3">		
							<label class="requiredF">* </label><label style="color:black">No. of Female Siblings</label>	
							<input type="number" class = "form-control" name="girlsiblings"  placeholder="0" min="0" required > 
						</div>
					</div>
				</div>
			</div>
						
			<div class="panel panel-primary"  style=" margin-left: auto; margin-right: auto; width: 8in;background-color: #fdfdfd">
				<div class="panel-heading">
					Educational Background
				</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-xs-6">
							<label class="requiredF">* </label><label style="color:black">School Last Attended</label>
							<select name="school" class = "form-control" size="1" id="sddl" onclick="checkOther(this, document.getElementById('sother'))" onchange="checkOther(this, document.getElementById('sother'))" required> 
								<option selected disabled value > Select One </option> 
							</select>
						</div>
						<div class="col-xs-6">
							<label style="color:black">School Last Attended</label>
							<input type="text" id="sother" class = "form-control" name="schoolother" placeholder="School" disabled="true">
						</div>						
						<div class="col-xs-3">
							<label class="requiredF">* </label><label style="color:black">Current Year</label>
							<input type="number" id="start" class = "form-control" name="startyear" placeholder="Start Year" min="0" max="5" required title="Select 0 if you are an incoming freshman">
						</div>
						<div class="col-xs-3">
							<label class="requiredF">* </label><label style="color:black">Enrollment Year</label>
							<input type="number" id="current" onchange="checkYear(document.getElementById('start'), this)" class = "form-control" name="currentyear" placeholder="Current Year" min="1" max="5" required title="Select 1 if you are an incoming freshman">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-xs-3">
							<label class="requiredF">* </label><label style="color:black">GWA (Percentage)</label>
							<input type="number" class = "form-control" name="gwa" placeholder="GWA (Percentage)" min="75" max="100" step="0.01" required >
						</div>
						<div class="col-xs-4">
							<label class="requiredF">* </label><label style="color:black">Type of Scholarship</label>
							<select name="scholarshiptype" class = "form-control" required>
								<option selected disabled value >  </option> 
								<option value="Tertiary" > Tertiary </option> 
								<option value="Secondary" > Secondary </option> 
							</select>
						</div>
						<div class="col-xs-5">
							<label class="requiredF">* </label><label style="color:black">Scholarship Acquired Through</label>
							<select name="scholarshipacquiredthru" class = "form-control" required >
								<option selected disabled value >  </option> 
								<option value="Examination" > Examination </option> 
								<option value="Valedictorian" > Valedictorian </option> 
								<option value="Salutatorian" > Salutatorian </option> 
								<option value="First Place in Athletics" > First Place in Athletics </option> 
								<option value="First Place in Academic Competition" > First Place in Academic Competition </option> 
								<option value="PWD" > Person with Disability </option> 	
								<option value="ALS" > ALS </option> 
							</select>
						</div>
					</div>
				</div>
			</div>
			
			<!-- file upload to be implemented later -->
			<div class="panel panel-primary"  style=" display: none; margin-left: auto; margin-right: auto; width: 8in;background-color: #fdfdfd">
				<div class="panel-heading">
					Upload Picture
				</div>
				<div style="text-align:center;padding-top:10px">
					Picture must be in jpeg or png format.
				</div>
				<div class="panel-body">
					<div class="form-group" style="margin-left:280px">
						 <input type="file" name="fileToUpload" id="fileToUpload">
					</div>
				</div>
			</div>
			
			<!-- Hidden fields used to catch bots. Labels are for those who access the site on a mobile device. -->
			<div class="antispam">
				Please, leave this field blank: <input type="text" name="email" autocomplete="off" /> 
				Please, leave this field blank too: <input type="text" name="password" autocomplete="off" /> 
			</div>
			
			<div class="row" style="margin-left: auto; margin-right: auto; margin-bottom:30px;width:8in">
				<div class="col-xs-3" style="float:right;margin-left: auto; margin-right: auto;">
					<input class="btn btn-danger"  type="reset" value="RESET" >
					<input class="btn btn-primary" type="submit" value="SUBMIT" name="submit" onsubmit="checkYear(document.getElementById('start'), document.getElementById('current'))">
				</div>
			</div>
	</form>		
	</section>
	
	<footer>
		<?php include('footer.php'); ?>	
	</footer>
</body>

</html>

<!-- 
- Profiling system: profileform.php
- Author: Howell Lance B. Reyes
- Author: Rheymark Q. Casero
- Date last updated: 7/12/15
 -->