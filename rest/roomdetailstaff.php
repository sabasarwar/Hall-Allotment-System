<!DOCTYPE html>
<html>
<head>
	<title>Room Details</title>
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
</head>
<body>
	<div class="w3-container w3-gray" style="width:90em; height:100em;">
		<center>
			<form action="roomdetailstaff.php" method="post">
			<div class="w3-container w3-metro-dark-blue" style="width:70em; height:95em;">
				
				<h2 class="w3-center w3-xxlarge">Room Details</h2>

				<!--ig main starts-->
				<div class="w3-container w3-card-4 w3-light-grey w3-centered">
					<div class="w3-row w3-section">
						<div class="w3-center w3-xlarge" style="width:10em;">IG Hall Main</div>
					
						<div class="w3-center">
							<p>
								<input class="w3-radio" type="radio" name="wing" value="A"><label>Wing A</label>
								<input class="w3-radio" type="radio" name="wing" value="B"><label>Wing B</label>
								<input class="w3-radio" type="radio" name="wing" value="C"><label>Wing C</label>
								<input class="w3-radio" type="radio" name="wing" value="D"><label>Wing D</label>
							</p>
						</div>
					</div>
					<div>
						<p class="w3-left" style="width:10em;">
							<input class="w3-input w3-border" name="roomno" type="text" placeholder="Room no.">
						</p>
						
						<p class="w3-right">
							<button class="w3-button w3-section w3-blue w3-ripple">Enter</button>
						</p>
					</div>
					
				</div>
				<div class="w3-container w3-metro-dark-blue" style="height:0.5em;"></div>
				<div class="w3-container w3-card-4 w3-light-grey w3-centered">
					<h2 class="w3-center w3-xlarge">5-seater</h2>
					<table class="w3-table-all w3-centered w3-card-4">
						<tr>
							<th>Room No.</th>
							<th>resident1</th>
							<th>resident2</th>
							<th>resident3</th>
							<th>resident4</th>
							<th>resident5</th>
						</tr>
						<tr>
							<td>1</td>
							<td>tuba</td>
							<td>noor</td>
							<td>madiha</td>
							<td>mariyum</td>
							<td>saba</td>
						</tr>
					</table>
				</div>
				<div class="w3-container w3-metro-dark-blue" style="height:0.5em;"></div>
				<div class="w3-container w3-card-4 w3-light-grey w3-centered">
					<h2 class="w3-center w3-xlarge">3-seater</h2>
					<table class="w3-table-all w3-centered w3-card-4">
						<tr>
							<th>Room No.</th>
							<th>resident1</th>
							<th>resident2</th>
							<th>resident3</th>

						</tr>
						<tr>
							<td>1</td>
							<td>tuba</td>
							<td>noor</td>
							<td>madiha</td>
						</tr>
					</table>
				</div>
				<div class="w3-container w3-metro-dark-blue" style="height:0.5em;"></div>
				<div class="w3-container w3-card-4 w3-light-grey w3-centered">
					<h2 class="w3-center w3-xlarge">2-seater</h2>
					<table class="w3-table-all w3-centered w3-card-4">
						<tr>
							<th>Room No.</th>
							<th>resident1</th>
							<th>resident2</th>
						</tr>
						<tr>
							<td>1</td>
							<td>tuba</td>
							<td>noor</td>
						</tr>
					</table>
				</div>
				<!--ig main ends-->



				<!--ig annexe starts-->	
				<div class="w3-container w3-metro-dark-blue" style="height:2em;"></div>
				<div class="w3-container w3-card-4 w3-light-grey w3-centered">
					<div class="w3-row w3-section">
						<div class="w3-center w3-xlarge" style="width:10em;">IG Hall Annexe</div>
					</div>
					<div class="w3-row w3-section">
							<div class="w3-center">
								<p>
									<input class="w3-radio" type="radio" name="floor" value="First"><label>First Floor</label>
									<input class="w3-radio" type="radio" name="floor" value="Ground"><label>Groung Floor</label>
								</p>
							</div>
					</div>
					<div>
						<p class="w3-left" style="width:10em;">
							<input class="w3-input w3-border" name="roomno" type="text" placeholder="Room no.">
						</p>
						
						<p class="w3-right">
							<button class="w3-button w3-section w3-blue w3-ripple">Enter</button>
						</p>
					</div>
				</div>
				<div class="w3-container w3-metro-dark-blue" style="height:0.5em;"></div>
				<div class="w3-container w3-card-4 w3-light-grey w3-centered">
					<h2 class="w3-center w3-xlarge">3-seater</h2>
					<table class="w3-table-all w3-centered w3-card-4">
						<tr>
							<th>Room No.</th>
							<th>resident1</th>
							<th>resident2</th>
							<th>resident3</th>

						</tr>
						<tr>
							<td>1</td>
							<td>tuba</td>
							<td>noor</td>
							<td>madiha</td>
						</tr>
					</table>
				</div>
				<div class="w3-container w3-metro-dark-blue" style="height:0.5em;"></div>
				<div class="w3-container w3-card-4 w3-light-grey w3-centered">
					<h2 class="w3-center w3-xlarge">2-seater</h2>
					<table class="w3-table-all w3-centered w3-card-4">
						<tr>
							<th>Room No.</th>
							<th>resident1</th>
							<th>resident2</th>
						</tr>
						<tr>
							<td>1</td>
							<td>tuba</td>
							<td>noor</td>
						</tr>
					</table>
				</div>
				<!--ig annexe ends-->
				<div>
					<p class="w3-right">
						<a href="stflogin.php" style="text-decoration: none;"><button class="w3-button w3-section w3-gray w3-ripple">GoBack</a></button>
					</p>
				</div>
			</div>
		</center>
	</form>
	</div>

</body>
</html>