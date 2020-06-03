<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="includecss/w3.css" type="text/css">
		<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
		<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
		<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>					
	<body>
		<div class="w3-container w3-gray" style="width:90em; height:60em;">
			<center>
				<div class="w3-container w3-metro-dark-red" style="width:70em; height:55em;">
					<form action="regstudent.php" class="w3-container w3-card-4 w3-light-grey w3-text-pink w3-margin"  method="post">
						<h2 class="w3-center w3-xlarge">Register Here!!</h2>
						<div class="w3-row w3-section">
							<div class="w3-container w3-card-4 w3-centered">

								<div class="w3-row w3-section">
									<div class="w3-col w3-xlarge" style="width:10em;">Enrol No</div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="enno" type="text" placeholder="Enrolment no." required>
									</div>
								</div>

								<div class="w3-row w3-section">
									<div class="w3-col w3-xlarge" style="width:10em;">Name</div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="name" type="text" placeholder="Name" required>
									</div>
								</div>

								<div class="w3-row w3-section">
									<div class="w3-col w3-xlarge" style="width:10em;">Course</div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="course" type="text" placeholder="Course" required>
									</div>
								</div>

								

								<div class="w3-row w3-section">
									<div class="w3-col w3-xlarge" style="width:10em;">Address</div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="address" type="text" placeholder="Permanent Address" required>
									</div>
								</div>
								

								<div class="w3-row w3-section">
									<div class="w3-col w3-xlarge" style="width:10em;">Contact</div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="contact" type="text" placeholder="Contact" required>
									</div>
								</div>
								
								<div class="w3-row w3-section">
									<div class="w3-col w3-xlarge" style="width:10em;">Email</div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="email" type="email" placeholder="Email">
									</div>
								</div>

								<div class="w3-row w3-section">
									<div class="w3-col w3-xlarge" style="width:10em;">Set Password</div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="password" type="password" placeholder="Password" required>
									</div>
								</div>
								
								

								<div>
									<p class="w3-left">
										<input class="w3-button w3-section w3-metro-dark-red w3-ripple" type="submit" name="submit" value="Register">
									</p>

									<p class="w3-right">
										<a href="index.php#student" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-red w3-ripple">Go Back</a></button>
									</p>
								</div>
								
							</div>
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
 $eno=$_POST['enno'];
 $name=$_POST['name'];
 $course=$_POST['course'];
 $address=$_POST['address'];
 $contact=$_POST['contact'];
 $email=$_POST['email'];
 $password=$_POST['password'];

$query="insert into student (enno,password,name,course,address,contact,email) values ('$eno','$password','$name','$course','$address','$contact','$email' )";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script>alert('You are successfully registered')</script>";
echo "<script>window.open('index.php','_self')</script>";
}
else
{
echo "<script>alert('error occured')</script>";
}
}

?>