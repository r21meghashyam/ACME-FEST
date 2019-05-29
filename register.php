<!DOCTYPE HTML>
<html>
	<head>
		<title>ACME | Register your team</title>
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
							
							if(event=="TheTranquilists"||event=="TheAltruists"||event=="TheFin-analyist"||event=="B-questa"){
								p='<h3>Participant 1 name</h3>'+
								'<input type="text" name="'+event+'1" placeholder="Enter participant name" required="required">'+
								'<h3>Participant 2 name</h3>'+
								'<input type="text" name="'+event+'2" placeholder="Enter participant name" required="required">';
								count+=2;
							}
							else{
								p='<h3>Participant name</h3>'+
								'<input type="text" name="'+event+'" placeholder="Enter participant name" required="required">';
								count++;
							}
							$('.participants').append(
								'<div class="participant" data-id="'+event+'">'+
								'<a href="/events#'+event+'"><img class="event-image" src="/assets/images/'+event+'.jpg"></a>'+
								'<div class="name">'+
								p+
								'</div>'+
								'</div>');
							

						}
						else{
							if(event=="TheTranquilists"||event=="TheAltruists"||event=="TheFin-analyist"||event=="B-questa")
								count-=2;
							else
								count--;
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
			<?php 
				include('nav.php');
			?>
		</header>
		<form action="process-register.php" method="post">
		<section>
			<div>
				<div class="heading" style="font-size:20px;">
					Register

				</div><div>
				<?php if(isset($_GET['e'])){
					$c=$_GET['e'];
					switch($c){
		case 1: $c="Please enter your college name and register.";break;
		case 2: $c="Please enter your team strength and register.";break;
		case 3: $c="Please enter your mobile number and register.";break;
		case 4: $c="Please enter your email id and register.";break;
		case 5: 
		case 6: 
		case 7: $c="Database error(".$c.").  Please infrom about it to any  of our event heads.";break;
		default:$c=0;
	}
					echo '<div style="color:#900;font-weight:bold;">'.$c.'</div><br>';

				}
				?>
				<a style="color:#900;padding:20px;" href="login.php">if already registered click here</a></div>
				<div class="grey">
					College <span style="font-size:12px;">(include department if necessary)</span> : <input type="text" name="college" placeholder="Enter your college name" required="required">
				</div>
				
				<div>
					<div class="button" id="select-events">Select Events</div>
				</div>
				<div class="participants grey">
					
				</div>
				<div>
					Team Stength: <input type="number" name="count" id="count" max="11" placeholder="Enter number of people attending fest" required="required">
					<div><label for="outstationed">If outstationed participants, Housing arragnements required?</label>
					
						<div class="slider" id="slider" data-state="no" style="background-color:#ff4242;color:#FFF;font-weight:900;display: inline;border-radius: 100px;padding:5px;">
							<span class="yes" style="padding:2px;display: none">Yes</span>
							<i class="fa fa-circle" style="font-size:20px;color:#FFF;text-shadow:0px 0px 10px #555;line-height: 2;position: relative;"></i>
							<span class="no">No</span>
						</div>
						<input type="hidden" name="housing" value="no">

					
					</div>
				</div>
				<div class="grey">
					Mobile Number: <input type="tel" name="mobile" pattern="\+91+{10}" id="mobile"  placeholder="Enter mobile number" required="required">
				</div>
				<div>
					Email Id: <input type="email" name="email" id="email" placeholder="Enter E-mail id" required="required">
				</div>
				<div style="text-align:center;">
					<button style="color: #fff;display:inline-block;font-family: crushed;padding:30px;background: #41a752;font-size:20px;border-radius: 10px;box-shadow: 0px 0px 25px #009935;text-shadow: 0px 0px 25px #fff;margin:40px 10px;">
							
							REGISTER
							</button>
				</div>
			</div>
			<footer class="grey">
				&copy; 2017 - ACME Fest
			</footer>
		</section>
		</form>
		<div class="dialog-closer">
		<div class="dialog">
			<div class="dialog-header">Select events
			<div class="dialog-close fa fa-close" style="float:right;font-size:20px;padding:10px;margin:-10px;" title="close dialog"></div>
			</div>
			<div>
				<div class="event" id="ThePhenom">
					<img src="/assets/images/ThePhenom.jpg">
				</div>
				<div class="event" id="TheKafkaesqueCorporate">
					<img src="/assets/images/TheKafkaesqueCorporate.jpg">
				</div>
				<div class="event" id="TheExplorist">
					<img src="/assets/images/TheExplorist.jpg">
				</div>
				<div class="event" id="TheTranquilists">
					<img src="/assets/images/TheTranquilists.jpg">
				</div>
				<div class="event" id="TheAltruists">
					<img src="/assets/images/TheAltruists.jpg">
				</div>
				<div class="event" id="TheFin-analyist">
					<img src="/assets/images/TheFin-analyist.jpg">
				</div>
				<div class="event" id="B-questa">
					<img src="/assets/images/B-questa.jpg">
				</div>
			</div>
			<div style="padding:20px">
				<div class="button dialog-close">Done</div>
			</div>
		</div>
		</div>
	</body>
</html>