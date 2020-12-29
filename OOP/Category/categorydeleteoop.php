<?php
include ("classes.php");
$id=$_GET['id'];
$x->deletecategory($conn,$id);
header("location:oopcategory.php");
?>