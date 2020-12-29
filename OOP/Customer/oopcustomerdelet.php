<?php
include ("classes.php");
$id=$_GET['id'];
$z->deletecustomer($conn,$id);
header("location:oopcustomer.php");
?>