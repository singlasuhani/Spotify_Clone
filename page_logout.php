<?php
session_start();
error_reporting(0);
$_SESSION["user_lg"]="guest";
header("Location:Spotify.php");
?>