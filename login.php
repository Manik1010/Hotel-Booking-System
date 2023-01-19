<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ohbs');

$email=$_POST['email'];
$password=$_POST['password'];
// echo $email;
// echo $password;
// die();
$s="select * from user where email='$email' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	$n=mysqli_query($con,"select * from user where email='$email' && password='$password'");
	$row=mysqli_fetch_assoc($n);
	$nnn=$row['fname'];
	$_SESSION['name']=$nnn;
	header('location:registered.php');
}
else{
	echo "Yor are Not Register";
	header('location:Login&Reg.php');
}
?>