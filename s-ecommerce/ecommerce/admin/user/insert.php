<?php

$con = mysqli_connect('localhost', 'root','','secommerce');

if(isset($_POST['submit'])){
    include 'config.php';
     $Name = $_POST['name'];
     $Email = $_POST['email'];
     $Number = $_POST['number'];
     $Password = $_POST['password'];

 $Dup_Email = mysqli_query ($con, "SELECT * FROM `tbl_user` WHERE Email =  '$Email' ");
 $Dup_username = mysqli_query ($con, "SELECT * FROM `tbl_user` WHERE username =  '$Name' ");

 if(mysqli_num_rows($Dup_Email)){
    echo "
    <script>
    alert('THIS EMAIL IS ALREADY TAKEN');
    window.location.href = 'register.php'
    </script> 
    ";

}

if(mysqli_num_rows($Dup_username)){
    echo "
    <script>
    alert('THIS Username IS ALREADY TAKEN');
    window.location.href = 'register.php'
    </script> 
    ";

}


else{

    mysqli_query($con, "INSERT INTO `tbl_user`(`username`, `email`, `number`, `password`) VALUES 
    ('$Name','$Email','$Number','$Password')");
    echo "
    <script>
    alert('Register Successfully');
    window.location.href = 'login.php'
    </script> 
    ";

}



}


?>