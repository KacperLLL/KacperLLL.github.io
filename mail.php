<?php
	
	session_start();

	if(!isset($_POST['email']))
	{
		header("Location: index.php");
		exit();
	}

	require_once "connect.php";

	$email = $_POST['email'];

	$polaczenie = new mysqli($host, $user, $pass, $db_name);

	$sql = "SELECT * FROM users WHERE email='$email'";

	$wynik = $polaczenie->query($sql);

	if($wynik->num_rows>0)
	{
		unset($_SESSION['logerror']);

	mail("kacperzak1980@gmail.com","Success","Send mail from localhost using PHP");
	}

	else
	{
		$_SESSION['logerror']='<span style="color: red;"><b>Nieprawidłowy email!</b></span>';
		header("Location: forgotpass.php");
	}

	$polaczenie->close();
?>