<?php
include ("classes.php");
$id=$_GET['id'];
$n->deleteproduct($conn,$id);
header("location:oopproduct.php");
?>