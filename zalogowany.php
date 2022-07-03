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
	<title>gra</title>
	<link rel="stylesheet" href="style.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,700;1,300&display=swap" rel="stylesheet">

	 <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

	 <script>
	 	var isOpen = false;
	 	var tryb = false;
	 	var bo = document.getElementById("body")
	 </script>


</head>
<body class="gra">
	<div id="menu"></div>
	<script>
		$("#menu").click(function(){
			if(!isOpen)
			{	
				$("#menuopen").fadeIn();
				isOpen = true;
			}

			else
			{
				$("#menuopen").fadeOut();
				isOpen = false;
			}

		});

	</script>

	<div id="menuopen">
		<h1>Witaj w panelu Menu! </h1>
		<h3>Tryb ciemny</h3>
		<input type="checkbox" id="openclose">
		<br/><br/>
		<button>Zapisz</button>

	</div>
	<a href="wyloguj.php" class="forgotpass">WYLOGUJ</a><br/><br/>
	<div><input type="text" id="liczba1"><input type="text" id="liczba2"><button id="sprawdz">Sprawdz</button></div>

	<script>
		var liczba;

		$('#sprawdz').click(function(){
			liczba1=document.getElementById("liczba1").value;
			liczba2=document.getElementById("liczba2").value;
			
			liczba1=parseInt(liczba1);
			liczba2=parseInt(liczba2);
			
			if (liczba1>liczba2) {
				var przedzial = liczba2.toString()+", ";
				liczba2++;

				while(liczba2<=liczba1)
				{
					przedzial = przedzial+liczba2.toString()+", ";
					liczba2++;
				}

				document.getElementById("wynik").innerHTML = przedzial;

			}
			else if(liczba2>liczba1){
				var przedzial = liczba1.toString()+", ";
				liczba1++;

				while(liczba1<=liczba2)
				{
					przedzial = przedzial+liczba1.toString()+", ";
					liczba1++;
				}

				document.getElementById("wynik").innerHTML = przedzial;
			}
			else {	
				document.getElementById("wynik").innerHTML = liczba1;
			}
		});
	</script>

	<div id="wynik"></div>
	<br/><br/>
	<a href="slider.php" class="forgotpass" style="font-weight: 700;">Slider ze zdjeciami</a><br/><br/>
	<a href="wisielec.php" class="forgotpass" style="font-weight: 700;">Wisielec gra</a>


</body>
</html>