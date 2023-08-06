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
<body>
<form action = "insert.php" method="post" enctype="multipart/form-data">
<div class="col-md-5  m-auto border my-3"> 
  <div class = "mb-3">
  <p class = "text-center my-3 text-warning fs-8 ">Product Details </div>

    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Product Name:</label>
  <input type="text" name ="Pname" class="form-control" id="formGroupExampleInput" placeholder="Enter Product Name" required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Product Price:</label>
  <input type="text" name ="Pprice"class="form-control" id="formGroupExampleInput2" placeholder="Enter Product Price" required>
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Add Product Image</label>
  <input type="file" name ="Pimage" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" required>
</div>

<div class="mb-3">
  <label class="form-label">Select Page Category</label>
  <select class ="form-select" name ="Pages" required>
    <option value="Home">Home</option>
    <option value="Laptop">Laptop</option>
    <option value="Bag">Bag</option>
    <option value="Mobile">Mobile</option>
</select>
</div>
<button  name ="submit" class ="bg-danger fs-4 fw-bold my-3 form-control text-light">Upload </button>

</form>

</div>
<div>

<!-- fetch data -->
<div class ="container">
  <div class ="row">
    <div class = "col-md-9  m-auto">
<table class= "table border border-warning table-hover border my-5">

 <thead class ="bg-dark text-white fs-5 font-monospace text-center">
  <th>Id</th>
  <th>Name</th>
  <th>Price</th>
  <th>Image</th>
  <th>Category</th>
  <th>Delete</th>
  <th>Update</th>
 </thead>
  <tbody class="fs-5 font-monospace text-center">

  <?php
  include 'config.php';
  $Record = mysqli_query($conn, "SELECT * FROM `tblproduct` ");

  while($row =mysqli_fetch_array($Record))
  echo "
  
  <tr>
  <td>$row[Id]</td>
  <td>$row[PName]</td>
  <td>$row[PPrice]</td>
  <td><img src='$row[PImage]' height = '90px' width = '180px'></td>
  <td>$row[PCategory]</td>
  <td><a href= 'delete.php? ID= $row[Id]' class = 'btn btn-danger'>Delete</a></td>
  <td><a href= 'update.php? ID= $row[Id]' class = 'btn btn-warning'>Update</a></td>
  

  <td></td>
  </tr>
  ";

  ?>

  </tbody>
</table>
</div>
</div>
</div>



</body>
</html>