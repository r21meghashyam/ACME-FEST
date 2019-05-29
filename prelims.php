<!docytype html>
<html>
	<head>
		<title>ACME | Prelims</title>
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

			.heading{
				font-size:1em;
			}
			.container>div{
				width:49%;
				display: inline-block;
			}
			.container img{
				width: 100%;
			}
			.container div{
				vertical-align: middle;
				text-align: center;
				padding: 4px;
				font-size:3em;

			}
			.container a{
				color:#555;
			}
			.grey .container div a{
				color:#FFF;
			}
			.contailer div a:hover{
				color:#DDD;
			}
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
			
			@media screen and (max-width: 1200px) {
				.container>div {
					display:block;
					width:100%;
					
				}
				.menu-bar {
				display: inline-block!important;
			}
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
					Prelims
				</div>
				<div class="grey">
					<div class="heading">
						<a name="ThePhenom">The Phenom</a>
					</div>
					<div class="container">
						
						<div >
							<a href="/assets/docs/THE PHENOM.docx" class="fa fa-cloud-download">Download</a>
						</div>
						<div>
							<img src="/assets/images/ThePhenom.jpg">
						</div>
					</div>
				</div>
				<div>
					<div class="heading">
						<a name="TheKafkaesqueCorporate">The Kafkaesque Corporate</a>
					</div>
					<div class="container">
						<div>
							<img src="/assets/images/TheKafkaesqueCorporate.jpg">
						</div>
						<div >
							<a href="/assets/docs/THE KAFKAESQUE CORPORATE.docx" class="fa fa-cloud-download">Download</a>
						</div>
					</div>
				</div>
				<div class="grey">
					<div class="heading">
						<a name="TheExplorist">The Explorist</a>
					</div>
					<div class="container">
						
						<div >
							<a href="/assets/docs/THE EXPLORIST.docx" class="fa fa-cloud-download">Download</a>
						</div>
						<div>
							<img src="/assets/images/TheExplorist.jpg">
						</div>
					</div>
				</div>
			</div>
			<footer class="grey">
				&copy; 2017 - ACME Fest
			</footer>
		</section>
	</body>
</html>