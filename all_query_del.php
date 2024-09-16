<?php
include("conn.php");
$sql = "DELETE FROM contact_us WHERE Email='".$_GET['em']."'"   ;
echo $sql;
if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Query is deleted successfully');</script>";
} else {
  echo "<script>alert(' Query is not deleted successfully');</script>";
}

mysqli_close($conn);
header("Location:all_queries.php");
?>