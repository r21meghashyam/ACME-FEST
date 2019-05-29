<?php 
include("sql.php");
$con=mysqli_connect($host,$name,$pass,$db);
if(!$con)
	header('Location: /index.php');
$result=mysqli_query($con,"select * from registrar where id='".$_GET['id']."'");
if(!$result)
	header('Location: /index.php');
$result=mysqli_fetch_array($result);

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>ACME | Your dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon"  href="/assets/icon.png">
		<script src="/assets/js/jquery.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90986132-1', 'auto');
  ga('send', 'pageview');

</script>
		<style>
		 input {
		 	background-color: transparent;
		 	font-size: 20px;
		 	margin:20px; 
		 	transition: border 1s;
		 	width:90%;
		 }
		 .grey input{
		 	color:#FFF;
		 }
		 input{
		 	color:#555;
		 }

		 .grey input:focus{
		 	border-bottom: 1px solid #FFF;
		 }
		 input:focus{
		 	border-bottom: 1px solid #555;
		 }
		 .dialog-closer{
		 	position:fixed;
		 	top:0px;
		 	left:0px;
		 	right:0px;
		 	bottom:0px;
		 	width:100%;
		 	background:rgba(0,0,0,0.5);
		 	display: none;
		 	text-align: center;
		 }
		 .dialog{
		 	display: inline-block;
		 	margin:auto;
		 	background-color:#FFF;
		 	margin-top:15%;
		 	border-radius: 2px;
		 	min-width: 300px;
		 	max-width: 700px;
		 	
		 }
		 .dialog-header{
		 	padding:10px;
		 	background-color: #ff4242;
		 	color:#FFF;
		 	font-weight: 800;
		 }
		 .event {
		 	width:100px!important;
		 	margin:10px!important;
		 	display:inline-block!important;

		 }
		 .event img{
		 	width:100px!important;
		 	height:100px!important;
		 	opacity: 0.6;
		 	box-shadow: none;
		 }
		 .event.checked img{
		 	box-shadow: 0px 0px 20px #ff4242;
		 	opacity: 1.0;
		 }
		.event,.dialog-close,.button{
			cursor:pointer;
		}
		.event-image{
			width:100px;
			display: inline-block;
		}
		.name {width:70%;
			display: inline-block;
			vertical-align: top;}
		.participant h3{
			margin-left: 20px;
		}
		.participant {
			margin:40px;
		}
		.row{
			
		}
		.row div{
			width:40%;
			text-align: left;
			vertical-align: top;
		}
		.table .row>div
		{
			display: inline-block;
			padding:20px;

		}
		</style>
	</head>
	<body>

		<header>
			<div class="title">
				<img src="/assets/images/logo.svg" />
				<span>
					<span>ACME 2K17</span><br>
					<span class="theme">The Calm and Chaos</span>
				</span>
			</div>
			<div class="menu-bar fa fa-bars">
			</div>
			<?php 
				include('nav.php');
			?>
		</header>
		<form action="process-register.php" method="post">
		<section>
			<div>
				<div class="heading" style="font-size:20px;">
					<?php 
					echo  $result['college'];?>

				</div>
				<div class="grey">
					Your registration was successfull! Please note your registration id as it is very imporatant.

				</div>
				<div style="text-align:center">
					<div class="table">
						<div class="row grey">
							<div>ID</div>
							<div style="font-family: monospace;font-size:20px"><?php echo $result["id"];?></div>
						</div>
						<div class="row">
							<div>College</div>
							<div><?php echo $result["college"];?></div>
						</div>
						<div class="row grey">
							<div >Team Strength</div>
							<div><?php echo $result["count"];?></div>
						</div>
						<div class="row">
							<div >Mobile</div>
							<div><?php echo $result["mobile"];?></div>
						</div>
						<div class="row grey">
							<div >Email Id</div>
							<div><?php echo $result["email"];?></div>
						</div>
						<div class="row grey" style="background-color: #ff4242;color:#FFF;padding:20px;">Participants</div>

						<div class="row">
							<div >The Phenom</div>
							<div><?php echo $result["ThePhenom"];?></div>
						</div>
						
						<div class="row grey">
							<div >The Kafkaesque Corporate</div>
							<div><?php echo $result["TheKafkaesqueCorporate"];?></div>
						</div>
						
						<div class="row">
							<div >The Explorist</div>
							<div><?php echo $result["TheExplorist"];?></div>
						</div>
						<div class="row grey">
							<div >The Tranquilists</div>
							<div><?php 
								echo "1. ".$result["TheTranquilists1"];
								echo "<br>2. ".$result["TheTranquilists2"];
								?>
							
							</div>
						</div>
					
						<div class="row">
							<div >The Altruists</div>
							<div><?php 
								echo "1. ".$result["TheAltruists1"];
								echo "<br>2. ".$result["TheAltruists2"];
								?>
								
							</div>
						</div>
						<div class="row grey">
							<div >The Fin-analyist</div>
							<div><?php 
								echo "1. ".$result["TheFin_analyist1"];
								echo "<br>2. ".$result["TheFin_analyist2"];
								?>
								
							</div>
						</div>
						<div class="row">
							<div >B-questa</div>
							<div><?php 
							echo "1. ".$result["B_questa1"];
							echo "<br>2. ".$result["B_questa2"];
							?></div>
						</div>
					</div>
				</div>
				<div>
					Print the letter from the following link. This letter should be signed by person-in-charge of your college.
					<div style="text-align: center;padding:30px;">
						<a class="button" style="font-family: courier" href="/letter?id=<?php echo $result['id']; ?>">Open Letter</a>
					</div>
				</div>
			</div>
			<footer class="grey">
				&copy; 2017 - ACME Fest
			</footer>
		</section>
		</form>
		
	</body>
</html>