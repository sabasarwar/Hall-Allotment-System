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
	<title>View Staff Member</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-light-grey" style="height:41em;">
		<center>
			<div class="w3-panel w3-metro-purple" style="height:40em;">
				<form action="viewstfadmin.php" class="w3-container w3-card-4 w3-light-grey w3-text-purple w3-margin"  method="post">
					<h2 class="w3-center w3-xlarge">Staff Member Details</h2>

						<div class="w3-container" style="height:2em;">
						</div>

						<table class="w3-table-all w3-centered w3-hoverable w3-card-4">

							<tr class="w3-large">
								<th>Sno</th>
								<th>Staff Id</th>
								<th>Name</th>
								<th>Address</th>
								<th>Gender</th>
								<th>Post</th>
								<th>Contact</th>
								<th>Email</th>
								<th>Delete</th>
							</tr>
<?php
include("connect.php");
$query="select * from staff order by 1";
$res=mysqli_query($con,$query);
$a=1;
while($row=mysqli_fetch_array($res))
{

?>
							<tr>
								<td><?php echo $a++;?></td>
								<td><?php echo $row['sid'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['address'];?></td>
								<td><?php echo $row['gender'];?></td>
								<td><?php echo $row['post'];?></td>
								<td><?php echo $row['contact'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><a href="viewstfadmin.php?g=<?php echo $row['sno'];?>">delete</a></td>
							</tr>
<?php } ?>

						</table>
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


<?php
if(isset($_GET['g']))
{
$h=@$_GET['g'];
$q="delete from staff where sno='$h'";
$r=mysqli_query($con,$q);
if($r)
{
echo "<script>alert('Record Successfully Deleted!!!')</script>";
echo "<script>window.open('viewstfadmin.php','_self')</script>";
}
else
{
echo "<script>alert('Error Occurred!!!')</script>";
}
}

?>