<!DOCTYPE html>
<html>
<head>
	<title>Allotment Status Student</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-gray" style="width:90em; height:43em;">
		<center>
			<div class="w3-container w3-metro-dark-red" style="width:70em; height:42em;">
				<form action="allotstatstudent.php" class="w3-container w3-card-4 w3-light-grey w3-text-pink w3-margin"  method="post">
					<h2 class="w3-center w3-xlarge">Allotment Status</h2>
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
								<div>
									<p class="w3-center">
										<button class="w3-button w3-section w3-metro-dark-red w3-ripple">Check Status</button>
									</p>
								</div>
								
							</div>
							<div class="w3-container" style="height:2em;">
							</div>
							<table class="w3-table-all w3-centered w3-hoverable w3-card-4">
								<tr class="w3-large">
									<th>Enrol no</th>
									<th>Name</th>
									<th>Waiting No</th>
									<th colspan="2">If alloted</th>
								</tr>
								<tr>
									<th> </th>
									<th> </th>
									<th> </th>
									<th>Wing</th>
									<th>Room No</th>
								</tr>
								<tr>
									<td>gi8027</td>
									<td>saba</td>
									<td>none</td>
									<td>c</td>
									<td>34</td>
								</tr>

							</table>
					</div>
					<div>
						<p class="w3-right">
							<a href="stdlogin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-metro-dark-red w3-ripple">GoBack</a></button>
						</p>
					</div>
				</form>
			</div>
		</center>
	</div>

</body>
</html>