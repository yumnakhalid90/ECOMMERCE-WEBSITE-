<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
  
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin-top: 50px;
        } -->
    </style>
</head>
<body>
<div class="container mt-5">
        <h1 class="text-center text-success">Thank you for your order!</h1>

        <div class="card mt-4">
            <div class="card-body">
                <h2 class="card-title text-center text-warning ">Order Details:</h2>
              <ul class ="list-group text-center">
              </ul>
             
        <?php
        session_start (); 
        $order_details = isset($_SESSION['order_details']) ? $_SESSION['order_details'] : array();

        foreach ($order_details as $product) {
            $product_name = $product['productName'];
            $product_quantity = $product['productQuantity'];
            $product_total_price = $product['productPrice'] * $product_quantity;
            echo "<li>Product: $product_name (Quantity: $product_quantity) - Total: $product_total_price</li>";
        }
        ?>
  <ul>
</div>

</div>

    <?php
    $order_total = isset($_SESSION['order_total']) ? $_SESSION['order_total'] : 0;
    echo "<h3 class='text-center text-warning mt-4' >Total Amount: $order_total</h3>";
    ?>

  
</body>
</html>

<?php
// Clear the order information from sessions after displaying it
unset($_SESSION['order_total']);
unset($_SESSION['order_details']);
?>

</body>
</html>