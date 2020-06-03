<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
		<title>Hall Allotment System Indira Gandhi Hall</title>	
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style> 
		
		#std
		{
		    background-image:url(pics/std.jpeg);
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
			  <a href="#" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Students</a>
			  <a href="admin.php" class="w3-bar-item w3-hover-grey w3-button" style="width:12em;">Admin</a>
			  <a href="contacts.php" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Contact Us</a>	

		</div>

	<!-- nav bar section ends here -->

	<!-- student section starts here -->
	
	<div id="std"  class="w3-light-grey" style="height:43em;"> 
			<div id="student" class="w3-container w3-metro-dark-red">
				<h1 class="w3-center" style="margin-top:35px;">Students <span>IG Hall</span></h1>
			</div>

			<!--student login form starts here -->
			<center>
				<div class="w3-container w3-card-4 w3-light-grey w3-border w3-text-red w3-margin" style="width:34em; height:34.3em;" >
					<div class="w3-container w3-light-grey" style="height:1em;"></div>
					<div class="w3-container w3-metro-dark-red">
						<h2 class="w3-center">Login/Register</h2>
					</div>

					<div class="w3-center">
						<img src="pics/avatar4.png" alt="Avatar" style="width:12em; height:12em" class="w3-circle w3-margin-top">
					</div>

					<div class="w3-container w3-light-grey" style="height:1em;">
					</div>

					<form action="script.php?token=student"  method="post">
						
						<div class="w3-row w3-section">
							<div class="w3-col" style="width:40px; height: 45px;"><i class="w3-xxlarge fa fa-user" style="color:rgb(255,30,100)"></i></div>
							<div class="w3-rest">
								<input class="w3-input w3-border" name="user" type="text" placeholder="Username">
							</div>
						</div>
						<div class="w3-row w3-section">
							<div class="w3-col" style="width:40px; height: 45px;"><i class="w3-xxlarge fa fa-key" style="color:rgb(255,30,100)"></i></div>
							<div class="w3-rest">
								<input class="w3-input w3-border" name="pass" type="password" placeholder="Password">
							</div>
						</div>
						<div>
							<p class="w3-left">
								<input type="submit" name="student" style="text-decoration: none;" class="w3-button w3-section w3-metro-dark-red w3-ripple" value="Login"></a>
							</p>
							<p class="w3-right">
								<a href="regstudent.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-red w3-ripple">Register</a></button>
							</p>
						</div>

					</form>
					
				</div>
				</center>
				<!--student login form ends here -->
			
			
	
</div>
				
<!-- student section ends here -->
</body>
</html>