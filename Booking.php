<?php
	session_start();
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'ohbs');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Booking.css">
</head>
<body>
	<!------Navigation Bar------->

  <section class="header">
        <nav>
           <!-- <a href="home.html"><img src="images2/logo5.jfif" class="avatar1" ></a> -->
           <a href="index.html" class="navbar-brand">Hotel Booking System Website</a>
            <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                <li><a href="admin.php">Admin</a></li>
                <li><a href="">Add</a>
                   <div class="sub-menu">
                      <ul>
                         <li><a href="Addd_Hotel.php">Hotel</a></li>
                         <li><a href="Add_SingleRoom.php">Single room</a></li>
                         <li><a href="Add_DoubleRoom.php">Double room</a></li>
                         <li><a href="Add_TripleRoom.php">Family room</a></li>
                         <li><a href="#">Royal room</a></li>
                         <li><a href="#">President room</a></li>
                      </ul>
                   </div>
                </li>
                <li><a href="">Delete</a>
                   <div class="sub-menu">
                      <ul>
                         <li><a href="Deletehotel.php">Hotel</a></li>
                         <li><a href="D_SingleRoom.php">Single room</a></li>
                         <li><a href="D_DoubleRoom.php">Double room</a></li>
                         <li><a href="D_TripleRoom.php">Family room</a></li>
                         <li><a href="#">Royal room</a></li>
                         <li><a href="#">President room</a></li>
                      </ul>
                   </div>
                </li>
                <li><a href="User_Manegment.php">User Management</a></li>
                <li><a href="Booking.php">Booking Details</a></li>
                <li><a href="logoutAdmin.php">Logout</a></li>
              </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    </section>
<!-----------Booking Details--------------------->

	<br>

	<table class="table table-info">
    <tr class="table-dark">
    	<th>Serial Number</th>
		<th>Name</th> 
		<th>Email</th>
		<th>Mobile</th>
		<th>Payment</th>
		<th>Transaction</th>
		<th>Hotel Name</th>
		<th>Room Categories</th>
		<th>Total Amount</th>
		<th>Check-in</th>
		<th>Check-out</th>
		
</tr>

	<?php
		$qry="select * from booking";
		$result=mysqli_query($con,$qry);
		while($row=mysqli_fetch_assoc($result)){
	?>	
	<tr>
		<th><?php echo $row['serial']; ?></th> 
		<th><?php echo $row['name']; ?></th> 
		<th><?php echo $row['email']; ?></th>
		<th><?php echo $row['mobile']; ?></th>
		<th><?php echo $row['payment'];?></th>
		<th><?php echo $row['transaction'];?></th>
		<th><?php echo $row['hotel'];?></th>
		<th><?php echo $row['room'];?></th>
		<th><?php echo $row['amount'];?></th>
		<th><?php echo $row['check_in'];?></th>
		<th><?php echo $row['check_out'];?></th>
		
		
</tr>

    <?php

		}

	?>
	
	</table>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>