<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title>Add Room</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

  <link rel="stylesheet" type="text/css" href="styel.css">
</head>
<body>
  <!------Navigation Bar------->

  <section class="header">
        <nav>
           <a href="home.html"><img src="images2/logo3.jpg" class="avatar1" ></a>
            <div class="nav-links" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                <li><a href="Addd_Hotel.html">Add</a></li>
                <li><a href="Delete.html">Delete</a></li>
                <li><a href="Gallery.html">User Manegment</a></li>
                <li><a href="User Manegment.html">Booking Details</a></li>
                <li><a href="Contact Info.html">Contact Info</a></li>
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
            <h2 class="display-4 text-center">Add Room</h2><br>
            
            
          </div>
          <form  method="post">
            <div>
              <input type="text" name="name" placeholder="Hotel Name" class="form-control form-control-lg" required>
            </div><br>
            
            <div>
              <input type="file" name="image" placeholder="Add Image" class="form-control form-control-lg" required>
            </div><br>

            <div>
              <input type="text" name="description" placeholder="Description" class="form-control form-control-lg" required>
            </div><br>

            <div>
              <input type="number" name="adult" placeholder="Max Adult" class="form-control form-control-lg" required>
            </div><br>

            <div>
              <input type="number" name="child" placeholder="Max Child" class="form-control form-control-lg" required>
            </div><br>

            <div>
              <input type="number" name="no_of_bed" placeholder="No Of Bed" class="form-control form-control-lg" required>
            </div><br>

            <div>
              <input type="text" name="facility" placeholder="Room Facility" class="form-control form-control-lg" required>
            </div><br>

              <div>
              <input type="number" name="price" placeholder="Price" class="form-control form-control-lg" required>
            </div><br>

              <div>
              <input type="text" name="location" placeholder="Hotel Location" class="form-control form-control-lg" required>
            </div><br>
              
              

              <button name="submit" type="submit" class="btn btn-primary btn-lg">SUBMIT</button>
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
