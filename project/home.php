<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<title>Hall Allotment System Indira Gandhi Hall</title>	
	<link rel="stylesheet" href="includecss/w3.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-win8.css" type="text/css">
	<link rel="stylesheet" href="includecss/w3-colors-metro.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
<!-- home page starts here -->

	<!-- nav bar section starts here -->

		<div class="w3-large w3-bar w3-black" style="position:fixed;">
			
			  <a href="#" class="w3-bar-item  w3-hover-grey  w3-button" style="width:11em;" >Home</a>
			  <a href="about.php" class="w3-bar-item  w3-hover-grey  w3-button" style="width:12em;">About</a>
			  <a href="staff.php" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Staff Members</a>
			  <a href="student.php" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Students</a>
			  <a href="admin.php" class="w3-bar-item w3-hover-grey w3-button" style="width:12em;">Admin</a>
			  <a href="contacts.php" class="w3-bar-item w3-hover-grey w3-button" style="width:13em;">Contact Us</a>	

		</div>

	<!-- nav bar section ends here -->


<div class="w3-container w3-light-grey" >


	<!-- logo and title section starts here -->
		<div class="w3-container w3-light-grey" style="margin-top:3em;">
			<div>
				<img src="pics/logo1.jpg" alt="logohere" style="width:7em; height:6em; float:left;">
				<h1 class="w3-opacity" style="text-decoration:bold; color:rgb(0,125,20);">
					Hall Allotment System  INDIRA GANDHI HALL
				<h1>
			</div>
		</div>

	<!-- logo and title section ends here -->



	<!-- image section stars here -->

		<div class="w3-container w3-light-grey" style="height:33.2em;">
			<img class="mySlides" src="pics/B.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
			<img class="mySlides" src="pics/A.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
	
			<img class="mySlides" src="pics/D.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
			<img class="mySlides" src="pics/E.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
			<img class="mySlides" src="pics/O.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
			<img class="mySlides" src="pics/P.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
		
			<img class="mySlides" src="pics/Q.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
	
			<img class="mySlides" src="pics/S.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
	
			<img class="mySlides" src="pics/T.jpg" alt="front" style="width:86em; height:32.5em; float:right;">

		
			<img class="mySlides" src="pics/G.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
			<img class="mySlides" src="pics/H.jpg" alt="front" style="width:86em; height:32.5em; float:right;">
		
			<img class="mySlides" src="pics/L.jpg" alt="front" style="width:86em; height:32em; float:right;">
	
			<img class="mySlides" src="pics/N.jpg" alt="front" style="width:86em; height:32em; float:right;">
		
			


		</div>

		<script>
				var slideIndex = 0;
				carousel();

				function carousel() {
				    var i;
				    var x = document.getElementsByClassName("mySlides");
				    for (i = 0; i < x.length; i++) {
				      x[i].style.display = "none"; 
				    }
				    slideIndex++;
				    if (slideIndex > x.length) {slideIndex = 1} 
				    x[slideIndex-1].style.display = "block"; 
				    setTimeout(carousel, 2000); 
				}
		</script>

	<!-- image section ends here -->

<!-- home page ends here -->
</body>
</html>