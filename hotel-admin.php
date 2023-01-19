<?php
  session_start();
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'ohbs');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Hotels-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="hotel-admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  </head>
  <body>
   <!------Navigation Bar------->

  <section class="header">
        <nav>
           <a href="home.html"><img src="images2/logo3.jpg" class="avatar1" ></a>
            <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                <li><a href="About.html">About Us</a></li>
                <li><a href="Gallery.html">Gallery</a></li>
                <li><a href="hotel_01.html">Hotels</a></li>
                <li><a href="">Rooms</a>
                   <div class="sub-menu">
                      <ul>
                         <li><a href="#">Single room</a></li>
                         <li><a href="#">Double room</a></li>
                         <li><a href="#">Family room</a></li>
                         <li><a href="#">Royal room</a></li>
                         <li><a href="#">President room</a></li>
                      </ul>
                   </div>
                </li>
                <li><a href="Contact_01.html">Contact</a></li>
                <li><a href="Logout.html">Logout</a></li>
              </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    </section>

   <!-----About Info-------->
  
  <section id="info" class="py-5">
           <?php
           $qry="select * from hotel";
           $result=mysqli_query($con,$qry);
           while($row=mysqli_fetch_assoc($result)){
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

          <p class="text-justify"><?php echo $row['first']; ?><p>

           <p class="text-justify"><?php echo $row['second']; ?></p>

           <p class="text-justify "><?php echo $row['third']; ?></p>

           <p class="text-justify"><?php echo $row['fourth']; ?></p> 
          </div><br>

          <?php
                }
                ?>

            
      </div>
      
            
      </div>
      

            

    
  </section>


   <!--------Footer------>

   <section id="footer">
     <img src="images2/wave2.png" class="footer-img">
     <div class="container">
       <div class="row">
         <div class="col-md-4 footer-box">
           <img src="images2/logo3.jpg">

         </div>
       </div>
     </div>
   </section>

<!------Javascript for Toggle Menu----->
    <script>
      var navLinks=document.getElementById("navLinks");
      function showMenu(){
        navLinks.style.right="0";
      }

      function hideMenu(){
        navLinks.style.right="-200px";
      }
    </script>
    <script src="https://use.fontawesome.com/021eb02a1a.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
