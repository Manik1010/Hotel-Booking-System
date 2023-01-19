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
	<link rel="stylesheet" type="text/css" href="BookingDD.css">
</head>
<body>
	<!---Navbare Start here....--->
  <section class="header">
      <nav>
         <a href="home.html"><img src="images2/logo3.jpg" class="avatar1"></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="registered.php">About Us</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <li><a href="hotel_01.php">Hotels</a></li>
                <li><a href="">Rooms</a>
                   <div class="sub-menu">
                      <ul>
                         <li><a href="SingleRoom.php">Single room</a></li>
                         <li><a href="#">Double room</a></li>
                         <li><a href="#">Family room</a></li>
                         <li><a href="#">Royal room</a></li>
                         <li><a href="#">President room</a></li>
                      </ul>
                   </div>
                </li>
                <li><a href="Contact_01.php">Contact</a></li>
                <li><a href="Logout.php">Logout</a></li>
              </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
  </section>

	<!----------Booking Part----------------->
	
	<section id="Contact" class="py-5 bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="info-contact">
						<h2 class="display-4 text-center text-primary">Booking Now Your Room</h2><br>
						
						
					</div>
					<form  action="Confirm.php" method="post">

							<div class="input-group mb-3">

							
  							<input type="text" name="hotel" placeholder="Enter Hotel Name" class="form-control" required>
    						
  							
						</div><br>
							<div class="input-group mb-3">

							<input type="text" name="room" placeholder="Enter Room Categories" class="form-control" required>
  							
						</div><br>
						<div>
							<input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
						</div><br>

						<div>
							<input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
						</div><br>

							<div class="input-group mb-3">

							<label class="input-group-text" for="room">Check-in</label>
							<input type="date" name="check_in" class="form-control" required>
  							
						</div><br>

						<div class="input-group mb-3">

							<label class="input-group-text" for="room">Check-out</label>

							<input type="date" name="check_out" class="form-control" required>
  							
						</div><br>


							<div>
							<input type="text" name="mobile" placeholder="Enter Your Mobile Number" class="form-control" required>
						</div><br>

						<div>
							<input type="text" name="amount" placeholder="Total Amount" class="form-control" required>
						</div><br>
					
						<div class="input-group mb-3">

							<label class="input-group-text" for="inputGroupSelect01">Payment Method</label>
  							<select class="form-select" name="payment">
   							 <option selected>Choose...</option>
   							 <option>Bkash</option>
    						<option >Rocket</option>
    						<option >Nagad</option>
  							</select>
						</div><br>

						<div>
							<input type="text" name="transaction" placeholder="Transaction Id" class="form-control" required>
						</div><br>

						<button type="submit" class="btn btn-primary btn-lg">Confirm</button>

						
								
							
							<button class="btn btn-dark btn-lg" type="reset" value="Reset">Reset</button>
					</form>

					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>