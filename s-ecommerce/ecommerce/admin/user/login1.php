<?php
$con = mysqli_connect('localhost', 'root','','secommerce');
$Name = $_POST['name'];
$Password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM `tbl_user`  WHERE  username = '$Name' OR email = '$Name' AND 'password' = '$Password' ");

session_start();
if(mysqli_num_rows($result)){

    echo "
    <script>
    alert('Successfully Login');
    window.location.href = 'index.php';
    </script>
    ";
}

else {
    echo "
    <script>
    alert('Incorrect Email or Password');
    window.location.href = 'login.php';
    </script>
    ";

}
?>