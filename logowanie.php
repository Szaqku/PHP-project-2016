<?php

    session_start();  
	if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) 
	{	
		header('Location: index.php'); 
		exit();
	}
	
	$_SESSION['log']= true;
	
	$SESSION_['zalogowany'] = false;
	
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];

	$plik = "users/".$login.".txt";
	if (file_exists($plik))
	{	
		$lista = file($plik);

		foreach ($lista as $user)
		{
		  $tuser = explode('|',$user);
		  $login1 = $tuser[1];
		  $haslo2 = $tuser[2];
		}
		if($login == $login1)
		{
			if($haslo ==$haslo2)
			{
				$_SESSION['zalogowany'] = true;
			
				$lista = file($plik);

				foreach ($lista as $user)
				{
					$tuser = explode('|',$user);
					$_SESSION['numer'] = $tuser[0]+1;
					$_SESSION['login'] = $tuser[1];
					$_SESSION['email'] = $tuser[3];
					$_SESSION['ranga'] = $tuser[4];
				}
				
				$fp = fopen($plik,w);
					fwrite($fp, $_SESSION['numer']."|".$_SESSION['login']."|".$haslo."|".$_SESSION['email']."|".$_SESSION['ranga']."|" );
				fclose($fp);
				
				 
				header('Location: logowanie_b.php');
			}
			else 
			{
				$_SESSION['haslo_B']= "ZŁE HASŁO";
				header('Location: logowanie_b.php');
				
			}
		}
		else 
		{
			
			$_SESSION['login_B']= "NIE MA TAKIEGO UŻYTKOWNIKA";
			header('Location: logowanie_b.php');
			
		}
		
	}
	else 
	{
			 
			$_SESSION['login_B']= "NIE MA TAKIEGO UŻYTKOWNIKA";
			header('Location: logowanie_b.php');
			
			
	}
?>