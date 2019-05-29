<!DOCTYPE HTML>
<html>
	<head>
		<title>ACME | Member Login</title>
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
		</style>
		<script>
			$(document).ready(function(){
					//$(".fa-circle").css("left","-"+$(".yes").outerWidth()+"px");
					$("#select-events").click(function(){
						console.log(0);
						$(".dialog-closer").fadeIn();
					});

					$(".dialog-close").click(function(){
						$(".dialog-closer").fadeOut();
					});
					$(".event").click(function(){
						$(this).toggleClass("checked");
						event=$(this).attr('id');
						count=Number($('#count').val());
						if($(this).hasClass("checked")){
							
							$('.participants').append(
								'<div class="participant" data-id="'+event+'">'+
								'<a href="/events#'+event+'"><img class="event-image" src="/assets/images/'+event+'.jpg"></a>'+
								'<div class="name">'+
								'<h3>Participant name</h3>'+
								'<input type="text" name="'+event+'" placeholder="Enter participant name" required="required">'+
								'</div>'+
								'</div>');
							if(!$('#count').attr('changed'))
								count++;

						}
						else{
							$("[data-id='"+event+"']").remove();
							count--;
							}
						
						$('#count').val(count);
						$('#count').attr('min',count);
					});
					$('.slider').click(function(){
						state=$(this).attr('data-state');
						if(state=="no"){

								$('.fa-circle').animate({left:$('.no').outerWidth()-$('.fa-circle').width()});
								
									$('.no').css('display','none');
									$('.yes').fadeIn(100);
								
									$(this).attr('data-state','yes');
									$('[name=housing]').val('yes');
						}
						else{

								$('.fa-circle').animate({left:"-"+($('.yes').outerWidth()-$('.fa-circle').width()-10)});
								
									$('.yes').css('display','none');
									$('.no').fadeIn(100);
								$(this).attr('data-state','no');
								$('[name=housing]').val('no');

						}
					});
			});
		</script>
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
					Member Login

				</div><div>
				<div>
					<?php if(isset($_GET['e'])){
					$c=$_GET['e'];
					switch($c){
		case 1: $c="Please enter password and continue.";break;
		case 2: $c="Incorrect password";break;
		default:$c=0;
	}
					echo '<div style="color:#900;font-weight:bold;">'.$c.'</div><br>';

				}
				?>
				</div>
				<div class="grey">
					Password: <input type="text" name="pass" placeholder="Enter password" required="required">
				</div>
				
				<div style="text-align:center;">
					<div style="text-align: center;padding:30px;">
						<button class="button">Login</button>
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