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
  <link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
    <!------Navigation Bar------->
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
<!---------------User Details--------------------->
  <br>

  <table class="table table-success">
    <tr class="table-dark">
    <th>First Name</th>
    <th>Last Name</th> 
    <th>Email</th>
    <th>Password</th>
    <th>Operation</th>
    
    
</tr>

  <?php
    $qry="select * from user";
    $result=mysqli_query($con,$qry);
    while($row=mysqli_fetch_assoc($result)){
  ?>  
  <tr>
    <th><?php echo $row['fname']; ?></th> 
    <th><?php echo $row['lname']; ?></th> 
    <th><?php echo $row['email']; ?></th>
    <th><?php echo $row['password'];?></th>

    <th><a class="btn btn-dark" href="delete user.php?rn=<?php echo $row['email'];?>">Delete</a></th>
    
    
    
</tr>

    <?php

    }

  ?>
  
  </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>