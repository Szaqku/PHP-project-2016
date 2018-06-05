<?php

	
	
	if(!isset($_POST['vote']) || isset($_COOKIE['Sonda_HET']) )
	{
		header('Location: sonda.php');
		exit();
	}
	
	$zm =$_POST['vote'];
	
	$fp = fopen("info/sonda.txt",'r');
	
	$votes = file('info/sonda.txt');
	
	foreach($votes as $votee)
	{
		$vote = explode('|',$votee);
	}
	
	$vote[$zm-1]++;
	
	fclose($fp);
	
	$fp = fopen("info/sonda.txt",'w');
	
	$votes = implode('|',$vote);
	
	fputs($fp,$votes);
	
	fclose($fp);
	
	setcookie("Sonda_HET", 6-$_POST['vote'] .' gwiazdek', time()+600); 
	
	header('Location: sonda.php');
?>