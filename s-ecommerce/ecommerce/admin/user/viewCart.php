<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-9">

                <table class="table table-bordered text-center">
                    <thead class="bg-danger text-white fs-5">
                        <th>Sno</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>

                    <tbody>
                        <?php
                        $ptotal = 0;
                        $total = 0;
                        $i = 0;

                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $productPrice = $value['productPrice'];
                                $productQuantity = $value['productQuantity'];

                                // Calculate total price for each product
                                $ptotal = $productPrice * $productQuantity;

                                // Accumulate the total price for all products
                                $total += $ptotal;

                                $i = $key + 1;

                                echo "
                                    <form action='Insertcart.php' method='post'>
                                        <tr>
                                            <td>$i</td>
                                            <td><input type='hidden' name='PName' value='$value[productName]'>$value[productName]</td>
                                            <td><input type='hidden' name='PPrice' value='$value[productPrice]'>$value[productPrice]</td>
                                            <td><input type='number' name='PQuantity' value='$value[productQuantity]' class='text-center'></td>
                                            <td>$ptotal</td>
                                            <td><button name='update' class='btn btn-warning text-center'>Update</button></td>
                                            <td><button name='remove' class='btn btn-danger'>Delete</button></td>
                                            <td><input type='hidden' name='item' value='$value[productName]'></td>
                                        </tr>
                                    </form>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="col-lg-3">
                <h3 class="text-center">Total</h3>
                <h1 class="bg-danger text-white text-center"> <?php echo number_format($total, 2) ?> </h1>
            </div>
   

    <div class="col-md-3 bg-dark m-auto my-5">
        <a href="checkout.php" class="btn <?= ($total > 0) ? '' : ' disabled'; ?>">
            <h3 class="text-warning text-center">Proceed to Checkout</h3>
        </a>
    </div>
   </div>

 </div>


</body>

</html>
