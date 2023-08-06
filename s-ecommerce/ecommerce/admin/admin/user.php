<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>

<?php

session_start();
if(!$_SESSION['admin']){
  header("location:./login.php");
}
?>

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


<?php

$con = mysqli_connect('localhost', 'root','','secommerce');
$Record = mysqli_query($con, "SELECT * FROM `tbl_user`");
$row_count = mysqli_num_rows($Record);


?>
<div class="container mt-5">
<div class="row">
<div class="col-md-10">

 


<table class="table table-secondary table-bordered">
    <thead class= "text-center">
        <th>S.N</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Id</th>
        <th>Delete</th>

</thead>

  <tbody class= "text-center text-danger m-auto">
   <?php

   while($row = mysqli_fetch_array($Record)){
    echo "
    <tr>
    <td>$row[Id]</td>
    <td>$row[username]</td>
    <td>$row[email]</td>
    <td>$row[number]</td>
    <td>$row[Id]</td>
    <td><a href = 'deleteuser.php? Id= $row[Id]' class = 'btn btn-outline-danger'>Delete</a></td>
    </tr>
     
    
    ";
   }

   ?>
</tbody>
</table>
</div>
<div class ="col-md-2 pr-5 text-center">
<h3 class ="text-danger text-Red">Total</h3>
<h1 class = "bg-danger text-white text-center"><?php echo $row_count; ?></h1>
</div>
  </div>
  </div>  

<?php

include 'footer.php';


?>

</body>
</html>