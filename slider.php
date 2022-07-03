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
	<title>slider</title>

		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;700&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body class="slider" onload="slajdChange()">

	<script>
		var slajd_id = Math.floor(Math.random()* 4) + 1;
		var timer1;
		var timer2;

		function schowaj() {
			$('#slajder').fadeOut(500);
		}

		function zmienslajd(nrslajdu)
		{
			clearTimeout(timer1);
			clearTimeout(timer2);
			slajd_id = nrslajdu;
			slajdChange();
		}

		function slajdChange() {
			slajd_id++;
			if(slajd_id>4)
			{
				slajd_id = 1;
			}
			var plik = "<img style=\"width: 500px; height: 500px;\" src=\"img\\"+slajd_id+".jpg\"/>";
			document.getElementById("slajder").innerHTML = plik;
			$('#slajder').fadeIn(500);
			timer1= setTimeout("slajdChange()", 5000);
			timer2=setTimeout("schowaj()", 4500)
		}

	</script>

	<a href="wyloguj.php" class="forgotpass" style="color: white;">WYLOGUJ</a><br/><br/>
	<span onclick="zmienslajd(1)" style="font-size: 30px; font-weight: 700; cursor: pointer;">[1]</span>
	<span onclick="zmienslajd(2)" style="font-size: 30px; font-weight: 700; cursor: pointer;">[2]</span>
	<span onclick="zmienslajd(3)" style="font-size: 30px; font-weight: 700; cursor: pointer;">[3]</span>
	<span onclick="zmienslajd(4)" style="font-size: 30px; font-weight: 700; cursor: pointer;">[4]</span>
	<br/><br/>
	<div id="slajder"></div>
	<br/><br/>
	<a href="zalogowany.php" class="forgotpass" style="color: white;">Powrót</a>

</body>
</html>