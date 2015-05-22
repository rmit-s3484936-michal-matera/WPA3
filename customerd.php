<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style-ticket.css">
		<link rel="stylesheet" href="css/style.css">
		<title>Customer Details</title>
	</head>
	<body>
		<div id="bookPg">
			<div id="cusDet">
				<form>
					Name
					<input type="text" placeholder="John Smith" pattern="^[A-z][a-z]{1,15}[ ][A-Z][a-z]{1,25}$" required>		
					<br>
					Email
					<input type="email" placeholder="johnsmith@hotmail.com"required>
					<br>
					Phone
					<input type="tel" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" placeholder="04/(04)/+614 4444 4444" required>
					<br><br>
					<input type="submit">
					<input type="reset">

				</form>
			</div>
			<div id="bookInf">

			</div>			
		</div>
	</body>
</html>

