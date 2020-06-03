<?php 
session_start();
require_once('connect.php');
if(!isset($_SESSION['staff']))
{
echo "<script>alert('Please Login To Continue')</script>";
echo "<script>window.open('index.php#staffmember','_self')</script>";
}
else
{
$user=$_SESSION['staff'];
$query="select * from staff where sid ='$user'";
$res=mysqli_query($con,$query);
$qrow=mysqli_fetch_array($res);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff Login</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-light-grey" style="height:42.5em;" > 
		<div class="w3-container w3-metro-dark-blue">
			<h1 class="w3-center">Welcome <span><?php echo $qrow['name'];?></span></h1>
		</div>

		<div class="w3-panel w3-metro-dark-blue" style="height:35em; width:17.4em; float:left;">
			<p class="w3-left">
				<a href="feesubstaff.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:15em;">Fee Submit</a></button>
			</p>
			<p class="w3-left">
				<a href="feedetailstaff.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:15em;">Fee Details</a></button>
			</p>
			<p class="w3-left">
				<a href="roomdetailstaff2.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:15em;">Room Details</a></button>
			</p>
			<p class="w3-left">
				<a href="newallotstaff.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:15em;">New Allotment</a></button>
			</p>
			<p class="w3-left">
				<a href="logoutstaff.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:15em;">Log Out</a></button>
			</p>
		</div>

		<div class="w3-panel w3-animate-zoom w3-light-grey" style="height:35em; width:69em; float:right;">
			
			<div class="w3-panel w3-card-4 w3-metro-dark-blue w3-centered" style="height:32.6em;">

<?php 
include('connect.php');
$q="select * from staff where sid ='$user'";
$r=mysqli_query($con,$q);
$f=mysqli_fetch_array($r);

?>
					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Staff ID</div>
						<div class="w3-rest w3-large"><?php echo $f['sid'];?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Name</div>
						<div class="w3-rest w3-large"><?php echo $f['name'];?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Gender</div>
						<div class="w3-rest w3-large"><?php echo $f['gender'];?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Address</div>
						<div class="w3-rest w3-large"><?php echo $f['address'];?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Post</div>
						<div class="w3-rest w3-large"><?php echo $f['post'];?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Contact</div>
						<div class="w3-rest w3-large"><?php echo $f['contact'];?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Email</div>
						<div class="w3-rest w3-large"><?php echo $f['email'];?></div>
					</div>

					<div class="w3-row w3-section">
		
						<p class="w3-right">
							<a href="index.php#staffmember" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple">GoBack</a></button>
						</p>
					</div>

				</div>

		</div>



	</div>	
</body>
</html>