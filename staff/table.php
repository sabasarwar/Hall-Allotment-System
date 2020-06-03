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
	<title> Room Details Table</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
		<div class="w3-container w3-light-grey " style="width:90em; height:43em;" > 	
			<div class="w3-container w3-metro-purple">

				<table class="w3-table-all w3-metro-purple w3-centered w3-text-purple">
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
		</div>
</body>
</html>