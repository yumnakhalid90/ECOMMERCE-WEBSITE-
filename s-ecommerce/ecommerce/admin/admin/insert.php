<?php
if(isset($_POST['submit'])){
   include 'config.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "uploadimage/". $image_name;
     move_uploaded_file($image_loc, "uploadimage/".$image_name);
     $product_category = $_POST['Pages'];


     // insert product //


   mysqli_query ($conn, "INSERT INTO `tblproduct`(`PName`, `PPrice`, `PImage`, `PCategory`) 
   VALUES ('$product_name','$product_price','$img_des','$product_category')");

   
}



?>

