<?php
session_start();
if(!isset($_SESSION['staff']))
{
echo "<script>alert('Please Login To Continue')</script>";
echo "<script>window.open('index.php#staffmember','_self')</script>";
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Fee Submit</title>
		<link rel="stylesheet" href="includecss/w3.css" type="text/css">
		<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
		<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
	</head>
	<body>
		<div class="w3-container w3-light-grey" style="width:90em; height:52em;">
			<center>
				
				<div class="w3-panel w3-metro-dark-blue" style="height:39em;">
					
					<form action="feesubstaff.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin"  method="post">
								<h1 class="w3-center">Student Fee Entry</h1>

								<div class="w3-container w3-metro-dark-blue" style="height:0.5em;"></div>

									<div class="w3-row w3-section">
										<div class="w3-col w3-xlarge" style="width:10em;">Enrolment No.</div>
										<div class="w3-rest">
											<input class="w3-input w3-border" name="eno" type="text" placeholder="Enrolment no  Format:aa1111"required>
										</div>
									</div>

									<div class="w3-row w3-section">
										<div class="w3-col w3-xlarge" style="width:10em;"> Name</div>
										<div class="w3-rest">
											<input class="w3-input w3-border" name="name" type="text" placeholder="StudentName"required>
										</div>
									</div>

									<div class="w3-row w3-section">
										<div class="w3-col w3-xlarge" style="width:10em;">Room No</div>
										<div class="w3-rest">
											<input class="w3-input w3-border" name="rno" type="text" placeholder="Room No"required>
										</div>
									</div>
									
									<div class="w3-row w3-section">
										<div class="w3-col w3-xlarge" style="width:10em;">Amount Paid</div>
										<div class="w3-rest">
											<input class="w3-input w3-border" name="amount" type="text" placeholder="Amount Paid"required>
										</div>
									</div>
									<div class="w3-row w3-section"> 
										<div class="w3-col w3-xlarge" style="width:10em;">Upto Month</div>
										<div class="w3-rest">
											<input class="w3-input w3-border" name="upmonth" type="text" placeholder="Upto Month"required>
										</div>
									</div>
									<div class="w3-row w3-section">
										<div class="w3-col w3-xlarge" style="width:10em;">No of Months</div>
										<div class="w3-rest">
											<input class="w3-input w3-border" name="nomonth" type="text" placeholder="No of Months"required>
										</div>
									</div>
									<div>
										<p class="w3-left">
											<input class="w3-button w3-section  w3-metro-dark-blue w3-ripple" type="submit" name="submit" value="Submit">
										</p>
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

<?php
include("connect.php");
if(isset($_POST['submit']))
{
 $eno=$_POST['eno'];
 $name=$_POST['name'];
 $rno=$_POST['rno'];
 $amount=$_POST['amount'];
 $upmonth=$_POST['upmonth'];
 $nomonth=$_POST['nomonth'];
$check="select * from fees where eno='$eno'";
$cres=mysqli_query($con,$check);
$num=mysqli_num_rows($cres);
if($num==0)
{
$query="insert into fees (eno,name,rno,amount,upmonth,nomonth,rdate) values('$eno','$name','$rno','$amount','$upmonth','$nomonth',NOW())";
$res=mysqli_query($con,$query);
$squery="update student set uptomonth='$upmonth',feesubdate=NOW() where enno='$eno'";
$sres=mysqli_query($con,$squery);
if($res && $sres)
{
echo "<script>alert('Fee Submitted successfully')</script>";
echo "<script>window.open('feesubstaff.php','_self')</script>";




}
else{
echo "<script>alert('Error!!!')</script>";
echo "<script>window.open('feesubstaff.php','_self')</script>";
}
}
else
{
$query="update fees set amount=amount+$amount,upmonth='$upmonth',nomonth='$nomonth',rdate=NOW() where eno='$eno' ";
$res=mysqli_query($con,$query);
$squery="update student set uptomonth='$upmonth',feesubdate=NOW() where enno='$eno'";
$sres=mysqli_query($con,$squery);
if($res && $sres)
{
echo "<script>alert('Fee Submitted successfully')</script>";
echo "<script>window.open('feesubstaff.php','_self')</script>";
}
else{
echo "<script>alert('Error!!!')</script>";
echo "<script>window.open('feesubstaff.php','_self')</script>";
}
}



}

?>