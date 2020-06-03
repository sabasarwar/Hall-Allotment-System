<?php
session_start();
if(!isset($_SESSION['staff']))
{
echo "<script>alert('Please Login To Continue')</script>";
echo "<script>window.open('index.php','_self')</script>";
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Fee Details</title>
		<link rel="stylesheet" href="includecss/w3.css" type="text/css">
		<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
		<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
	</head>
	<body>
		<div class="w3-container w3-light-grey" style="height:41em;">
			<center>
				<div class="w3-panel w3-metro-dark-blue" style="height:40em;">
					<form action="feedetailstaff.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin"  method="post">
						<h2 class="w3-center w3-xlarge">Student Fee Details</h2>
						<div class="w3-row w3-section">
							<div class="w3-container w3-card-4 w3-centered">

								<div class="w3-row w3-section">
									<div class="w3-col w3-xlarge" style="width:10em;">Enrol No</div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="eno" type="text" placeholder="Enrolment no.">
									</div>
								</div>
								
								<div>
									<p class="w3-center">
									<input class="w3-button w3-section w3-metro-dark-blue w3-ripple" type="submit" name="submit" value="View Details">
									</p>
								</div>
								
							</div>
							<div class="w3-container" style="height:2em;">
							</div>

							<table class="w3-table-all w3-centered w3-hoverable w3-card-4">
								<tr class="w3-large">
									<th>Enrol No</th>
									<th>Name</th>
									<th>Room No</th>
									<th>Course</th>
									<th>Fees Paid Upto Month</th>
									<th>Recent Submission Date</th>
								</tr>
<?php 
include("connect.php");
if(isset($_POST['submit']))
{
$eno=$_POST['eno'];
$query="select * from student where enno='$eno'";
$res=mysqli_query($con,$query);
$num=mysqli_num_rows($res);
if($num!=0)
{
$row=mysqli_fetch_array($res);




?>
								<tr>
									<td><?php echo $row['enno'];?></td>
									<td><?php echo $row['name'];?></td>
									<td><?php echo $row['roomno'];?></td>
									<td><?php echo $row['course'];?></td>
									<td><?php echo $row['uptomonth'];?></td>
									<td><?php echo $row['feesubdate'];?></td>
								</tr>
<?php
} 
else
{
echo "<script>alert('Sorry there is no student registered with this Enrolment no.')</script>";
echo "<script>window.open('feedetailstaff.php','_self')</script>";
}

}
?>
							</table>

						</div>
						<div>
							<p class="w3-right">
								
								<a href="stflogin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-blue w3-ripple">GoBack</a></button>
							</p>
						</div>
						

					</form>
				</div>
			</center>
		</div>
		
	</body>
</html>