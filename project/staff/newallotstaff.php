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
	<title>New Allotment</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-light-grey" style="height:60em;">
		<center>
			<div class="w3-panel w3-metro-dark-blue" style="height:27em;">
				<form action="newallotstaff.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin"  method="post">

					<h2 class="w3-center">New Student Allotment</h2>

					<div class="w3-row w3-section">
						<div class="w3-col w3-xlarge" style="width: 10em;">Enrolment No</div>
						<div class="w3-rest">
							<input class="w3-input w3-border" name="eno" type="text" placeholder="Format: aa1111" required>
						</div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col">
							<p class="w3-large">
								<input class="w3-radio" type="radio" name="r" value="r1"><label>Resident1</label>
								<input class="w3-radio" type="radio" name="r" value="r2"><label>Resident2</label>
								<input class="w3-radio" type="radio" name="r" value="r3"><label>Resident3</label>
								<input class="w3-radio" type="radio" name="r" value="r4"><label>Resident4</label>
								<input class="w3-radio" type="radio" name="r" value="r5"><label>Resident5</label>
							</p>
						</div>
					</div>

					<div class="w3-row w3-section">
						<div class="w3-col w3-xlarge" style="width: 10em;">Room No</div>
						<div class="w3-rest">
							<input class="w3-input w3-border" name="rno" type="text" placeholder="Room No." required>
						</div>
					</div>
					
					<div>
						<p class="w3-center">
							<input class="w3-button w3-section  w3-metro-dark-blue w3-ripple" type="submit" name="submit" value="Allot">
						</p>
					</div>



				</form>
				
			</div>

			<div class="w3-panel w3-metro-dark-blue" style="height:30em;">

				<div class="w3-container w3-metro-dark-blue" style="height:1.2em;"></div>
				<table class="w3-table-all w3-centered w3-text-blue w3-hoverable w3-card-4">
					<tr class="w3-large">
						<th>Sr No.</th>
						<th>Enrol No</th>
						<th>Name</th>
						<th>Course</th>
						<th>Address</th>
						<th>Contact</th>
						<th>Email</th>
					</tr>
<?php
include("connect.php");
$query="select * from student where roomno IS NULL";
$result=mysqli_query($con,$query);
$d=1;
while($row=mysqli_fetch_array($result))
{

?>
					<tr>
						<td><?php echo $d++;?></td>
						<td><?php echo $row['enno'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['course'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['contact'];?></td>
						<td><?php echo $row['email'];?></td>
					</tr>
<?php } ?>
				</table>

				<div>
					<p class="w3-right">
						<a href="stflogin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-light-grey w3-ripple">Go Back</a></button>
					</p>
				</div>

			</div>

		</center>
	</div>

</body>
</html>
<?php

include("connect.php");
if(isset($_POST['submit']))
{

 $rno=$_POST['rno'];
 $enno=$_POST['eno'];
 $rdb=$_POST['r'];
 
 $qry="select * from student where enno='$enno'";
 $result=mysqli_query($con,$qry);
 $sn=mysqli_num_rows($result);
 if($sn!=0)
 {
 
 

$rq="select * from fseater where rno='$rno'";
$rr=mysqli_query($con,$rq);
$rn=mysqli_num_rows($rr);
if($rn==0)
{
$q="insert into fseater (rno,$rdb) values ('$rno','$enno')";
$r=mysqli_query($con,$q);

$stqry="update student set roomno='$rno',allot_date=NOW() where enno='$enno'";
$stres=mysqli_query($con,$stqry);


}
else
{
 $q= "update fseater set $rdb= '$enno' where rno='$rno'";
 $r=mysqli_query($con,$q);
 
 $stqry="update student set roomno='$rno',allot_date=NOW() where enno='$enno'";
$stres=mysqli_query($con,$stqry);

}
if($r && $stres)
{
echo "<script>alert('success')</script>";
echo "<script>window.open('newallotstaff.php','_self')</script>";
}
else
{
echo "<script>alert('error')</script>";
}

}
else
{
echo "<script>alert('Student is not registered.')</script>";
}
}
?>