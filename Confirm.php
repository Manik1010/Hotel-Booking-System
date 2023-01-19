<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ohbs');

$hotel=$_POST['hotel'];
$room=$_POST['room'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$payment=$_POST['payment'];
$transaction=$_POST['transaction'];
$amount=$_POST['amount'];
$check_in=$_POST['check_in'];
$check_out=$_POST['check_out'];

$s="select * from booking";
$result=mysqli_query($con,$s);
$rr="insert into booking(hotel,room,name,email,mobile,payment,transaction,amount,check_in,check_out) values ('$hotel','$room','$name','$email','$mobile','$payment','$transaction','$amount','$check_in','$check_out')";
mysqli_query($con,$rr);
echo "<br>";
echo "<h1><center>Your Booking Successfully</center></h1>";

?>