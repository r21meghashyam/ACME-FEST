<?php 
include("sql.php");
$con=mysqli_connect($host,$name,$pass,$db);
if(!$con)
	echo mysqli_connect_error();
$result=mysqli_query("select * from registrar");
if(!$result)
	echo mysqli_error($con);
?>