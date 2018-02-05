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
			<h3>Donate Details</h3>
			<div class="tablede">
			<table >
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile Number</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Organ</th>
					<th>Blood</th>
					<th>Address</th>
					<th>Country</th>
				</tr>
				<?php
				$sql="select * from donate d,user u where d.uid=u.uid";
				$result=mysql_query($sql);
				while($row=mysql_fetch_assoc($result))
				{
				?>
				<tr>
				<td><?php  echo $row['name'] ?></td>
				<td><?php  echo $row['email'] ?></td>
				<td><?php  echo $row['mobile'] ?></td>
				<td><?php  echo $row['age'] ?></td>
				<td><?php  echo $row['gender'] ?></td>
				<td><?php  echo $row['organ'] ?></td>
				<td><?php  echo $row['blood'] ?></td>
				<td><?php  echo $row['address'] ?></td>
				<td><?php  echo $row['country'] ?></td>
				
				</tr>
				<?php	
				}
				?>
				
			</table>
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