<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback= $_POST['feedback'];
  


    include('conn.php');
    $sql = "INSERT INTO feedback_form(Name,Email,Description) VALUES ('$name','$email','$feedback')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record created successfully');</script>";

    } else {
        echo "<script>alert('New record not created successfully');</script>";
    }
    header("Location:FeedbackSpotify.php");
  ?>