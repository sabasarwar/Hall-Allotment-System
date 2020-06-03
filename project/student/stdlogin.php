<?php
session_start();
if(!isset($_SESSION['student']))
{
echo "<script>alert('Please Login To Continue')</script>";
echo "<script>window.open('index.php','_self')</script>";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-light-grey" style="height:42.5em;" >
		<div class="w3-container w3-metro-dark-red">
			<h1 class="w3-center">Welcome <span>Saba</span></h1>
		</div>
		<div class="w3-container w3-card-4 w3-light-grey">
			<p class="w3-left">
				<a href="viewprofilestudent.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-red w3-ripple" style="width:14.5em;">View Profile</a></button>
			</p>
			<p class="w3-right">
				<a href="logout.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-red w3-ripple" style="width:14.5em;">Log Out</a></button>
			</p>
			
		</div>

		<div class="w3-container w3-card-4 w3-metro-dark-red" style="height:30em;">
			<center>
			<form action="stdlogin.php" class="w3-panel w3-light-grey" style="width:60em; height:23em;" method="post">

						<div class="w3-row w3-section">
							<div class="w3-col w3-large" style="width:10em;">Name</div>
							<div class="w3-rest">
								<input class="w3-input w3-border" name="name" type="text" placeholder="Name">
							</div>
						</div>
						<div class="w3-row w3-section">
							<div class="w3-col w3-large" style="width:10em;">Email</div>
							<div class="w3-rest">
								<input class="w3-input w3-border" name="email" type="email" placeholder="Email">
							</div>
						</div>

						<div class="w3-row w3-section">
							<div class="w3-col w3-large" style="width:10em;">Message</div>
							<textarea rows="8" cols="72" name="msg" placeholder="Drop Message here">
							</textarea>
						</div>

						<div class="w3-row w3-section">
							<p class="w3-center">
								<input class="w3-button w3-section w3-light-grey w3-ripple" type="submit" name="submit" value="Send Complaint">
							</p>
						</div>
						
			</form>
			</center>	
		</div>
	</div>
</body>
</html>

<?php
include("connect.php");
if(isset($_POST['submit']))
{
echo $n=$_POST['name'];
echo $e=$_POST['email'];
echo $m=$_POST['msg'];

$query="insert into feed (nm,em,ms) values('$n','$e','$m')";
$result=mysqli_query($con,$query);

if($result)
{
echo "<script>alert('Complaint Sent Successfully!!!')</script>";
echo "<script>window.open('index.php#student','_self')</script>";
}


else
{
echo "<script>alert('error in connection!!!')</script>";
}


}

?>
