
<!DOCTYPE html>
<html>
<head>
	<title>Apply For Hall Committee</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-gray" style="width:90em; height:43em;">
		<center>
			<div class="w3-container w3-metro-dark-red" style="width:70em; height:42em;">
				<form action="feedstudent.php" class="w3-container w3-card-4 w3-light-grey w3-text-pink w3-margin"  method="post">
					<h2 class="w3-center w3-xlarge">Feedback</h2>
					<div class="w3-row w3-section">
						<div class="w3-container w3-card-4 w3-centered">

							<div class="w3-row w3-section">
								<div class="w3-col w3-xlarge" style="width:10em;">Enrol No</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="enrol_number" type="text" placeholder="Enrolment no.">
								</div>
							</div>

							<div class="w3-row w3-section">
								<div class="w3-col w3-xlarge" style="width:10em;">Name</div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="name" type="text" placeholder="Name">
								</div>
							</div>

							<div class="w3-row w3-section">
								<div class="w3-col w3-xlarge" style="width:10em;">Message</div>
								<textarea rows="12" cols="72" name="feedback" placeholder="Drop Message here">
								</textarea>
							</div>

							<div>
								<p class="w3-left">
									<button class="w3-button w3-section w3-metro-dark-red w3-ripple">Submit</button>
								</p>
								<p class="w3-right">
									<a href="stdlogin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-red w3-ripple">GoBack</a></button>
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