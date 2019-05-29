<?php 

$college=isset($_POST['college'])?$_POST['college']:error(1);
$count=isset($_POST['count'])?$_POST['count']:error(2);
$mobile=isset($_POST['mobile'])?$_POST['mobile']:error(3);
$email=isset($_POST['email'])?$_POST['email']:error(4);
$housing=isset($_POST['housing'])?$_POST['housing']:'no';
$ThePhenom=isset($_POST['ThePhenom'])?$_POST['ThePhenom']:0;
$TheExplorist=isset($_POST['TheExplorist'])?$_POST['TheExplorist']:0;
$TheTranquilists1=isset($_POST['TheTranquilists1'])?$_POST['TheTranquilists1']:0;
$TheTranquilists2=isset($_POST['TheTranquilists2'])?$_POST['TheTranquilists2']:0;
$TheAltruists1=isset($_POST['TheAltruists1'])?$_POST['TheAltruists1']:0;
$TheAltruists2=isset($_POST['TheAltruists2'])?$_POST['TheAltruists2']:0;
$TheFin_analyist1=isset($_POST['TheFin-analyist1'])?$_POST['TheFin-analyist1']:0;
$TheFin_analyist2=isset($_POST['TheFin-analyist2'])?$_POST['TheFin-analyist2']:0;
$B_questa1=isset($_POST['B-questa1'])?$_POST['B-questa1']:0;
$B_questa2=isset($_POST['B-questa2'])?$_POST['B-questa2']:0;
$TheKafkaesqueCorporate=isset($_POST['TheKafkaesqueCorporate'])?$_POST['TheKafkaesqueCorporate']:0;
$con;
include("sql.php");
$con=mysqli_connect($host,$name,$pass,$db);
if(!$con)error(5);


function error($c){
	
	header("Location: /register?e=".$c);
	exit;
}

function getid($con){
$id=strtoupper(base64_encode(rand(100,999)));
$result=mysqli_query($con,"select id from registrar where id='".$id."'");
if(!$result)
	error(6);
$result=mysqli_fetch_array($result);

if($result['id']==$id)
	return getid($con);
else
	return $id;
}
$id=getid($con);

$s="INSERT INTO registrar(id,college,count,mobile,email,housing,ThePhenom,TheExplorist,TheTranquilists1,TheTranquilists2,TheAltruists1,TheAltruists2,TheFin_analyist1,TheFin_analyist2,B_questa1,B_questa2,TheKafkaesqueCorporate,regtime) 
	values(
	'".$id."',
	'".htmlspecialchars($college,ENT_QUOTES)."',
	'".htmlspecialchars($count,ENT_QUOTES)."',
	'".htmlspecialchars($mobile,ENT_QUOTES)."',
	'".htmlspecialchars($email,ENT_QUOTES)."',
	'".htmlspecialchars($housing,ENT_QUOTES)."',
	'".htmlspecialchars($ThePhenom,ENT_QUOTES)."',
	'".htmlspecialchars($TheExplorist,ENT_QUOTES)."',
	'".htmlspecialchars($TheTranquilists1,ENT_QUOTES)."',
	'".htmlspecialchars($TheTranquilists2,ENT_QUOTES)."',
	'".htmlspecialchars($TheAltruists1,ENT_QUOTES)."',
	'".htmlspecialchars($TheAltruists2,ENT_QUOTES)."',
	'".htmlspecialchars($TheFin_analyist1,ENT_QUOTES)."',
	'".htmlspecialchars($TheFin_analyist2,ENT_QUOTES)."',
	'".htmlspecialchars($B_questa1,ENT_QUOTES)."',
	'".htmlspecialchars($B_questa2,ENT_QUOTES)."',
	'".htmlspecialchars($TheKafkaesqueCorporate,ENT_QUOTES)."',
	'".time()."'
	)";
	
	mysqli_query($con,$s)||error(7);

header("Location: /success?id=".$id);
?>