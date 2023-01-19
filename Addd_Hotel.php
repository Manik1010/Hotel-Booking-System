<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title>Add Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

  <link rel="stylesheet" type="text/css" href="styel.css">
</head>
<body>
   <!------Navigation Bar------->
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

  <section id="Contact" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="info-contact">
            <h2 class="display-4 text-center">Add Hotel</h2><br>
            
            
          </div>
          <form method="post" enctype="multipart/form-data" action="test/store_hotel.php">
            <div>
              <input type="text" name="name" placeholder="Hotel Name" class="form-control form-control-lg" required>
            </div><br>

            <div>
              <input type="file" name="image" placeholder="Add Image" class="form-control form-control-lg"required>
            </div><br>

            <div>
              <input type="text" name="first" placeholder="Add Details First Part" class="form-control form-control-lg"required>
            </div><br>

            <div>
              <input type="text" name="second" placeholder="Add Details Second Part" class="form-control form-control-lg"required>
            </div><br>

            <div>
              <input type="text" name="third" placeholder="Add Details Third Part" class="form-control form-control-lg"required>
            </div><br>

            <div>
              <input type="text" name="fourth" placeholder="Add Details Fourth Part" class="form-control form-control-lg"required>
            </div><br>
              
              

              <button type="add" name="add" class="btn btn-primary btn-lg">ADD</button>
              <button class="btn btn-dark btn-lg" type="reset" value="Reset">Reset</button>
          </form>
          
        </div>
        
      </div>
      
    </div>
    
  </section>

  <script src="https://use.fontawesome.com/021eb02a1a.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>