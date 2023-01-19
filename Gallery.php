<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title>Gallery View</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

  <link rel="stylesheet" type="text/css" href="Gallery.css">
</head>
<body>
  <!------Navigation Bar------->

  <section class="header">
        <nav>
<!--            <a href="home.html"><img src="images2/logo5.jfif" class="avatar1"></a>
 -->           <a href="index.html" class="navbar-brand">Hotel Booking System Website</a>
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
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    </section>

   <!=======Gallery=========>
   <section class="gallery">
     <h1>Photo Gallery</h1>
     <div class="row1">
       <div class="gallery-col">
         <img src="images2/g1.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g2.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g3.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g4.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g5.jpg">
       </div>
     </div>
     <div class="row2">
       <div class="gallery-col">
         <img src="images2/g6.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g7.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g8.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g9.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g10.jpg">
       </div>
     </div>
     <div class="row3">
       <div class="gallery-col">
         <img src="images2/g11.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g12.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g13.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g14.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g15.jpg">
       </div>
     </div>
     <div class="row4">
       <div class="gallery-col">
         <img src="images2/g16.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g17.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g18.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g19.jpg">
       </div>
       <div class="gallery-col">
         <img src="images2/g20.jpg">
       </div>
     </div>
   </section>


  <!eta holo nav bar mobile view jonno responsive view>
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
