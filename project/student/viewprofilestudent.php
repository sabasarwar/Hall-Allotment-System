<?php
session_start();
require_once 'connect.php';
if(!isset($_SESSION['student']))
{
echo "<script>alert('Please Login To Continue')</script>";
echo "<script>window.open('index.php','_self')</script>";
}


$enrol= $_SESSION['student'];
$q="select * from student where enno ='$enrol'";
$qrun=mysqli_query($con,$q);
$qrow=mysqli_fetch_array($qrun);
?>



<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-light-grey" style="height:42.5em;" >
		<div class="w3-container w3-metro-dark-red">
			<h1 class="w3-center">My <span>Profile</span></h1>
		</div>

		<div class="w3-container w3-card-4 w3-light-grey">
			<p class="w3-left">
				<a href="stdlogin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-red w3-ripple" style="width:14.5em;">Go Back</a></button>
			</p>
			<p class="w3-right">
				<a href="logout.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-red w3-ripple" style="width:14.5em;">Log Out</a></button>
			</p>
		</div>

		<div class="w3-container w3-card-4 w3-light-grey" style="height:32em;">
			<center>
				<div class="w3-container w3-card-4 w3-metro-dark-red" style="height:30.5em;">

<?php
include("connect.php");
?>
					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Enrol No</div>
						<div class="w3-rest w3-large"><?php echo $qrow['enno'];?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Name</div>
						<div class="w3-rest w3-large"><?php echo ucwords($qrow['name']);?></div>
					</div>



					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Course</div>
						<div class="w3-rest w3-large"><?php echo ucwords($qrow['course']);?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Allotment Date</div>
						<div class="w3-rest w3-large"><?php echo ucwords($qrow['allot_date']);?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Address</div>
						<div class="w3-rest w3-large"><?php echo ucwords($qrow['address']);?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Contact</div>
						<div class="w3-rest w3-large"><?php echo ucwords($qrow['contact']);?></div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Email</div>
						<div class="w3-rest w3-large"><?php echo ucwords($qrow['email']);?>m</div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Room No</div>
						<div class="w3-rest w3-large"><?php echo ucwords($qrow['roomno']);?></div>
					</div>
					<div class="w3-row w3-section">
						<div class="w3-col w3-large" style="width:10em;">Fee Submission Date</div>
						<div class="w3-rest w3-large"><?php echo ucwords($qrow['feesubdate']);?></div>
					</div>

				</div>
			</center>
		</div>





	</div>

</body>
</html>