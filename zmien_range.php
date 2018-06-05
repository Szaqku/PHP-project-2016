<?php
	session_start();
	
	if(!isset($_SESSION['ranga']) && $_SESSION['ranga']!="Admin")
	{
		header('Location: index.php');
	}
	
	include('polecenia.php');
	
	
	Zmiana_Rangi($_POST['user'],$_POST['ranga']);
		
	header('Location: info.php');
?>