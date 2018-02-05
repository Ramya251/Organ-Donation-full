
<?php
session_start();
$uid=$_SESSION['uid'];
?>
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
	include('uheader.php');
	?>
<!-- //header -->
<div class="line" style="width: 100%">
</div>
<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			
			<div class="col-md-7 contact-left">
				<h3>Donate Register</h3>
				<form action="process.php" method="post">
				<?php
				$id=intval($_GET['id']);
				$sql="select * from donate where did='$id'";
				$result=mysql_query($sql);
				while($row=mysql_fetch_assoc($result))
				{
				?>
				
					<input type="hidden" name="uid" value="<?php echo $row['did']; ?>"/>
					<input type="text" name="age" value="<?php echo $row['age'] ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Age';}" required="">
					<br/><br/><br/>
					<select name="gender" required="" style="width: 380px;height: 40px;">
						<option value="<?php echo $row['gender'] ?>"><?php echo $row['gender'] ?></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="transgender">Transgender</option>
					</select>
					<br/><br/>
					<select name="organ" required="" style="width: 380px;height: 40px;">
						<option value="<?php echo $row['organ'] ?>"><?php echo $row['organ'] ?></option>
						<option value="Any Part of My Body">Any Part of My Body</option>
						<option value="Corneas">Corneas</option>
						<option value="Kidneys">Kidneys</option>
						<option value="Heart">Heart</option>
						<option value="Lungs">Lungs</option>
						<option value="Liver">Liver</option>
						<option value="Pancreas">Pancreas</option>
					</select>
					<br/><br/>
					<select name="blood" required="" style="width: 380px;height: 40px;">
						<option value="<?php echo $row['blood'] ?>"><?php echo $row['blood'] ?></option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
					<br/><br/><br/>
					
					<input type="text" name="address" value="<?php echo $row['address'] ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
					<br/><br/><br/>
					<input type="text" name="city" value="<?php echo $row['city'] ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City';}" required="">
					<br/><br/><br/>
					<input type="text" name="district" value="<?php echo $row['district'] ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'District';}" required="">
					<br/><br/><br/>
					<input type="text" name="pincode" value="<?php echo $row['pincode'] ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pincode';}" required="">
					<br/><br/><br/>
					<input type="text" name="state" value="<?php echo $row['state'] ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'State';}" required="">
					<br/><br/><br/>
					<input type="text" name="country" value="<?php echo $row['country'] ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Country';}" required="">
					<br/><br/><br/>
					<?php	
				}
				?>
					<input type="submit" name="donateupdate" value="Update" >
				</form>
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