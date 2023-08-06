<!DOCTYPE html>
<html lang="en">

<head>
<script src="js/script.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>

  
</head>

<body>
    <?php include 'header.php';
    
    ?>
    

    <div class="container">
        <section class="checkout-form">

            <h1 class="heading">Complete Your Order</h1>


<?php
if (isset($_POST['order_btn'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $method = $_POST['method'];
    $flat = $_POST['flat'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pin_code = $_POST['pin_code'];
    $product_total_price = $_POST['total_products'];
    $price_total = $_POST['total_price'];

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    $price_total = 0;

    $con = mysqli_connect('localhost', 'root', '', 'secommerce');

    foreach ($cart as $product) {
        $product_name = $product['productName'];
        $product_price = $product['productPrice'];
        $product_quantity = $product['productQuantity'];
        $product_total_price = $product_price * $product_quantity;

        $price_total += $product_total_price;

        $insert_query = "INSERT INTO `order`( `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`)
        VALUES ('$name', '$number', '$email', '$method', '$flat', '$street', '$city', '$state', '$country', '$pin_code', '$product_total_price' , '$price_total')";

        mysqli_query($con, $insert_query);
    }

    // Store relevant order information in sessions for use on order_complete.php
    $_SESSION['order_total'] = $price_total;
    $_SESSION['order_details'] = $cart;

    // Redirect to order_complete.php after the order is processed
    header("Location: order_complete.php");
    exit();
}
   
?>



</section>
</div>

<div class= "container">
<div class = "row">
<div class =" col-md-6 mt-3 shadow m-auto bg-white font-monospace p-3 border border-info mb-5  ">
  <h2 class ="text-warning text-center fs-3 fw-bold my-3">Fill The Form</h2>
 
  <form action = "" method = "post">

  <div class = "mb-3">
<label class ="form-label">Name</label>
<input type="text" name ="name" class="form-control" placeholder ="Enter Your Name" required>
</div>

<div class = "mb-3">
<label class ="form-label">Number</label>
<input type="number" name ="number" class="form-control" placeholder ="Enter Your Number" required>
</div>

<div class = "mb-3">
<label class ="form-label">Email</label>
<input type="email" name ="email" class="form-control" placeholder ="Enter Your Email" required>
</div>

<div class="mb-3">
  <label class="form-label">Payment Method</label>
  <select class ="form-select" name="method">
    <option value="Credit Card">Credit Card</option>
    <option value="Cash On Delivery">Cash On Delivery</option>

</select>

<div class = "mb-3">
<label class ="form-label">Address</label>
<input type="text" name ="flat" class="form-control" placeholder ="Enter Your Address" required>
</div>


<div class = "mb-3">
<label class ="form-label">Street</label>
<input type="text" name ="street" class="form-control" placeholder ="Enter Your Street Address" required>
</div>

<div class = "mb-3">
<label class ="form-label">City</label>
<input type="text" name ="city" class="form-control" placeholder ="Enter Your City" required>
</div>

<div class = "mb-3">
<label class ="form-label">State</label>
<input type="text" name ="state" class="form-control" placeholder ="Enter Your State" required>
</div>

<div class = "mb-3">
<label class ="form-label">Country</label>
<input type="text" name ="country" class="form-control" placeholder ="Enter Your Country" required>
</div>

<div class = "mb-3">
<label class ="form-label">Zip Code</label>
<input type="text" name ="pin_code" class="form-control" placeholder ="Enter Your Zip Code" required>
</div>

<div class = "mb-3">
  <button type="submit" name="order_btn" class = "w-100 bg-warning fs-4  fw-3 text-white">Order Now </button>
</div>

</div>
</form>
</div>
</div>
</div>
        </div>
<!-- custom js file link  -->
<script src="js/script.js"></script>


   
</body>
</html>


