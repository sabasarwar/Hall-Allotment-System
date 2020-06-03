<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
		<title>Hall Allotment System Indira Gandhi Hall</title>	
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<!-- nav bar section starts here -->

		<div class="w3-large w3-bar w3-black" style="position:fixed;">
			
			  <a href="home.php" class="w3-bar-item  w3-hover-grey  w3-button" style="width:11em;" >Home</a>
			  <a href="about.php" class="w3-bar-item  w3-hover-grey  w3-button" style="width:12em;">About</a>
			  <a href="staff.php" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Staff Members</a>
			  <a href="student.php" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Students</a>
			  <a href="admin.php" class="w3-bar-item w3-hover-grey w3-button" style="width:12em;">Admin</a>
			  <a href="#" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Contact Us</a>	

		</div>

	<!-- nav bar section ends here -->

	<!--contact us section starts here -->

	<div id="co" class=" w3-light-grey" style=" height:39em;">
			<div  id="contact" class="w3-container w3-win8-lime">
				<h1 style="margin-top:35px;" class="w3-center">Contact <span>US</span></h1>
			</div>


			<div class="w3-container w3-light-grey" style="height:28em;">

				<div class="w3-panel w3-win8-lime">
					<center>
					<h3>
						We'd <i class="w3-xlarge fa fa-heart"></i> to help!!!
					</h3>
					<p>
						We can't solve your problem if you don't tell us about it!!!
					</p>
					</center>

					<div class="w3-container w3-light-grey" style="height: 0.2em;"></div>

					<form action="index.php" class="w3-panel w3-light-grey w3-card-4" style="width: 50em; height: 21.5em; float:left;" method="post">

						<div class="w3-row w3-section">
							<div class="w3-col w3-large" style="width:5em;">Name</div>
							<div class="w3-rest">
								<input class="w3-input w3-border" name="name" type="text" placeholder="Name" required>
							</div>
						</div>
						<div class="w3-row w3-section">
							<div class="w3-col w3-large" style="width:5em;">Email</div>
							<div class="w3-rest">
								<input class="w3-input w3-border" name="email" type="email" placeholder="Email" required>
							</div>
						</div>

						<div class="w3-row w3-section">
							<div class="w3-col w3-large" style="width:5em;">Message</div>
							<textarea rows="5" cols="65" name="msg" placeholder="Drop Message here">
							</textarea>
						</div>

						<div>
							<p class="w3-center">
								<input class="w3-button w3-section w3-win8-lime w3-ripple" type="submit" name="submit" value="Send Message" required>
							</p>
						</div>
						
			

						
					</form>

					<div class="w3-panel w3-light-grey w3-card-4" style="width: 28.3em; height: 21.5em; float:right;">

						
							<p><i class="w3-xlarge fa fa-phone" ></i>2703057</p>
							<p><i class="w3-xlarge fa fa-envelope" ></i>provost.igh@amu.ac.in</p>
							<p><i class="w3-xlarge fa fa-globe" ></i>www.amu.ac.in/amuhalls.jsp?did=10085</p>
							<p><i class="w3-xlarge fa fa-fax" ></i>EPABX: 4100,4101</p>
						
						
					</div>

				</div>

				</div>

			</div>

			<div class="w3-container w3-win8-lime" id="footer">
				<p style="float:right;">
					Webpage made by <a href="">SABA SARWAR</a>
				</p>
			</div>
			
			
		</div>
		
<?php

include("connect.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$query="insert into contactus (name,email,msg) values('$name','$email','$msg')";
$res=mysqli_query($con,$query);
if($res)
{
echo "<script>alert('Message Sent Successfully!!!')</script>";
echo "<script>window.open('index.php#contact','_self')</script>";
}
else
{
echo "<script>alert('error in connection!!!')</script>";
}

}
?>			
		


<!--contact us section ends here -->

</body>
</html>