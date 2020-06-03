<!DOCTYPE html>
<html>
<head>
	<title>Fee Status Student</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-gray" style="width:90em; height:43em;">
		<center>
			<div class="w3-container w3-metro-dark-red" style="width:70em; height:42em;">
				<form action="feestatstudent.php" class="w3-container w3-card-4 w3-light-grey w3-text-pink w3-margin"  method="post">
					<h2 class="w3-center w3-xlarge">Fee Details</h2>
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
									<th>Admission Date</th>
									<th>Fees Paid</th>
									<th>From Month</th>
									<th>Upto Month</th>
									<th>To Be Paid</th>
									<th>Dues</th>
								</tr>
								<tr>
									<td>06-08-17</td>
									<td>4800</td>
									<td>aug</td>
									<td>oct</td>
									<td>2200</td>
									<td>0</td>
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