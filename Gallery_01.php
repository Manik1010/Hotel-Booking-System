
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="Gallery_01.css">
<body>
	    <!---Navbare Start here....--->
  <section class="header">
      <nav>
           <!-- <a href="home.html"><img src="images2/logo5.jfif" class="avatar1"></a> -->
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
        <!---Navbare End here....--->
	
	<div class="ful-img" id="fullImgBox">
		<img src="images2/user1.jpg" id="fullImg">
		<span onclick="closeFullImg()">X</span>
		
	</div>

	<div class="img-gallery">
		<img src="Uimages2/1.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/17.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/12.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/02.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/3.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/2.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/11.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/01.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/09.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/21.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/14.jpg" onclick="openFullImg(this.src)">
		<img src="Uimages2/g13.jpg" onclick="openFullImg(this.src)">


	</div>

<script>
	var fullImgBox = document.getElementById("fullImgBox");
	var fullImg = document.getElementById("fullImg");

	function openFullImg(pic){
		fullImgBox.style.display = "flex";
		fullImg.src = pic;
	}
	function closeFullImg(){
		fullImgBox.style.display = "none";
	}

</script>
</body>	
</head>
</html>