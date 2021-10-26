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
<?php 
$conn = mysqli_connect("localhost","root","","employee1");

$delete_record = $_GET['del'];
$query = "delete from user_registration where Employee_ID = '$delete_record'";
if(mysqli_query($conn,$query))
{
	echo"Data has been deleted successfully";
}
else
{
	echo"Data has not been deleted successfully";
}
?>
</div>

<div id="footer">
</div>
</body>
</html>