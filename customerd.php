<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style-ticket.css">
		<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-index.css">
		<title>Customer Details</title>
	</head>
	<body>
		<?php include 'includes/header.php';?>
		<div id="bookPg">
			<div id="cusDet">
				<form method="post">
					Name
					<input type="text" placeholder="John Smith" pattern="^[A-z][a-z]{1,15}[ ][A-Z][a-z]{1,25}$" required>		
					<br>
					Email
					<input type="email" placeholder="johnsmith@hotmail.com"required>
					<br>
					Phone
					<input type="tel" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" placeholder="04/(04)/+614 4444 4444" required>
					<br><br>
					<input type="submit" onclick="function echoPost()">
					<input type="reset">

				</form>
			</div>
			<div id="bookInf">

			</div>			
		</div>
		<?php include 'includes/footer.php';?>
<?php
 function echoPost(){
foreach( $_POST as $key => $value ){
    echo $key."\t=>\t".$value."\n";}

}

?>


	</body>
</html>

