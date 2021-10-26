<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css"/>
<title>
home
</title>
</head>
<body>
<div id="header"> Employee Management system </div>

<div id="content">
<p class="top_nav">
<a href="home.php">Home</a>&nbsp;|&nbsp;<a href="registration.php">New Employee Registration</a>&nbsp;|&nbsp;<a href="view.php">Show All Employee Records</a>&nbsp;|&nbsp;<a href="search.php">Search any data</a>&nbsp;|&nbsp;<a href="logout.php">Logout</a>
</p>

<?php
$conn = mysqli_connect("localhost","root","","employee1");

if(isset($_POST['submit'])){
	
	     $Employee_id = $_POST['emp_id'];
	     $Employee_name = $_POST['emp_name'];
		 $father_name = $_POST['father_name'];
		 $mother_name = $_POST['mother_name'];
		 $email = $_POST['e-mail'];
		 $Contact_number = $_POST['contact_number'];
		 $Gender = $_POST['employee_gender'];
	     $Address = $_POST['address'];
		 $Qualification = $_POST['qualification'];
		 $Designation = $_POST['designation'];
		 $salary = $_POST['salary'];
		
if($Employee_id==''){
	echo
"<script>window.open('registration.php?emp_id=id is required','_self')</script>";
exit();
}


if($Employee_name==''){
	echo
"<script>window.open('registration.php?emp_name=Name is required','_self')</script>";
exit();
}

if($father_name==''){
	echo
"<script>window.open('registration.php?father_name=father_name is required','_self')</script>";
exit();
}

if($mother_name==''){
	echo
"<script>window.open('registration.php?mother_name=mother_name is required','_self')</script>";
exit();
}
if(  $email==''){
	echo
"<script>window.open('registration.php?email=email is required','_self')</script>";
exit();
}

if( $Contact_number==''){
	echo
"<script>window.open('registration.php?contact_number=contact_number is required','_self')</script>";
exit();
}

if( $Gender==''){
	echo
"<script>window.open('registration.php?gender=gender is required','_self')</script>";
exit();
}

if( $Address==''){
	echo
"<script>window.open('registration.php?Address=Address is required','_self')</script>";
exit();
}


if( $Address==''){
	echo
"<script>window.open('registration.php?Address=Address is required','_self')</script>";
exit();
}

if( $Qualification==''){
	echo
"<script>window.open('registration.php?Qualification=qualification is required','_self')</script>";
exit();
}

if( $salary==''){
	echo
"<script>window.open('registration.php?salary=salary is required','_self')</script>";
exit();
}


		$que = "INSERT INTO user_registration (`Employee_ID`, `Employee_Name`, `Father_Name`, `Mother_Name`, `E_mail`, `Contact_Number`, `Gender`, `Address`, `Qualification`, `Designation`, `Salary`)values('
$Employee_id','$Employee_name','$father_name','$mother_name','$email','$Contact_number','$Gender','$Address','$Qualification','$Designation','$salary')";
if(mysqli_query($conn,$que)){

echo"data has been inserted<br>";
}
else
{
echo"data has not been inserted";	
}

}

mysqli_close($conn);
?>
<?php  
$target_path = "F:\uploads/";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "cv uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  
?>
</div>

<div id="footer"> <p align="center" style="color:white">Saic Polytechnic
M/3, Mirpur-14, Dhaka-1216</p>
</div>
</body>
</html>