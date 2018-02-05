
<?php
session_start();
if(isset($_SESSION['name']))
{
?>
<span class="menu">Menu</span>
				<ul class="nav">
					<li class="active"><a class="adhome.php">Home</a></li>
					<li><a  href="donate.php" >Donated Details</a></li>
					<li><a  href="logout.php" >Logout</a></li>
					
				</ul>
						<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.nav" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
						<!-- /script-for-menu -->
<?php	
}
else
{
?>
<span class="menu">Menu</span>
				<ul class="nav">
					<li ><a href="index.php">Home</a></li>
					<li><a  href="admin.php" >Admin</a></li>
					<li><a  href="login.php" >Login</a></li>
					
				</ul>
						<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.nav" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
						<!-- /script-for-menu -->
<?php	
}
?>
