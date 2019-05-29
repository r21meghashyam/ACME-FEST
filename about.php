<!docytype html>
<html>
	<head>
		<title>ACME | About</title>
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
					About Aloysius
				</div>
				<div style="text-align: center;">
					<img src="/assets/images/college.jpg" style="width:100%">

				</div>
				<div>
					The St. Aloysius College, Mangalore, is managed by the Mangalore Jesuit Educational Society which is registered under the Societies Registration Act, 1860, and admits students without discriminating against any religion, caste or creed. It seeks to establish a collegial environment in which those of diverse cultural backgrounds and religious beliefs can participate in the community in a spirit of co-operation and mutual respect. The student population is currently 14,000. Apart from academics the college is well known for National level fests such as Composite, ACME, Art Beat, Imprints, Asthitva, Spin Out, etc.
				</div>
				<div class="grey">
				<div class="heading" style="font-size:20px;">
					About ACME
				</div>
				<div style="text-align: center;">
					<img src="/assets/images/icon.png" style="width:50%">

				</div>
				<div >
					ACME is a two day national level commerce fest conducted by students and staff of Department of Commerce, St. Aloysius College. ACME is a promising event and every year it gets bigger and better. The theme for this years ACME is "The Calm and Chaos". 
				</div>
				</div>
			</div>
			<footer class="grey">
				&copy; 2017 - ACME Fest
			</footer>
		</section>
	</body>
</html>