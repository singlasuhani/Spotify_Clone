<?php
 session_start();
 $u_email=$_POST['txtEmail'];
 $u_pwd=trim($_POST['txtPassword']," ");

 echo"#####".$u_pwd."###";
 $uty="";
 include("conn.php");
 $sql = "SELECT * FROM User_det WHERE User_email='$u_email' AND User_pwd='$u_pwd'";
echo $sql;
 $result = mysqli_query($conn, $sql);

 echo (mysqli_num_rows($result));
if (mysqli_num_rows($result) ==1) {
  // output data of each row
  echo "<br>ok";
  $row = mysqli_fetch_assoc($result); 
    echo $frow['USER_TY'];
    $uty= $row["USER_TY"];
    $_SESSION["user_lg"]= $row["User_Nm"]."[".$row["User_email"]."]";
  




echo "user".$uty;

echo "<script>".$_SESSION["user_lg"]."</script>";
if( $uty=="USER") 
header("Location:Spotify.php");
else
header("Location:AdminPanel.php");

} 

else {
    $_SESSION["user_lg"]="guest";
  echo "<script>alert('User Email Id or Password Invalid') </script>";
  header("Location:LoginSpotify.php?ch=1"); 
}

mysqli_close($conn);



?>