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
<div class= "container">
<div class = "row">
<div class =" col-md-6 mt-5 shadow m-auto bg-white font-monospace p-3 border border-info mt-3  ">
  <p class ="text-warning text-center fs-3 fw-bold my-3">USER REGISTER </p>
 
  <form action = "insert.php" method = "post">

  <div class = "mb-3">
<label class ="form-label">UserName</label>
<input type="text" name ="name" class="form-control" placeholder ="Enter User Name">
</div>

<div class = "mb-3">
<label class ="form-label">User Email</label>
<input type="email" name ="email" class="form-control" placeholder ="Enter User Email" >
</div>

<div class = "mb-3">
<label class ="form-label">User Number</label>
<input type="number" name ="number" class="form-control" placeholder ="Enter User Number" >
</div>


<div class = "mb-3">
<label class ="form-label">User Password</label>
<input type="password" name ="password" class="form-control" placeholder ="Enter User Password">
</div>

<div class = "mb-3">
  <button name = "submit" class = "w-100 bg-warning fs-4 text-white">REGISTER </button>
</div>

<div class = "mb-3">
  <button class = "w-100 bg-warning fs-4 text-white"><a href = "login.php" class= "text-decoration-none  text-white">LOGIN</a></button>
</div>
</form>
</div>
</div>
</div>
</body>
</html>