<!docytype html>
<html>
	<head>
		<title>ACME | Team</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon"  href="/assets/icon.png">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90986132-1', 'auto');
  ga('send', 'pageview');

</script>
		<script src="/assets/js/jquery.js"></script>
		<script src="/assets/js/nav.js"></script>
		<style>
		.event-head {
				display: inline-block;
				background:#ff4242;
				
				margin:20px;
			}
			.event-head>*{
				padding:5px 8px;
			}
			.event-head .name{
				color:#EEE;
			}
			.event-head .contact{
				background:#EEE;
				color:#ff4242;;
			}
		</style>
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
			<div class="nav-closer">
			</div>
			<?php 
				include('nav.php');
			?>
		</header>
		<section>
			<div>
				<div class="heading" style="font-size:20px;">
					Contacts
				</div>
				<div>
				<h3>Student Co-ordinators:</h3>
				<div class="grey">
					<div class="event-head"><div class="name">Mr. Jason Rebello</div><div class="contact">9449505489</div></div>
					<div class="event-head"><div class="name">Ms. Chelsea D'Souza</div><div class="contact">7204157266</div></div>
				</div>
				</div>
				<div>
				<h3>Staff Co-ordinators:</h3>
				<div class="grey">
					<div class="event-head"><div class="name">Mr. Datta Kumar</div><div class="contact">9449505489</div></div>
					<div class="event-head"><div class="name">Ms. Bharathi R.</div><div class="contact">7204157266</div></div>
					<div class="event-head"><div class="name">Ms. Helma Rodrigues</div><div class="contact">7204157266</div></div>
				</div>
				</div>
				<div>
				<div class="grey">
					<div class="event-head"><div class="name">Email Id</div><div class="contact">sacacme@gmail.com</div></div>

					<div class="event-head"><div class="name">Address</div><div class="contact" style="text-align: center;">
					Arrupe Block of Commerce and Management<br>
					St. Aloysius College (Autonomous)<br>
					Light House Hill Road, Kodialbail, Mangalore - 575003</div></div>

					</div>
				</div>
			</div>
			<footer class="grey">
				&copy; 2017 - ACME Fest
			</footer>
		</section>
	</body>
</html>