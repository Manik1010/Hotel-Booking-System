<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css">
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

    <section id="showcase" class="bg-dark">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
        <li data-bs-target="#carousel" data-bs-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images2/01.jpg" class="d-block w-100" alt="First Slide">
        </div>
        <div class="carousel-item">
          <img src="images2/5.jpg" class="d-block w-100" alt="Second Slide">
        </div>
        <div class="carousel-item">
          <img src="images2/g16.jpg" class="d-block w-100" alt="Third Slide">
        </div>
         <div class="carousel-item">
          <img src="images2/g18.jpg" class="d-block w-100" alt="Fourth Slide">
        </div>

      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    </section>




    <!------Info Section------>

    <section id="info" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center">
          <h3>OHBS Importants</h3>
          <p>Online Hotel booking system is the best platform, as it adds many benefits and user can easily book the hotel or room through the internet. It discovers the more information about a hotel which is situated in a particular area and user can also select a hotel according to his/her demands and choice.</p>
          <a href="About.php" class="btn btn-outline-dark">Read More</a>
          </div>
          <div class="col-md-6">
            <img src="images2/6.jpg" class="img-fluid rounded" alt="PC">

          </div>

        </div>

      </div>

    </section>

   <!-------Get Started---->

    <section id="getstarted" class="py-5 text-center text-light">
      <div class="dark-overlay">
        <div class="container">
          <div class="row">
            <div class="col mt-3 pt-3">
              <h2>Are You Ready To Get Started</h2>
              <p class="lead">If you are interested to stay with us and wants to get benefit through our website
                you have to registered.Then take benefit of Booking Hotels and more.We Welcome you advance.</p>

            </div>

          </div>

        </div>

      </div>

    </section>

<!-----------Footer Section------------------->

  <section id="footer">
    <!-- <img src="images2/logo3.jpg" class="logo-img"> -->
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

          <h4>Follow Social Media</h4><hr>

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
