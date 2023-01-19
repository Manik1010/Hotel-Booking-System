<?php
	session_start();
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'ohbs');

	$qry="select * from rooms";
	$result=mysqli_query($con,$qry);
	// $row=mysqli_fetch_assoc($result);
	// $e = $row['image'];

	// echo $e;
	// die();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Hotel Details</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="SingleRoom.css">
</head>
<body>
	<!------Navigation Bar------->
<!---Navbare Start here....--->
  <section class="header">
      <nav>
         <!-- <a href="home.html"><img src="images2/logo3.jpg" class="avatar1"></a> -->
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

	<!-----About Info-------->
	
	<section id="info" class="py-5">
		<?php while($row=mysqli_fetch_assoc($result)){
	    ?>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-right">
					<img src="<?php echo $row['image']; ?>" class="img-fluid rounded">

					<div>
						<br><br>
					</div>

				</div>
				
				<div class="col-md-6">
					<h2 class="text-primary"><?php echo $row['name']; ?></h2>
					<p><?php echo $row['description']; ?></p>
					<p>Max Adult : <?php echo $row['adult']; ?></p>
					<p>Max Child : <?php echo $row['child']; ?></p>
					<p>No Of Bed : <?php echo $row['bed']; ?></p>
					<p>Room Facility : <?php echo $row['facility']; ?></p>
					<p>Price : <?php echo $row['price']; ?></p>
					<p>Location : <?php echo $row['location']; ?></p>
					<a href="BookingDD.php" class="btn btn-dark btn-lg">Book Now</a>
                   </div>
                   <?php
		            }
		            ?>

			</div>
		
	</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>