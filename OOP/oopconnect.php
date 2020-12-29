<?php
class connect{

function __construct(){

$conn= mysqli_connect("localhost","root","","database 1");

if (!$conn)
	{die("cannot connect ot server");}
}
}


   ?>
