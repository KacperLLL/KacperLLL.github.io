<?php
	session_start();

	if((!isset($_POST['login'])||(!isset($_POST['haslo']))))
	{
		header("Location: index.php");
		exit();
	}

	require_once "connect.php";

	$login = $_POST['login'];
	$haslo = $_POST['haslo'];



	$polaczenie = new mysqli($host, $user, $pass, $db_name);

	$sql = "SELECT * FROM users WHERE login='$login' AND haslo='$haslo'";

	$wynik = $polaczenie->query($sql);

	if ($wynik->num_rows>0) {
		//zalogowano

		$rezultat = $wynik->fetch_assoc();
		$_SESSION['drewno']=$rezultat['drewno'];
		$_SESSION['kamien']=$rezultat['kamien'];

		$_SESSION['zalogowany']=true;

		unset($wynik);
		unset($_SESSION['blad']);
		unset($_SESSION['logerror']);

		header("Location: zalogowany.php");
	}

	else
	{
		//nie zalogowano
		header("Location: index.php");
		$_SESSION['blad']='<span style="color: red;"><b>Nieprawidłowy login lub hasło!</b></span>';
	}

	$polaczenie->close();

?>