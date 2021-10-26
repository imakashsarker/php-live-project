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
<form action="registration_action.php" method="POST" enctype="multipart/form-data">
<table align="center" border="1" width="650">
<tr>
<th bgcolor="green" colspan='2'><p class="record">
Employee Registartion Form
</p>
</th>
</tr>

<tr>
<td align="right">Employee ID:</td>
<td align="center" width="400"><input type="text" name="emp_id" placeholder="Type Employee ID" style="width:400px">
<font color="red"><?php echo @$_GET['emp_id'];?> </font></td>
</tr>
<tr>
<td align="right">Employee Name:</td>
<td align="center" width="400"><input type="text" name="emp_name" placeholder="type Employee Name" style="width:400px">
<font color="red"><?php echo @$_GET['emp_name'];?> </font></td>
</tr>

</td>
<tr>
<td align="right">Employee's Father Name:</td>
<td align="center" width="400"><input type="text" name="father_name" placeholder="Type Empolyee's Father Name" style="width:400px">
<font color="red"><?php echo @$_GET['father_name'];?> </font></td>
</tr>

<tr>
<td align="right">Employee's Mother Name:</td>
<td align="center" width="400"><input type="text" name="mother_name" placeholder="Type Employee's Mother Name" style="width:400px">
<font color="red"><?php echo @$_GET['mother_name'];?> </font></td>
</tr>

<tr>
<td align="right">E-mail:</td>
<td align="center" width="400"><input type="text" name="e-mail" placeholder="Type Employee's E-mail" style="width:400px">
<font color="red"><?php echo @$_GET['email'];?> </font></td>
</tr>

<tr>
<td align="right">Contact Number:</td>
<td align="center" width="400"><input type="text" name="contact_number" placeholder="Type Employee's Contact Number" style="width:400px">
<font color="red"><?php echo @$_GET['contact_number'];?> </font></td>
</tr>

<tr>
<td align="right">Gender:</td>
<td>
<select name="employee_gender">
<option value="null">select gender</option>
<option value="male">male</option>
<option value="female">female</option>
</select>
<font color="red"><?php echo @$_GET['gender'];?> </font>
</td>
</tr>

<tr>
<td align="right">
Address:
</td>
<td>
<textarea name="address" cols="50" rows="4" style="width:400px">
</textarea>
<font color="red"><?php echo @$_GET['Address'];?> </font>
</td>
</tr>

<tr>
<td align="right">Qualification:</td>
<td align="center" width="400"><input type="text" name="qualification" placeholder="Type Employee's qualification" style="width:400px">
<font color="red"><?php echo @$_GET['Qualification'];?> </font></td>
</tr>
<tr>
<td align="right">Designation:</td>
<td align="center" width="400"><input type="text" name="designation" placeholder="Type Employee's designation" style="width:400px">
<font color="red"><?php echo @$_GET['salary'];?> </font></td>
</tr>

<tr>
<td align="right">Salary:</td>
<td align="center" width="400"><input type="text" name="salary" placeholder="Type Employee's salary" style="width:400px">
<font color="red"><?php echo @$_GET['emp_id'];?> </font>
</td>
</tr>
<tr>
<td><p align="right">Upload CV <p></td>
<td> 
    Select File:  
    <input type="file" name="fileToUpload"/>  
</td>	 
</tr>

<tr>
<td align="right" colspan='6'>
<input type="submit" name="submit" value="send">
</td>
</tr>
</table>
</form>
</div>
<div id="footer"> <p align="center" style="color:white">Saic Polytechnic
M/3, Mirpur-14, Dhaka-1216</p>
</div>
</body>
</html>