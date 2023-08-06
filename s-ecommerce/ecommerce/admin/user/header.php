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
</head>
<body>
  <?php
  session_start();
  $count = 0;
  if(isset($_SESSION['cart'])){
    $count = count ($_SESSION['cart']);

  }

?>
<nav class="navbar navbar-light bg-secondary">
  <div class="container-fluid ">
    <a class="navbar-brand "><img src = "logo4.png" width="100"></a>

    <span class = "text-warning pe-2">
    <a href = "index.php" class=" text-warning text-decoration-none pe-2"> <i class="bi bi-house-door-fill"></i>Home</a>
    <a href = "viewCart.php" class=" text-warning text-decoration-none pe-2"> <i class="bi bi-cart-plus-fill"></i>Cart (<?php echo $count ?>)</a>  |
  <i class="bi bi-person-circle"></i>
  Welcome, User |
  <i class="bi bi-box-arrow-right"></i>
  <a href="./logout.php" class=" text-warning text-decoration-none pe-2">Logout </a>  |
  <a href="index.php" class=" text-warning text-decoration-none pe-2">User Panel </a>
  </div>
</nav>
  </div>
  <div class ="bg-danger font-monospace">
<ul class = "list-unstyled d-flex justify-content-center">
  <li><a href="laptop.php" class="text-decoration-none text-white  fw-bold fs-4 px-5"> LAPTOPS </a></li>
  <li><a href="Mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5"> MOBILES </a></li>
  <li><a href="Bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5"> BAGS </a></li>
</ul>
</div>
 



</body>
</html>