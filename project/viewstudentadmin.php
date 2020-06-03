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
	<title>View Student</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-light-grey" style=" height:42em;">
		<center>
			<div class="w3-panel w3-metro-purple" style="height:40em;">
				<form action="viewstudentadmin.php" class="w3-container w3-card-4 w3-light-grey w3-text-purple w3-margin"  method="post">
					<h2 class="w3-center w3-xlarge">Student Details</h2>
					<div class="w3-row w3-section">
						<div class="w3-container w3-card-4 w3-centered">

							<div class="w3-row w3-section">
								<div class="w3-col w3-xlarge" style="width:10em;">Enrol No</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="en_no" type="text" placeholder="Enrol No" required>
								</div>
							</div>


							<div>
								<p class="w3-center">
									<input class="w3-button w3-section w3-metro-purple w3-ripple" type="submit" name="submit" value="View ">
								</p>
							</div>

						</div>

						<div class="w3-container" style="height:2em;">
						</div>

						<table class="w3-table-all w3-centered w3-hoverable w3-card-4">

							<tr class="w3-large">
								<th>Name</th>
								<th>Enrol No</th>
								<th>Course</th>
								<th>Allotment Date</th>
								<th>Address</th>
								<th>Contact</th>
								<th>Email</th>
								<th>Room No</th>
							</tr>
							
<?php
include("connect.php");
if(isset($_POST['submit']))
{
$eno=$_POST['en_no'];
$query="select * from student where enno='$eno'";
$res=mysqli_query($con,$query);
$num=mysqli_num_rows($res);
if($num!=0)
{
while($row=mysqli_fetch_array($res))
{
?>

							<tr>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['enno'];?></td>
								<td><?php echo $row['course'];?></td>
								<td><?php echo $row['allot_date'];?></td>
								<td><?php echo $row['address'];?></td>
								<td><?php echo $row['contact'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['roomno'];?></td>
							</tr>
							
<?php }
 }
 else
	{
		echo "<script>alert('Record Not Found!!!')</script>";
	} 

}

 ?>

						</table>
					</div>
					<div>
						<p class="w3-right">
							<a href="adminlogin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-purple w3-ripple">GoBack</a></button>
						</p>
					</div>
				</form>
			</div>
		</center>
	</div>

</body>
</html>