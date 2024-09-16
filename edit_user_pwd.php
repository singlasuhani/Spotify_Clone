<?php

$email= $_POST['txtEmail'];
$n_pwd=$_POST['txtConPassword'];
include("conn.php");
    $sql="update user_det set User_pwd='$n_pwd' where User_email='$email'";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
    echo"<script>alert('New Password Successfully Changed.... ');</script>";
    }
    else
    {
        echo"<script>alert('New Password not Successfully Changed.... ');</script>";
        
    }
    header("Location:all_user.php");
?>