


<!DOCTYPE html>
<html>
<head>
	<title> Room Details Table</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>

<center>
		<div class="w3-container w3-card-4 w3-light-grey " style="width:90em; height:35em;" >
			<div class="w3-panel w3-metro-dark-blue"><h2>Details</h2></div>
			<div class="w3-container w3-metro-dark-blue">

				<table class="w3-table-all w3-metro-dark-blue w3-centered w3-text-blue">
					<tr>
						<th>Resident</th>
						<th>Enrol No</th>
						<th>Name</th>
						<th>Course</th>
						<th>Address</th>
						<th>Contact</th>
						<th>Email</th>
					</tr>
<?php 
include("connect.php");
if(isset($_GET['n']))
{
$p=$_GET['n'];

$query="select * from fseater where rno='$p'  ";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
}

	for($i=0;$i<5;$i++)
	{
?>
	
		<tr >
				<td style="box-shadow:0 5px 10px grey">Resident <?php $tmp=$i+1; echo $tmp;
				$karo = "r".$tmp;
				$v= $row[$karo];
				
				$q="select * from student where enno= '$v' ";
				$re=mysqli_query($con,$q);
				$num=mysqli_num_rows($re);
				while($ro= mysqli_fetch_array($re))
				{
				if($num!='')
				{
			
				?></td>
				
				<td style="box-shadow:0px 5px 10px black"><?php echo $ro['enno'];?></td>
				<td style="box-shadow:0px 5px 10px black"><?php echo $ro['name'];?></td>
				<td style="box-shadow:0px 5px 10px black"><?php echo $ro['course'];?></td>
				<td style="box-shadow:0px 5px 10px black"><?php echo $ro['address'];?></td>
				<td style="box-shadow:0px 5px 10px black"><?php echo $ro['contact'];?></td>
				<td style="box-shadow:0px 5px 10px black"><?php echo $ro['email'];?></td>
				<?php }
					
					} ?>
		</tr>
	<?php } ?>



					</table>
			</div>	
		<div>
			<p class="w3-right">
				<a href="roomdetailstaff2.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-blue w3-ripple">GoBack</a></button>
			</p>
		</div>
		
		</div>
	</center>	
</body>
</html>