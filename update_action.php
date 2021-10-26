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
	  
if(isset($_POST['updated'])){
	$edit_record1 = $_GET['edit_form'];
	$Employee_id = $_POST['id2'];
    $Employee_name = $_POST['emp_name2'];
		 $father_name = $_POST['father_name2'];
		 $mother_name = $_POST['mother_name2'];
		 $email = $_POST['E-mail'];
		 $Contact_number = $_POST['contact_number2'];
		 $Gender = $_POST['employee_gender2'];
	     $Address = $_POST['address2'];
		 $Qualification = $_POST['qualification2'];
		 $Designation = $_POST['designation2'];
		 $salary = $_POST['salary2'];
	

$update= "update user_registration set	Employee_ID='$Employee_id',
Employee_Name= '$Employee_name',Father_Name= '$father_name',Mother_Name= '$mother_name',E_mail= '$email',
Contact_Number= '$Contact_number',Gender= '$email',Address='$Address',Qualification='$Qualification',Designation='$Designation',
Salary='$salary' where Employee_ID= '$edit_record1'";
}
if(mysqli_query($conn,$update))
{
echo "Record has been 
updated successfully";
}
else
{
	echo "$email";
	
}
?>
</div>
<div id="footer"> <p align="center" style="color:white">Saic Polytechnic
M/3, Mirpur-14, Dhaka-1216</p>
</div>
</body>
</html>