<!DOCTYPE html>
<html>
	<head>
		<?php
			session_start();
			if(isset($_SESSION['zalogowany']))
			{
				header("Location: zalogowany.php");
				exit();
			}
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>test html</title>
		
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;700&display=swap" rel="stylesheet">

	</head>

	<body class="logowanie">
		<div id="containerr">
			<div id="formm">
				<div id="imga"></div> 
				<div id="inputs">
					<form action="zaloguj.php" method="post">
						<span class="logo">Wpisz Login</span><br/>
						<input type="text" name="login">
						<br/><br/>
						<span class="logo">Wpisz Hasło</span><br/>
						<input type="password" name="haslo">
						<br/><br/>
						<input type="submit" name="zaloguj" value="Zaloguj">
						<br/><br/>
						


					</form>

					<a class="forgotpass" href="forgotpass.php">Zapomniałeś hasła?</a>

					<div><?php 
							if(isset($_SESSION['blad']))
							{
								echo $_SESSION['blad'];
							}
						?></div>

				</div>

			</div>
		</div>

	</body>
</html>