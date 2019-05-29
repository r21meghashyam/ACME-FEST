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
			
			.person{
				width:200px;
				height:200px;
				transition: transform 1s;
			}
			.core.person{
				width:300px;
				height:300px;
			}
			.person .name {
				display: inline-block;
				width:100%;
				text-align: center;
				margin:0px;
				margin-top:-20px;
				background:#ff4242;
				color:#EEE;
			}
			.person img{
				width:100%;
				height: 90%;
				min-height: none;
				min-width: none;
				border-radius: 0px;
			}
						@media screen and (max-width: 1200px) {
							.person {
								display:block;
								width:90%;
								height:250px;
							}
						.menu-bar {
				display: inline-block!important;
			}
						}
			/*.person:hover{
				-ms-transform: scale(2,2); 
                 -webkit-transform: scale(2,2);
                  transform: scale(2,2);
			}*/
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
			<div class="nav-closer">
			</div>
			<?php 
				include('nav.php');
			?>
		</header>
		<section>
			<div>
				<div class="heading" style="font-size:20px;">
					The Team
				</div>
				<div class="grey core">
					<div class="heading">
						Core Members
					</div>
					<div>
						<?php 
						function create($e,$n){
							$f=scandir($e);
							for($i=2;$i<count($f);$i++){
							?>
						<a href="#">
							<div class="person">
								<img src="<?php echo $e."/".$f[$i];  ?>">
								<div class="name"><?php
											$info = pathinfo($f[$i]);
								 echo ($n!=0)?$n:basename($f[$i],'.'.$info['extension']);  ?></div>
							</div>
						</a>
							<?php
							}
						}
							
							create("core-members",0);
						
						?>
						
					</div>
				</div>
				<div>
					<div class="heading">
						Event Heads
					</div>
					<div>
						<?php 
						create("event-heads","Event Head");
							
						?>
						
					</div>
				</div>
			</div>
			<footer class="grey">
				&copy; 2017 - ACME Fest
			</footer>
		</section>
	</body>
</html>