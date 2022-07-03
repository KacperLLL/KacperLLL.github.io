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
		<div id="container">
			<div id="formm">
				<div id="imga"></div> 
				<div id="inputs">
					<form action="mail.php" method="post">
						<span class="logo">Wpisz email</span>
						<input type="text" name="email">
						<input type="submit" name="send">
					</form>

					<?php 
						if(isset($_SESSION['logerror']))
							{
								echo $_SESSION['logerror']; 
							}
					?>
				</div>

			</div>
		</div>

	</body>
</html>




<?php
	


?>