


<?php
    session_start();
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'ohbs');


	$email=$_GET['rn'];
	$query="delete from user where email='$email'";
	$data=mysqli_query($con,$query);
	if($data){
	echo "<br>";
	echo "<h1><center>Record Deleted Form Database</h1></center>";
	}
	else{
	echo "<br>";
	echo "<h1><center>Failed to delete</h1></center>";
	}
	?>