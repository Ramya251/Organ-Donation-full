<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Organ Donation Portal</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Help Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>

<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>	
<body>

<!-- header -->
	<?php
	include('header.php');
	?>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						
					</ul>
				</div>
			</section>
			<!--FlexSlider-->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
		</div>
	</div>
<!-- //banner -->
<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<h3>Welcome !</h3>
			<div class="line">
			</div>
			<p class="et">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
				consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt 
				ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			<div class="welcome-grids">
				<div class="col-md-6 welcome-grid">
					<div class="welcome-grid-left">
						<h4>magnam aliquam quaerat voluptatem</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					<div class="welcome-grid-right">
						<img src="images/1.png" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 welcome-grid">
					<div class="welcome-grid-right aliquam">
						<img src="images/2.png" alt=" " class="img-responsive" />
					</div>
					<div class="welcome-grid-left non">
						<h4>magnam aliquam quaerat voluptatem</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="welcome-grids">
				<div class="col-md-6 welcome-grid">
					<div class="welcome-grid-left">
						<h4>magnam aliquam quaerat voluptatem</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					<div class="welcome-grid-right">
						<img src="images/3.png" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 welcome-grid">
					<div class="welcome-grid-right aliquam">
						<img src="images/4.png" alt=" " class="img-responsive" />
					</div>
					<div class="welcome-grid-left non">
						<h4>magnam aliquam quaerat voluptatem</h4>
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt 
							ut labore et dolore magnam aliquam quaerat voluptatem</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //welcome -->
	
	<!--/animatedcss-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--script-->
<!-- //footer -->
</body>
</html>