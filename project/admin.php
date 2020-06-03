<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
		<title>Hall Allotment System Indira Gandhi Hall</title>	
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style> 
		#adm 
		{
		    background-image:url(pics/adm.jpeg);
		    background-repeat: no-repeat;
		    background-size: 100%,80%;
		}

	</style>
</head>
<body>
	<!-- nav bar section starts here -->

		<div class="w3-large w3-bar w3-black" style="position:fixed;">
			
			  <a href="home.php" class="w3-bar-item  w3-hover-grey  w3-button" style="width:11em;" >Home</a>
			  <a href="about.php" class="w3-bar-item  w3-hover-grey  w3-button" style="width:12em;">About</a>
			  <a href="staff.php" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Staff Members</a>
			  <a href="student.php" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Students</a>
			  <a href="#" class="w3-bar-item w3-hover-grey w3-button" style="width:12em;">Admin</a>
			  <a href="contacts.php" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Contact Us</a>	

		</div>

	<!-- nav bar section ends here -->

	<!-- admin section starts here -->

	<div id="adm" class=" w3-light-grey" style="height:43em;">
			<div id="admin" class="w3-container w3-metro-purple">
				<h1 class="w3-center"  style="margin-top:35px;">Admin <span>IG Hall</span></h1>
			</div>

			<!--admin login form starts here -->
			<center>
				<div class="w3-container w3-border w3-card-4 w3-light-grey w3-border w3-text-blue w3-margin" style="width:34em; height:34.2em;" >
					<div class="w3-container w3-light-grey" style="height:1em;"></div>
					<div class="w3-container w3-metro-purple">
						<h2 class="w3-center">Admin Login</h2>
					</div>

					<div class="w3-center">
						<img src="pics/avatar2.png" alt="Avatar" style="width:12em; height:12em" class="w3-circle w3-margin-top">
					</div>

					<div class="w3-container w3-light-grey" style="height:1em;">
					</div>

					<form action="script.php?token=admin"  method="post">
						
						<div class="w3-row w3-section">
							<div class="w3-col" style="width:40px; height: 45px;"><i class="w3-xxlarge fa fa-user" style="color:rgb(128,0,128)"></i></div>
							<div class="w3-rest">
								<input class="w3-input w3-border" name="auser" type="text" placeholder="Username">
							</div>
						</div>
						<div class="w3-row w3-section">
							<div class="w3-col" style="width:40px; height: 45px;"><i class="w3-xxlarge fa fa-key" style="color:rgb(128,0,128)"></i></div>
							<div class="w3-rest">
								<input class="w3-input w3-border" name="apass" type="password" placeholder="Password">
							</div>
						</div>
						<div>
							<p class="w3-center">
								<input type="submit" name="admin" style="text-decoration: none;" class="w3-button w3-section w3-metro-purple w3-ripple" value="Login"></a>
							</p>
						</div>

					</form>
					
				</div>
				</center>
				<!--admin login form ends here -->
			
			
	</div>

<!-- admin section ends here -->
</body>
</html>