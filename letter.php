<?php 
include("sql.php");
$con=mysqli_connect($host,$name,$pass,$db);
if(!$con)
	header('Location: /');
$result=mysqli_query($con,"select * from registrar where id='".$_GET['id']."'");
if(!$result)
	header('Location: /');
$result=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css"  href="/assets/css/letter.css">


</head>
<body>

<div class="hiddendiv common"></div><div class="wrap">
    <page size="a4">
      <div class="">
        <header>
          <div class="leftSide">
            <img src="/assets/images/college-logo.jpg" alt="Aloysius Logo" class="inline-block">
            <div class="inline-block">
              <strong class="block">St Aloysius College (Autonomous)</strong>
              <strong class="block">Mangaluru - 575 003, Karnataka</strong>
              <small class="block">Re-accredited by NAAC with ‘A’ Grade - CGPA 3.62 (3rd Cycle)</small>
              <small class="block">Recognized by UGC as "College with Potential for Excellence"</small>
            </div>
            <img src="/assets/images/acme-bw.jpg" alt="COMPOSITE 2k17 Logo" class="inline-block right">
          </div>

        </header>
        <h5 class="align-center">Letter of Permission</h5>
        <div class="letter-body">
          Regisrtation ID: <strong><?php echo $result['id']?></strong>
          <p>College Name: <strong><?php echo $result['college']?></strong></p>
          <strong>To whom it may concern,</strong>
          <p class="indent">This document when duly filled grants the students of your department listed below explicit permission to participate in various events conducted at the National Level Inter-Collegiate Level Fest ACME 2k17 by the Department of BCom of St Aloysius Degree College (Autonomous), Mangalore on the dates 02 &amp; 03 of February 2017</p>
        </div>
        <h5>
          Participants List
        </h5>
        <ol class="participants">
          <?php 
          	for($i=6;$i<17;$i++)
          		if($result[$i]!="0")
          echo "<li>".$result[$i]."</li>";
          ?>
        </ol>
      </div>
      <div class="signature-box">
        <span>(Authorized Signature)</span>
      </div>
      <small>
        <p class="center">
          <i>this form can be signed by any authorative member of the college (Dean/HOD/Principal/Staff in-charge)</i>
        </p>
      </small>
    </page>
  </div></body></html>