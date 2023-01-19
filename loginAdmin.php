<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ohbs');

$uname=$_POST['uname'];
$password=$_POST['password'];

$s="select * from admin where uname='$uname' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	$n=mysqli_query($con,"select * from admin where uname='$uname' && password='$password'");
	$row=mysqli_fetch_assoc($n);
	$nnn=$row['uname'];
	$_SESSION['uname']=$nnn;
	header('location:admin.php');
}
else{
	echo "Yor are Not Register";
	header('location:LoginA.php');
}
?>