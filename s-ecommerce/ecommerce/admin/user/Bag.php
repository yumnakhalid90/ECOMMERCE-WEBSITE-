<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <?php
  include 'header.php';

?>
</head>
<body>
  <div class="container-fluid">
  <div class="col-md-12">
    <div class="row">

    <h1 class = "text-warning font-monospace text-center my-3 ">BAG</h1>
    <?php
  include 'config.php';
  $Record= mysqli_query($con, "SELECT * FROM `tblproduct`");
  while ($row = mysqli_fetch_array($Record)){
    $check_page = $row['PCategory'];
    if( $check_page === 'Bag'){

    

  
echo"
<div class = 'col-md-6 col-lg-4 mx-auto mb-3'>
<form action = 'Insertcart.php' method ='post'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/$row[PImage]' class='card-img-top' alt=''>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>RS: $row[PPrice]</p>
    <input type = 'hidden' name = 'PName' value = '$row[PName]'>
    <input type = 'hidden' name = 'PPrice' value = '$row[PPrice]'>
    <input type = 'number' name = 'PQuantity' value = ' min = '1' max = '20' placeholder = 'Quantity' > <br><br>
    <input type= 'submit'  name = 'addCart' class ='btn btn-warning text-white w-100' value ='ADD TO CART'>
  </div>
</div>
</form>
</div>
";
}
  }
?>
</div>
</div>
</div>

<?php

include 'footer.php';


?>
</body>
</html>