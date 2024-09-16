<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message= $_POST['message'];
  


    include('conn.php');
    $sql = "INSERT INTO contact_us(Name,Email,Message) VALUES ('$name','$email','$message')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record created successfully');</script>";

    } else {
        echo "<script>alert('New record not created successfully');</script>";
    }
    header("Location:contactus.php");
  ?>