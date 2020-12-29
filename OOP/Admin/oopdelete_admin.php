<?php
include ("classes.php");
$id=$_GET['id'];
$x->delete($conn,$id);
header("location:oopadmin.php");
?>