<?php
	session_start();
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'ohbs');
?>


<!DOCTYPE html>
<html>
<head>
	<title>OHBS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Deleteroom.css">
</head>
<body>
	<!---Navigation Part--->
<!------Navigation Bar-------> 

  <section class="header">
        <nav>
           <a href="home.html"><img src="images2/logo5.jfif" class="avatar1" ></a>
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
	<!-------Add Hotel------------>

	<section id="info" class="py-5">
		      <?php
		       $qry="select * from rooms";
		       $result=mysqli_query($con,$qry);
		       while($row=mysqli_fetch_assoc($result)){
	           ?>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-right">
					<img src="<?php echo $row['image'];?>" class="img-fluid rounded">

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

					 <a  class="btn btn-dark" href="Remove Room.php?rn=<?php echo $row['name'];?>">Delete</a>
					</div>

					<?php
		            }
		            ?>

				    
			</div>
			
		</div>
		
	</section>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>