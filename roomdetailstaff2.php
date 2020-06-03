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
	<title>Room Details Staff</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-light-grey" style="width:90em; height:50em;">
		<center>
			<div class="w3-container w3-light-grey" style="height:2em;"></div>
			<div class="w3-container w3-card-4 w3-metro-dark-blue w3-centered" style="height:5em;">
					<h2 class="w3-center w3-xxlarge">Room Details</h2>
			</div>
			<div class="w3-container w3-light-grey" style="height:2em;"></div>
			<div class="w3-container w3-metro-dark-blue" style="height:34em;">

				

				<div class="w3-container w3-metro-dark-blue" style="height:2em;"></div>
				

				<div class="w3-container w3-card-4 w3-light-grey w3-centered">
					<div class="w3-container w3-light-grey" style="height:2em;"></div>
					
				
					
					<table class="w3-table-all w3-centered w3-card-4">
						<tr>
							<th>Room No.</th>
							<th>Resident1</th>
							<th>Resident2</th>
							<th>Resident3</th>
							<th>Resident4</th>
							<th>Resident5</th>
							<th>Details</th>
						</tr>
<?php
include("connect.php");
$query="select * from fseater order by 1 ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{


?>
	
						<tr>
							<td><?php echo $row['rno']; ?> </td>
							<td><?php echo $row['r1']; ?></td>
							<td><?php echo $row['r2']; ?></td>
							<td><?php echo $row['r3']; ?></td>
							<td><?php echo $row['r4']; ?></td>
							<td><?php echo $row['r5']; ?></td>
							<td><a href="table.php?n=<?php echo $row['rno']; ?>">details</a></td>
						</tr>
<?php } ?>
					</table>

					<div class="w3-container w3-light-grey" style="height:2em;"></div>

				</div>
				<p class="w3-right">
					<a href="stflogin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple">Go Back</a></button>
				</p>
				
			</div>
			
		</center>
	</div>

</body>
</html>

<?php




?>