<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Hotels-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="hotel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  </head>
  <body>
    <section class="header">
        <nav>
           <!-- <a href="home.html"><img src="images2/logo5.jfif" class="avatar1"></a> -->
           <a href="index.html" class="navbar-brand">Hotel Booking System Website</a>
            <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Gallery_01.php">Gallery</a></li>
                <li><a href="hotel.php">Hotels</a></li>
                <li><a href="Login&Reg.php">Sign-Up</a></li>

              </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    </section>

    <!-------Hotels------->
    <section class="hotels">
      <h1>Hotels</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscin elit.</p>
      <div class="row">
        <div class=" hotels-col">
          <img src="images2/h1.jpg">
          <h3>Rose View</h3>
          <p>Lorem ipsum dolor sit amet,consectetur adipiscin elit. Pellentesque aliquet turpis nulla.</p>
          <a href="" class="btn btn-outline-dark">More details</a>
        </div>
        <div class=" hotels-col">
          <img src="images2/h2.jpg">
          <h3>Valley Garden</h3>
          <p>Lorem ipsum dolor sit amet,consectetur adipiscin elit. Pellentesque aliquet turpis nulla.</p>
          <a href="" class="btn btn-outline-dark">More details</a>
        </div>
        <div class=" hotels-col">
          <img src="images2/h3.jpg">
          <h3>Hotel Supreme</h3>
          <p>Lorem ipsum dolor sit amet,consectetur adipiscin elit. Pellentesque aliquet turpis nulla.</p>
          <a href="" class="btn btn-outline-dark">More details</a>
        </div>
      </div>
      <div class="row">
        <div class=" hotels-col">
          <img src="images2/g8.jpg">
          <h3>Grand Surma</h3>
          <p>Lorem ipsum dolor sit amet,consectetur adipiscin elit. Pellentesque aliquet turpis nulla.</p>
          <a href="" class="btn btn-outline-dark">More details</a>
        </div>
        <div class=" hotels-col">
          <img src="images2/g9.jpg">
          <h3>Noorjahan</h3>
          <p>Lorem ipsum dolor sit amet,consectetur adipiscin elit. Pellentesque aliquet turpis nulla.</p>
          <a href="" class="btn btn-outline-dark">More details</a>
        </div>
        <div class=" hotels-col">
          <img src="images2/g10.jpg">
          <h3>Grand Place</h3>
          <p>Lorem ipsum dolor sit amet,consectetur adipiscin elit. Pellentesque aliquet turpis nulla.</p>
          <a href="" class="btn btn-outline-dark">More details</a>
        </div>
      </div>
      <div class="row">
        <div class=" hotels-col">
          <img src="images2/g11.jpg">
          <h3>Mira Garden</h3>
          <p>Lorem ipsum dolor sit amet,consectetur adipiscin elit. Pellentesque aliquet turpis nulla.</p>
          <a href="" class="btn btn-outline-dark">More details</a>
        </div>
        <div class=" hotels-col">
          <img src="images2/g12.jpg">
          <h3>Grand Sultan</h3>
          <p>Lorem ipsum dolor sit amet,consectetur adipiscin elit. Pellentesque aliquet turpis nulla.</p>
          <a href="" class="btn btn-outline-dark">More details</a>
        </div>
        <div class=" hotels-col">
          <img src="images2/g14.jpg">
          <h3>Britannia Hotel</h3>
          <p>Lorem ipsum dolor sit amet,consectetur adipiscin elit. Pellentesque aliquet turpis nulla.</p>
          <a href="" class="btn btn-outline-dark">More details</a>
        </div>
      </div>
    </section>

   <!-----------Footer Section------------------->

  <section id="footer">
    <img src="images2/logo3.jpg" class="logo-img">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-box">
          <h4>OHBS</h4><hr>
          <p>Hotel Booking System Website.Online Hotel booking system is the best platform, as it adds many benefits and user can easily book the hotel or room through the internet</p>
        </div>
        <div class="col-md-4 footer-box">
          <h4>Contact Us</h4><hr>
          <p>Email: ohms777p@gmail.com</p>
          <p>Phone: 01616-490168</p>
          <p>Phone: 01648-736464</p>

        </div>
        <div class="col-md-3 footer-box">

          <h4>Follow Social Media</h4>

          <div class="icon">
          <a href=""><img src="images2/facebook-icon.png" height=40" width="40"></a>
           <a href=""><img src="images2/twitter-icon.png" height="50" width="50"></a>
           <a href=""><img src="images2/whatsapp-icon.png" height="50" width="50"></a>
          </div>
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
