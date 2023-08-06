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

<?php
// Check if the form has been submitted
if (isset($_POST['update'])) {
    // Get the product ID from the form
    $id = $_POST['id'];

    // Get the product name and price from the form
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];

    // Process the product image if uploaded
    if ($_FILES['Pimage']['name'] !== '') {
        $image_name = $_FILES['Pimage']['name'];
        $image_tmp = $_FILES['Pimage']['tmp_name'];
        $img_des = "uploadimage/" . $image_name;
        move_uploaded_file($image_tmp, $img_des);
    } else {
        // If no new image uploaded, use the existing image path
        $img_des = $_POST['existing_image'];
    }

    // Get the product category from the form
    $product_category = $_POST['Pages'];

    // Include the database connection file
    include 'config.php';

    // Use prepared statement to update the product record in the database
    $stmt = $conn->prepare("UPDATE `tblproduct` SET `PName`=?, `PPrice`=?, `PImage`=?, `PCategory`=? WHERE Id=?");
    $stmt->bind_param("ssssi", $product_name, $product_price, $img_des, $product_category, $id);
    
    // Execute the prepared statement
    if ($stmt->execute()) {
        // Close the prepared statement
        $stmt->close();

        // Redirect to the index.php page after successful update
        header("Location: index.php");
        exit();
    } else {
        // Error handling if the update fails
        echo "Error updating product: " . $stmt->error;
    }
}

// If no form submission, fetch the product data to populate the form
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    include 'config.php';

    // Use prepared statement to fetch the product data from the database
    $stmt = $conn->prepare("SELECT * FROM `tblproduct` WHERE  Id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Get the product data and store it in $data variable
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    // Close the prepared statement
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center text-warning">Product Update</h5>
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $data['Id']; ?>">
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name:</label>
                                <input type="text" name="Pname" class="form-control" id="productName" value="<?php echo $data['PName']; ?>" placeholder="Enter Product Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Product Price:</label>
                                <input type="text" name="Pprice" class="form-control" id="productPrice" value="<?php echo $data['PPrice']; ?>" placeholder="Enter Product Price" required>
                            </div>
                            <div class="mb-3">
                                <label for="productImage" class="form-label">Add Product Image</label>
                                <input type="file" name="Pimage" class="form-control" id="productImage">
                                <input type="hidden" name="existing_image" value="<?php echo $data['PImage']; ?>">
                                <img src="<?php echo $data['PImage']; ?>" height="150px" width="180px">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Page Category</label>
                                <select class="form-select" name="Pages" required>
                                    <option value="Home" <?php if ($data['PCategory'] === 'Home') echo 'selected'; ?>>Home</option>
                                    <option value="Laptop" <?php if ($data['PCategory'] === 'Laptop') echo 'selected'; ?>>Laptop</option>
                                    <option value="Bag" <?php if ($data['PCategory'] === 'Bag') echo 'selected'; ?>>Bag</option>
                                    <option value="Mobile" <?php if ($data['PCategory'] === 'Mobile') echo 'selected'; ?>>Mobile</option>
                                </select>
                            </div>
                            <button type="submit" name="update" class="btn btn-danger btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
