<?php

    session_start();  
	if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) 
	{	
	header('Location: index.php'); 
	exit();
	}	

	$login  = $_POST['login'];
	$email = $_POST['email'];
	$haslo1 = $_POST['haslo1'];
	$haslo2	= $_POST['haslo2'];
	
	$rejestracja = true;
	$_SESSION['rej'] = true;
			
	if (ctype_alnum($login)==false) // Sprawdzanie loginu pod wzgledem znaków w nim zawatych.
	{
		$rejestracja = false;
		$_SESSION['login_a']="Login zawiera niewłaściwe znaki !";
	}	
	if ((strlen($login)<3) || (strlen($login)>12))
		{
			$rejestracja=false;
			$_SESSION['login_b']="Login musi mieć min 3 znaki i mniej niż 12";
		}
	
	$katalog    = 'users'; 
	$pliki = scandir($katalog,1); 
	foreach($pliki as $plik) 
	{
		if($plik == $login.".txt")
		{
			$rejestracja = false;
			$_SESSION['login_c']=" Login zajęty. ";
		}
		
	}	
	
	
	if($haslo1 != $haslo2 )
	{
		$rejestracja=false;
		$_SESSION['haslo_b']="Hasła są różne.";
	}
	
	if($haslo1 == "" || $haslo2 == "")
	{
		$rejestracja=false;
		$_SESSION['haslo_b']="Wypadałoby wpisać hasło ^^ ";
	}
	
	if ($rejestracja==true)
	{
		$fp = fopen("users/".$login.".txt","w");
	
		fputs($fp,"0|".$login."|".$haslo1."|".$email."|"."User|");
		
		fclose($fp);
		
		
		header('Location: rejestracja_b.php');
	}
	else 
	{
		
		header('Location: rejestracja_b.php');
	}
?>