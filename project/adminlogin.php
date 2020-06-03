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
	<title>Admin Login</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-light-grey " style="width:90em; height:43em;" > 
		<div class="w3-container w3-metro-purple">
			<h1 class="w3-center">Admin <span>Login</span></h1>
		</div>
		<div class="w3-panel w3-metro-purple" style="height:33em; width:17em; float:left;">
			<p class="w3-left">
				<a href="newstfadmin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:14.5em;">Register Staff</a></button>
			</p>
			<p class="w3-left">
				<a href="viewstfadmin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:14.5em;">View Staff</a></button>
			</p>
			<p class="w3-left">
				<a href="viewstudentadmin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:14.5em;">View Student</a></button>
			</p>
			<p class="w3-left">
				<a href="contactus.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:14.5em;">View Contact Us</a></button>
			</p>

			<p class="w3-left">
				<a href="logoutadmin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple" style="width:14.5em;">Log Out</a></button>
			</p>
		</div>

		<div class="w3-panel w3-metro-purple" style="height:33em; width:69em; float:right;">

			<div class="w3-container w3-metro-purple" style="height:1.2em;"></div>
				<table class="w3-table-all w3-centered w3-text-purple w3-hoverable w3-card-4">
					<tr class="w3-large">
					
						<th>Sno</th>
						<th>Name</th>
						<th>Email</th>
						<th>Complaint</th>
						<th>Delete</th>
					</tr>
<?php
include("connect.php");
$query="select * from feed order by 1 desc";
$result=mysqli_query($con,$query);
$d=1;
while($row=mysqli_fetch_array($result))
{
?>
					<tr>
						<td><?php echo $d++;?></td>
						<td><?php echo $row['nm'];?></td>
						<td><?php echo $row['em'];?></td>
						<td><?php echo $row['ms'];?></td>
						<td><a href="adminlogin.php?z=<?php echo $row['sr'];?>">delete</a></td>
					</tr>
					
<?php } ?>
				</table>

				<div>
					<p class="w3-right">
						<a href="index.php#admin" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple">Go Back</a></button>
					</p>
				</div>


		</div>

	</div>
</body>
</html>

<?php
if(isset($_GET['z']))
{
$a=@$_GET['z'];
$q="delete from feed where sr='$a'";
$r=mysqli_query($con,$q);

if($r)
{
echo "<script>alert('Successfully Deleted!!!')</script>";
echo "<script>window.open('adminlogin.php','_self')</script>";
}

else
{
echo "<script>alert('Error Occurred!!!')</script>";
}

}
?>