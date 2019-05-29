<?php 
session_start();
if(empty($_SESSION['logged-in']))
{
	header("Location: index.php?e=1");
	exit;
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>ACME | Dashboard</title>
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
		 .table {
		 	display:inline-block;
		 	border:1px solid #ff4242;
		 }
		 .row>div{
		 	display: inline-block;
		 	padding:20px;
		 	text-align: left;
		 	width:40%;
		 }
		.row>div:last-child{
			text-align: right;
		}
		 .table-head{
		 	background:#ff4242;
		 }
		 .white {
		 	background-color: #FFF;
		 	color:#555!important;
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
			<nav>
				<ul>
					<a href="/"><li>Home</li></a>
					<a href="#"><li>Events</li></a>
					<a href="/contacts"><li>Contact</li></a>
					<a href="/about"><li>About</li></a>
				</ul>
			</nav>
		</header>
		<form action="process-login.php" method="post">
		<section>
			<div>
				<div class="heading" style="font-size:20px;">
					Dashboard
				</div>
				<div class="grey">
					<h3>Registered Colleges:</h3>
					<div style="text-align: center;">
							<div class="table">
								<div class="table-head row">
									<div>College</div>
									<div>ID</div>
								</div>
							<?php 

							include("../sql.php");
							$con=mysqli_connect($host,$name,$pass,$db);
							if(!$con)
								die("Could not connect to database");
							$result=mysqli_query($con,"SELECT college,id FROM registrar");
							if(!$result)
								die("Could not retrive from database");
							$i=0;
							while(($r=mysqli_fetch_row($result))!=false){
								echo '<div class="'.($i++%2==0?"white":"grey").' row">'.
										'<div>'.$r[0].'</div>'.
										'<div><a target="_new" href="/success?id='.$r[1].'">'.$r[1].'</a></div>'.
									'</div>';
							}
							?>
							
													
						
						</div>
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