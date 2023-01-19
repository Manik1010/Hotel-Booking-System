<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BL</title>
    <link rel="stylesheet" type="text/css" href="Contact_01.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

</head>
<body>
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
        <!---Navbare End here....--->
    <!---Alert section
    <div class="alert-section">
        <span>Message Send! Thank you for contacting us.</span>

    </div>S

    <div class="alert-error">
        <span>Something won't wrong! Please try again.</span>

    </div>


    Alert section End--->

    <!---Contact section Start--->
    <section class="sub-header">
      <div class="contact-section">
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i><br>Address, City, Country</div>

            <div><i class="fas fa-envelope"></i> <br> <p>mail: mdblmanikislam777p@gmail.com <br> mail: mdblmanikislam777p@gmail.com </p> </div>
            <!---<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i><br><p>Mob: 01616-490568 <br> Mob: 01600-000000</p></div>
            <div><i class="fas fa-phone"></i>Mob: 01616-490568 <br> Mob: 01600-000000</div>--->
            <div><i class="fas fa-phone"></i><br><p>Mob: 01616-490568 <br> Mob: 01600-000000</p></div>
            <div><i class="fas fa-clock"></i><br>Mon- Fri 8:00 AM to 5:00 </div>

        </div>
       <!-- <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your Message plz....</span>
                    </div>
                    <div class="inputBox">
                        <input type="Submit" name="" value="Send">
                    </div>
                </form>
            </div>-->

        <div class="contact-form">
            <h2>Contact Us</h2>
            <p>This is our Project.Project members are Tanvir and Manik. We are best friend. I hope our relation live long time.</p><br>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required="required">
                <!--<span>Full Name</span> -->
                <input type="email" name="email" class="text-box" placeholder="Your Email" required="required">
                <textarea name="message" rows="s" placeholder="Your Message" required></textarea>
                 <input type="submit" name="submit" class="send-btn" value="Send">

            </form>

        </div>

    </div>
  </section>
    <!---Contact section End--->

        <!---Foater Start here....--->

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
