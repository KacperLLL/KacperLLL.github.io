<?php
	session_start();
	if(!isset($_SESSION['zalogowany']))
	{
		header("Location: index.php");
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>wisielec</title>

		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;700&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body class="wisielec">

	<a href="wyloguj.php" class="forgotpass" style="color: white;">WYLOGUJ</a><br/><br/>
	<a href="zalogowany.php" class="forgotpass" style="color: white;">Powrót</a><br/><br/>

	<script src="skrypt.js"></script> 

	<div id="container">
		<div id="haslo"></div>
		<div id="obrazek"></div>
		<div id="litery"></div>
		<div style="clear: both;"></div>


	</div>


</body>
</html>