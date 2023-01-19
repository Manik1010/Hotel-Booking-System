<?php
   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'ohbs'); 

$rand = rand(11111, 89999999999);


 $image ='uploads/room-img/' . $rand .$_FILES['image']['name'];

 $upload = '../uploads/room-img/' . $rand . $_FILES['image']['name'];

 move_uploaded_file($_FILES['image']['tmp_name'], $upload);

 // echo $image;
 // die();
// $dist_name = $_POST['dist_name'];
    $g=$_POST['name'];
    // $h=$_POST['image'];
    $i=$_POST['description'];
    $j=$_POST['adult'];
    $k=$_POST['child'];
    $l=$_POST['bed'];
    $m=$_POST['facility'];
    $n=$_POST['price'];
    $o=$_POST['location'];
    // echo $g;
    // echo $image;
    // die();
    
    $qry="INSERT INTO rooms (name,image,description,adult,child,bed,facility,price,location) VALUES('$g','$image','$i','$j','$k','$l','$m','$n','$o')";
    mysqli_query($con,$qry);
// die();
// mysqli_query($con, $sql1);

header('Location: ../add_SingleRoom.php');


?>