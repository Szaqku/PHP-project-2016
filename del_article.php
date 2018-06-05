<?php

	if(!isset($_SESSION['ranga']) && !isset($_POST['num']) && ($_SESSION['ranga'] != 'Admin' || $_SESSION['ranga']!= 'Mod'))
	{
		header('Location: index.php');
	}

	$post = $_POST['num'];
	
	$katalog = 'articles';
	$plik = scandir($katalog,1);
	
	
	foreach($plik as $art)
	{
		if($art != "." && $art != "..")
		{
			$zm = substr($art,0,12);
			if($zm == $post)
			{
				$tp = $art;
			}
		}
	}
	if(isset($tp))
	{
		unlink('articles/'.$tp);
		unlink('topics/'.$tp);
	}
	
	header('Location: index.php')
?>