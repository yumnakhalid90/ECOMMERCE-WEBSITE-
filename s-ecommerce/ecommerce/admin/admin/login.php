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
<body class ="bg-secondary">
<div class= "container">
<div class = "row">
<div class =" col-md-6 shadow m-auto bg-white font-monospace p-3 border-primary mt-3 ">

<form action ="login1.php" method="post">

<div class = "mb-3">
  <p class = "text-center fw-bold fs-5 text-warning">Login: </p>
</div>

<div class = "mb-3">
<label class ="form-label">UserName</label>
<input type="text" name ="username" class="form-control" placeholder ="Enter UserName" required>
</div>

<div class = "mb-3">
<label class ="form-label">Password</label>
<input type="password" name ="userpassword" class="form-control" placeholder ="Enter Password" required>
</div>

<button class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</button> 

</div>
</div>
</div>
</form>

</body>
</html>