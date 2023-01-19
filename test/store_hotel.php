<?php
   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'ohbs'); 

$rand = rand(11111, 89999999999);


 $image ='uploads/hotel-img/' . $rand .$_FILES['image']['name'];

 $upload = '../uploads/hotel-img/' . $rand . $_FILES['image']['name'];

 move_uploaded_file($_FILES['image']['tmp_name'], $upload);

 // echo $image;
 // die();
// $dist_name = $_POST['dist_name'];
      $a=$_POST['name'];
    // $b=$_POST['image'];
    $c=$_POST['first'];
    $d=$_POST['second'];
    $e=$_POST['third'];
    $f=$_POST['fourth'];

    // echo $a;
    // die();
    
    $qry="INSERT INTO hotel (name,image,first,second,third,fourth) VALUES( '$a','$image','$c','$d','$e','$f')";
    mysqli_query($con,$qry);
// die();
// mysqli_query($con, $sql1);

header('Location: ../Addd_Hotel.php');


?>