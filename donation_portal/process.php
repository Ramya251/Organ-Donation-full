<?php
include('includes/db_utilities.php');// database connection 
$link = new DB(); //object

if(isset($_POST['admin']))
{
	ob_start();
    session_start();
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$que="select * from admin where email='$email' and password='$password'";
	$result=mysql_query($que);
	
	if($row=mysql_fetch_assoc($result))
			{
				session_regenerate_id();
				
				$_SESSION['uid'] = $row['aid'];
	            $_SESSION['name'] = 'Admin';
				
				
   			  $url='adhome.php';
	           echo '<script language="javascript">location.href=\'' . $url . '\'</script>';
			}
			else
			{
				
				echo '<script language="javascript">alert("Invalid Email ID Or Password");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
			} 
		 
}
 if(isset($_POST['signup']))
 {
 	$email=$_POST['email'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	
	$que="insert into user(email,password,name,mobile)value('$email','$password','$name','$mobile')";
	$result=mysql_query($que);
	if($result)
	{
		 $url='login.php';
	     echo '<script language="javascript">alert("Register Successfully");location.href=\'' . $url . '\'</script>';
	}
	else
	{
				
		echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
	} 
 }
 if(isset($_POST['user']))
{
	ob_start();
    session_start();
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$que="select * from user where email='$email' and password='$password'";
	$result=mysql_query($que);
	
	if($row=mysql_fetch_assoc($result))
			{
				session_regenerate_id();
				
				$_SESSION['uid'] = $row['uid'];
	            $_SESSION['name'] = $row['name'];
				
				
   			  $url='home.php';
	           echo '<script language="javascript">location.href=\'' . $url . '\'</script>';
			}
			else
			{
				
				echo '<script language="javascript">alert("Invalid Email ID Or Password");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
			} 
		 
}

if(isset($_POST['donate']))
{
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$organ=$_POST['organ'];
	$blood=$_POST['blood'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$district=$_POST['district'];
	$pincode=$_POST['pincode'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$uid=$_POST['uid'];
	$que="insert into donate(uid,age,gender,organ,blood,address,city,district,pincode,state,country)value('$uid','$age','$gender','$organ','$blood','$address','$city','$district','$pincode','$state','$country')";
	$result=mysql_query($que);
	if($result)
	{
		 $url='donatere.php';
	     echo '<script language="javascript">alert("Add Successfully");location.href=\'' . $url . '\'</script>';
	}
	else
	{
				
		echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
	}
}
if(isset($_POST['donateupdate']))
{
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$organ=$_POST['organ'];
	$blood=$_POST['blood'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$district=$_POST['district'];
	$pincode=$_POST['pincode'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$uid=$_POST['uid'];
	$que="update donate set age='$age',gender='$gender',organ='$organ',blood='$blood',address='$address',city='$city',district='$district',pincode='$pincode',state='$state',country='$country' where did='$uid'";
	$result=mysql_query($que);
	if($result)
	{
		 $url='donatede.php';
	     echo '<script language="javascript">alert("Update Successfully");location.href=\'' . $url . '\'</script>';
	}
	else
	{
				
		echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
	}
}
if(isset($_GET['deid']))
{
	$id=intval($_GET['deid']);
	$sql="delete from donate where did='$id'";
	$result=mysql_query($sql);
	if($result)
	{
		 $url='donatede.php';
	     echo '<script language="javascript">alert("Deleted");location.href=\'' . $url . '\'</script>';
	}
	else
	{
				
		echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
	}
}
?>