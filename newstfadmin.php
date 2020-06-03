<?php 
session_start();
require_once('connect.php');
if(!isset($_SESSION['admin']))
{
echo "<script>alert('Please Login To Continue')</script>";
echo "<script>window.open('index.php#admin','_self')</script>";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>New Staff Member</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-light-grey" style="height:41em;">
		<center>
			<div class="w3-panel w3-metro-purple" style="height:40.2em;">
				<form action="newstfadmin.php" class="w3-container w3-card-4 w3-light-grey w3-text-purple w3-margin"  method="post">
					<div class="w3-row w3-section">
						<div class="w3-container w3-card-4 w3-centered">

							<div class="w3-row w3-section">
								<div class="w3-col w3-large" style="width:10em;">Staff Id</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="sid" type="text" placeholder="Id">
								</div>
							</div>

							<div class="w3-row w3-section">
								<div class="w3-col w3-large" style="width:10em;">Name</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="name" type="text" placeholder="Name">
								</div>
							</div>

							<div class="w3-row w3-section">
								<div class="w3-col w3-large" style="width:10em;">Gender</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="gender" type="text" placeholder="Gender">
								</div>
							</div>

							<div class="w3-row w3-section">
								<div class="w3-col w3-large" style="width:10em;">Address</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="address" type="text" placeholder="Address">
								</div>
							</div>

							<div class="w3-row w3-section">
								<div class="w3-col w3-large" style="width:10em;">Contact</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="contact" type="text" placeholder="Contact">
								</div>
							</div>

							<div class="w3-row w3-section">
								<div class="w3-col w3-large" style="width:10em;">Email</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="email" type="text" placeholder="Email">
								</div>
							</div>

							<div class="w3-row w3-section">
								<div class="w3-col w3-large" style="width:10em;">Post</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="post" type="text" placeholder="Post">
								</div>
							</div>
							
							<div class="w3-row w3-section">
								<div class="w3-col w3-large" style="width:10em;">Password</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="pass" type="password" placeholder="Password">
								</div>
							</div>

							<div>
								<p class="w3-left">
									<input class="w3-button w3-section w3-metro-purple w3-ripple" type="submit" name="submit" value="Register">
								</p>
								</p>
								<p class="w3-right">
									<a href="adminlogin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-purple w3-ripple">GoBack</a></button>
								</p>
							</div>

						</div>
					</div>
				</form>
			</div>
		</center>
	</div>

</body>
</html>
<?php
include("connect.php");
if(isset($_POST['submit']))
{
 $sid=$_POST['sid'];
 $nm=$_POST['name'];
 $gn=$_POST['gender'];
 $pt=$_POST['post'];
 $ad=$_POST['address'];
 $cn=$_POST['contact'];
 $em=$_POST['email'];
 $ps=$_POST['pass'];

 
$q="insert into staff (sid,name,address,gender,post,contact,email,pass) values ('$sid','$nm','$ad','$gn','$pt','$cn','$em','$ps')";
$res=mysqli_query($con,$q);

if($res)
{
echo "<script>alert('Staff member successfully registered')</script>";
echo "<script>window.open('adminlogin.php','_self')</script>";
}
else
{
echo "<script>alert('error in connection')</script>";
}


}
?> 
