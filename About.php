<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title>About-Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

  <link rel="stylesheet" type="text/css" href="about_styel.css">
</head>
<body>
  <!------Navigation Bar------->

  <section class="header">
        <nav>
           <a href="home.html"><img src="images2/logo3.jpg" class="avatar1" ></a>
            <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <li><a href="Hotels.php">Hotels</a></li>
                <li><a href="Login&Reg.php">Sign-Up</a></li>
                <li><a href="Contact_01.php">Contact</a></li>
              </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    </section>
  <!----------About Us Header------->

  <section id="head" class="text-center text-dark">
    <div class="container">
      <div class="row">
        <div class="col mt-4 pt-4">
          <h2>About Us</h2>
          <p class="lead">Hello,Welcome to Visit Our Website</p>

        </div>

      </div>

    </div>

  </section>

  <!-----About Info-------->

  <section id="info" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Online Hotel Booking System :</h2>
          <p class="lead text-justify">The name of our project is Hotel Booking System. The purpose of this project to show the popular hotel of Sylhet City (further we can add other city). In this website users can see nearby hotels locations and details of hotel. Hotel booking system is the best platform, as it adds many benefits and user can easily book the hotel or room through the internet. It discovers the more and information about a hotel which is situated in a particular area and user can also select a hotel according to his/her demands and choice.</p>

        </div>
        <div class="col-md-6 text-right">
          <img src="images2/g9.jpg" class="img-fluid rounded">
        </div>

      </div>

    </div>

  </section>
<!---------About-Us-------->
    <section class="about">
      <h2> Developer </h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <!--<img src="/w3images/team1.jpg" alt="Jane" style="width:100%">--->
            <img src="images2/n3.jpg" alt="Jane" style="width:25% " >
            <div class="container">
              <p>North East University of Bangladesh<br>Semister: 8th<br>Section: B</p>
              <h3>BL Manik Molla</h3>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
          </div>
        </div>


     <!-- <div class="row">
        <div class="about-col">
          <img src="images2/n3.jpg">
          <div>
            <p>North East University of Bangladesh<br>Semister: 8th<br>Section: B</p>
            <h3>BL Manik Molla</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
        </div>
        <div class="about-col2">

        </div>
        <div class="about-col">
          <img src="images2/n2.jpg">
          <div>
            <p>North East University of Bangladesh<br>Semister: 8th<br>Section: B</p>
            <h3>Tanvir Ahmad</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
        </div>--->
      </div>
    </section>
  <!-----------Footer Section------------------->

  <section id="footer">
    <img src="images2/logo3.jpg" class="logo-img">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-box">
          <h4>SenSa</h4><hr>
          <p>We're all spending too much time and energy solving the first iteration of a challenge with the first idea we have. That's both limiting and counter productive.</p>
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
