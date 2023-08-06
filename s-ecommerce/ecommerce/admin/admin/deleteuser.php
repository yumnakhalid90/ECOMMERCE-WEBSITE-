<?php

$Id = $_GET['Id'];
$conn = mysqli_connect('localhost', 'root','','secommerce');
mysqli_query($conn, "DELETE FROM `tbl_user` WHERE Id = $Id");
header("location:user.php");



?>