<?php
include("conn.php");
$sql = "DELETE FROM user_det WHERE User_email='".$_GET['em']."'"   ;
echo $sql;
if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record is deleted successfully');</script>";
} else {
  echo "<script>alert('Record is not deleted successfully');</script>";
}

mysqli_close($conn);
header("Location:all_user.php");
?>