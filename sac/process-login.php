<?php 
if(empty($_POST['pass']))
	error(1);

$pass=$_POST['pass'];
if($pass!="SACME2K17C&C")
	error(2);
session_start();
$_SESSION['logged-in']=true;
header("Location: dashboard.php");
function error($c){
	header("Location: index.php?e=".$c);
	exit;
}
?>