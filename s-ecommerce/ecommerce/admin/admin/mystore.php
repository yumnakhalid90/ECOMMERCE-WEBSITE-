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

<?php

session_start();
if(!$_SESSION['admin']){
  header("location:./login.php");
}
?>

<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid font-monospace text-white">
    <a class="navbar-brand text-white"><h3>My Store</h3></a>
  <span>
  <i class="bi bi-person-circle"></i>
  Hello, <?php   echo $_SESSION['admin']; ?> |
  <i class="bi bi-box-arrow-right"></i>
  <a href="./logout.php" class= "text-decoration-none text-white ">Logout </a>  |
  <a href="" class= "text-decoration-none text-white ">User Panel </a>
  </div>
</nav>

<div>
    <h2 class="text-center">Dashboard</h2>
</div>

<div class="col-md-6 bg-danger text-center m-auto"> 
<a href="index.php" class= "text-decoration-none text-white  fs-4 fw-bold px-5">Add Post </a>
<a href="user.php" class= "text-decoration-none text-white  fs-4 fw-bold px-5"> Users </a>

</div>


<?php

// include 'footer.php';


?>
</body>
</html>