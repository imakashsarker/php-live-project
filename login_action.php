<?php
$conn = mysqli_connect("localhost","root","","employee1");
if (!$conn){
echo"database connection failed";
}	
if(isset($_POST['submit'])){
	
	$user_name = $_POST['user_login'];
	$password = $_POST['password'];
$sql = "select * from user_login where user_name = '$user_name' and password = '$password'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);

   if($count==1){
	   
	   echo "<script>window.open('home.php?class=login successfull!','_self')</script>";
		
   }
   else{
	   echo "<script>alert('Password or Username is incorrect ! ')</script>";
   }

}
?>