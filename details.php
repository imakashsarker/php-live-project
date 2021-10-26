<?php
$conn = mysqli_connect("localhost","root","","employee1");

$edit_record = $_GET['details'];
$query = "SELECT * FROM user_registration WHERE Employee_ID ='$edit_record'";

$run = mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($run))
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
}
?>
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
<form>
<table align="center" border="1" width="650">
<tr>
<th bgcolor="green" colspan='2'><p class="record">
Employee Registartion Form
</p>
</th>
</tr>

<tr>
<td align="right">Employee ID:</td>
<td align="center" width="400"><input type="text" name="emp_name2" value='<?php echo  $Employee_id; ?>' style="width:400px"></td>
</tr>

<tr>
<td align="right">Employee Name:</td>
<td align="center" width="400"><input type="text" name="emp_name2" value='<?php echo  $Employee_name; ?>' style="width:400px"></td>
</tr>

<tr>
<td align="right">Employee's Father Name:</td>
<td align="center" width="400"><input type="text" name="father_name2" value='<?php echo  $father_name; ?>' style="width:400px"></td>
</tr>

<tr>
<td align="right">Employee's Mother Name:</td>
<td align="center" width="400"><input type="text" name="mother_name2" value='<?php echo  $mother_name; ?>' style="width:400px"></td>
</tr>

<tr>
<td align="right">E-mail:</td>
<td align="center" width="400"><input type="text" name="E-mail" value='<?php echo $email; ?>' style="width:400px"></td>
</tr>

<tr>
<td align="right">Contact Number:</td>
<td align="center" width="400"><input type="text" name="contact_number2" value='<?php echo  $Contact_number; ?>' style="width:400px"></td>
</tr>

<tr>
<td align="right">Gender:</td>
<td>
<select name="employee_gender2">
<option value='<?php echo $Gender; ?>'><?php echo $Gender; ?></option>
<option value="male">male</option>
<option value="female">female</option>
</select>
</td>
</tr>

<tr>
<td align="right">
Address:
</td>
<td>
<textarea name="address2" cols="50" rows="4" style="width:400px"><?php echo $Address; ?>
</textarea>
</td>
</tr>

<tr>
<td align="right">Qualification:</td>
<td align="center" width="400"><input type="text" name="qualification2" value='<?php echo $Qualification; ?>' style="width:400px"></td>

</tr>
<tr>
<td align="right">Designation:</td>
<td align="center" width="400"><input type="text" name="designation2" value='<?php echo $Designation; ?>' style="width:400px">
</td>
</tr>

<tr>
<td align="right">Salary:</td>
<td align="center" width="400"><input type="text" name="salary2" value='<?php echo $salary; ?>' style="width:400px">
</td>
</tr>

<tr>

      <td colspan="5" align="right">  <button onclick="window.print();">Print</button><td>
      
</tr>
</table>

</form>
</div>
<div id="footer">
</div>
</body>
</html>