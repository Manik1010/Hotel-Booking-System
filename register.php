
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ohbs');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$s="select * from user where email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	echo "<br>";
	echo "<h1><center>Email Address Already Taken .Try with another one</h1></center> ";
}	
else{
    $rr="insert into user(fname,lname,email,password,cpassword) values ('$fname','$lname','$email','$password','$cpassword')";
	mysqli_query($con,$rr);
	echo "<br>";
	header('location:Login&Reg.php');
	alert("Hello! I am an alert box!!");
}
?>