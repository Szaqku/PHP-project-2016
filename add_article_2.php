<?php
	session_start();
	if(!isset($_POST['temat']) || !isset($_POST['tresc']))
	{
		header('Location: add_article.php');
		exit();
	}
	else 
	{	
		ob_start();
		date_default_timezone_set('Europe/Warsaw');
		
		$temat = $_POST['temat'];
		$tresc = $_POST['tresc'];
		
		if($temat == "") {$temat ="Brak tematu.";}
		if($tresc == " ") {$tresc ="Pusty post.";}

		$id = date('YmdHi');
		echo $id;
			
		$fp = fopen("articles/".$id.'_'.$_SESSION['login'].".txt",w);
		
			
		fputs($fp,nl2br($tresc));
			
		fclose($fp);
		
		$fp = fopen("topics/".$id.'_'.$_SESSION['login'].".txt",w);
		
		fputs($fp,$temat);
		
		fclose($fp);
		
		
		header('Location: login.php');
		ob_end_flush();
	}
?>