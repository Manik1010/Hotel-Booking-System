<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ohbs');

$fname = $_POST['fname'];
$lname =$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
echo $fname;
echo $lname;
echo $email;
echo $password;
echo $cpassword;
// die();

$sql = "INSERT INTO user values('$fname' ,'$lname', '$email','$password', '$cpassword')";
// die();

mysqli_query($con,$sql);

header('Location: Login&Reg.php');
?>