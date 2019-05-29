<!docytype html>
<html>
	<head>
		<title>ACME | Error <?php echo $_GET["e"];?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon"  href="/assets/icon.png">
		<style>
		
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
		<section>
			<div>
				<div class="heading" style="font-size:20px;">
					ERROR!
				</div>
				<div>
					Sorry, we could not find the page you were looking for!
				</div>
			</div>
			<footer class="grey">
				&copy; 2017 - ACME Fest
			</footer>
		</section>
	</body>
</html>