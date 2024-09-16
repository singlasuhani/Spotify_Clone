<?php
    $fnm=$_POST['txtFirstName'];
    $lnm=$_POST['txtLastName'];
    $unm= $_POST['txtFirstName'] . ' ' . $_POST['txtLastName'];
    $cno= $_POST['txtCno'];
    $u_email=$_POST['txtEmail'];
    $u_pwd=$_POST['txtPassword'];


  //  $FirstNamepattern =  "/^[A-Za-z ]+$/"    ;
   // $LastNamepattern =  "/^[a-zA-Z]{2,30}$/";

    //$ContactNo = /^[0-9]{10}$/;
    //$emailPattern = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    //$passwordpattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$/;


/*
    if( preg_match($FirstNamepattern, $fnm)==0 )
    {
        header("Location:signup.php?er=1");
    }
    else if( preg_match($LastNamepattern, $lnm)==0 )
    {
        header("Location:signup.php?er=2");
    }
    else
    {
        header("Location:signup.php?er=0");
    }

*/

    include('conn.php');
    $sql = "INSERT INTO user_det(User_Nm,User_contact, User_email,User_pwd,user_ty) VALUES ('$unm','$cno','$u_email','$u_pwd','USER')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "<script>alert('New record not created successfully');</script>";
    }
  

    header("Location:LoginSpotify.php");
?>