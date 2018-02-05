<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include('includes/db_utilities.php');// database connection 
$link = new DB(); //object
?>
<!DOCTYPE html>
<html>
<head>
<title>Organ Donation Portal</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<div class="line" style="width: 100%">
</div>
<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			
			<div class="col-md-7 contact-left">
				<h3>Donate Details</h3>
				<?php 
				$search=$_POST['search'];
				
				$sql="select * from donate d,user u where d.uid=u.uid and d.organ LIKE '%$search%'";
				$result=mysql_query($sql);
				while($row=mysql_fetch_assoc($result))
				{
				?>
				<p><font color="red">Organ:</font>&nbsp;<?php echo $row['organ'] ?></p>
				<p><font color="red" style="float:right;margin-left:200px">Name:</font>&nbsp;<?php echo $row['name'] ?></p>
				<p><font color="red">Age:</font>&nbsp;<?php echo $row['age'] ?></p>
				<p><font color="red">Blood:</font>&nbsp;<?php echo $row['blood'] ?></p>
				<p><font color="red" >Addres'':</font>&nbsp;<?php echo $row['address'] ?></p>
				<p><font color="red" style="float:right">Mobile:</font>&nbsp;<?php echo $row['mobile'] ?></p>
				<p><font color="red">Email:</font>&nbsp;<?php echo $row['email'] ?></p>
				<p><font color="red">Country:</font>&nbsp;<?php echo $row['country'] ?></p>
				
				<p><br/>     </p>
				<?php	
				}
				?>
				<p></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
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