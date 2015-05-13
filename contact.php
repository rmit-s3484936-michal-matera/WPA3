<!DOCTYPE html>
<html>
	<head>
		<meta name="keywords" content="Cinema, Movie, Silverado">
		<meta name="description" content="Silverado Cinema website">
		<title>Silverado Cinema Home</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/style-contact.css">
	</head>
	<body>
		<header>
				<img src="images/Header.png" alt="Silverado Cinema">
		</header>
		<nav>
			<a class="nav" href="index.php">HOME</a>
			<a class="nav" href="movies.php">MOVIES</a>				
			<a class="nav" href="#">CONTACT</a>
		</nav>
		
		<div id="cMain">		
			<div id="helpInfo">

			</div>

			<div id="contactForm">
				<h2>Contact us </h2>

				<form id="contact" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php" method="post">
					Name:
					<br>
					<input class="contact" type="text" name="name" autofocus required>
					<br>
					Email:
					<br>
					<input class="contact" type="text" name="email" required>
					<br>
					
					Subject:
					<br>
					<select class="contact" name="subject" required>
						<option selected disabled hidden value="">---Select---</option>
						<option value="General Enquiry">General Enquiry</option>
						<option value="Group and Corporate Bookings">Group and Corporate Bookings</option>
						<option value="Suggestions and Complaints">Suggestions & Complaints</option>
					</select>
					<br>
					
					Message:
					<br>
					<textarea class="contact" name="message" rows="7"required></textarea>
					<br>
					<input type="checkbox" name="test-email" value="true">Send test email?
					<br>
					<input class="contactbt" type="submit" value="Submit">
					<input class="contactbt"type="reset" value="Reset">						
				</form>
			</div>
			
		</div>	
		<div id="Footer">
			<hr class="foot">
			<!-- Copyright notice, nav links, html validation buttons -->
			
			<a class="foot" href="Home.html">Home</a>
		
			<a class="foot" href="Movies.html">Movies</a>	
			
			<a class="foot" href="Contact.html">Contact Us</a>

			<a class="foot" href="http://validator.w3.org/check?uri=referer">Validator</a>
			<br>
			<br>
		
			<div id="copyright">
				This page was created by Michal Matera (s3484936)
				<hr class="foot">
			</div>
		</div>	
	</body>
</html>