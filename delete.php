<?php
include 'conne.php';

$UserID = $_GET['UserID'];
$query = "DELETE FROM `register` WHERE UserID = $UserID ";


mysqli_query($conn, $query);
header('location:display.php');

 ?>
