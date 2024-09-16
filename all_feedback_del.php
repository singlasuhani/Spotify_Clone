<?php
include("conn.php");
$sql = "DELETE FROM feedback_form WHERE Email='".$_GET['em']."'"   ;
echo $sql;
if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Feedback is deleted successfully');</script>";
} else {
  echo "<script>alert('Feedback is not deleted successfully');</script>";
}

mysqli_close($conn);
header("Location:all_feedbacks.php");
?>