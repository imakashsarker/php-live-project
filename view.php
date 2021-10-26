<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css"/>
<title>
home
</title>
</head>
<body>
<div id="header"> Student Management system </div>

<div id="content">
<p class="top_nav">
<a href="home.php">Home</a>&nbsp;|&nbsp;<a href="registration.php">New Student Registration</a>&nbsp;|&nbsp;<a href="view.php">Show All Student Records</a>&nbsp;|&nbsp;<a href="search.php">Search any data</a>&nbsp;|&nbsp;<a href="logout.php">Logout</a>
</p>
<table align="center" border="1">
<tr>
<td colspan="20" align="center" bgcolor="green">
<p style="color:white">Viewing all records</p>
</td>
</tr>
<tr>
<th>Student ID</th>
<th>Student Name</th>
<th>Student's Father Name</th>
<th>Student's Mother Name</th>
<th>E-mail</th>
<th>Contact Number</th>
<th>Gender</th>
<th>Address</th>
<th>Qualification</th>
<th>Designation</th>
<th>Salary</th>
<th>Delete</th>
<th>Edit</th>
<th>Details</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","employee1");
$que="select * from user_registration";
$run=mysqli_query($conn,$que);
while($row=mysqli_fetch_array($run))
{
	     $Employee_id = $row['Employee_ID'];
	     $Employee_name = $row['Employee_Name'];
		 $father_name = $row['Father_Name'];
		 $mother_name = $row['Mother_Name'];
		 $email = $row['E_mail'];
		 $Contact_number = $row['Contact_Number'];
		 $Gender = $row['Gender'];
	     $Address = $row['Address'];
		 $Qualification =$row['Qualification'];
		 $Designation = $row['Designation'];
		 $salary = $row['Salary'];
		 
		 ?>
		  <tr align='center'>
<td><?php echo $Employee_id; ?></td>
<td><?php echo $Employee_name; ?></td>
<td><?php echo $father_name; ?></td>
<td><?php echo $mother_name; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $Contact_number; ?></td>
<td><?php echo $Gender; ?></td>
<td><?php echo $Address; ?></td>
<td><?php echo $Qualification; ?></td>
<td><?php echo $Designation; ?></td>
<td><?php echo $salary; ?></td>
<td><a href='delete.php?del=<?php echo $Employee_id;  ?>'><img src="icons/delete.png" height=15px;></i></p></a></td>
<td><a href='edit.php?edit=<?php echo $Employee_id; ?>'><img src="icons/edit.png" height=15px;></a> </td>
<td><a href='details.php?details=<?php echo $Employee_id; ?>'><img src="icons/details.png" height=15px;></a> </td>
</tr>
<?php } ?>	
</table>
</div>
<div id="footer"> <p align="center" style="color:white">Saic Polytechnic
M/3, Mirpur-14, Dhaka-1216</p>
</div>
</body>
</html>