<!DOCTYPE HTML>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Opis strony internetowej o treści nijakiej." />
	<meta name="keywords" content="strona,html,cos,aha,itd,hhaha" />
	<link rel="stylesheet" href="style/style.css" type="text/css"/>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

	<title> High Elo TS</title>
</head>
<body>
<?php
	
	
	$email = $_POST['email'];
	$temat = $_POST['temat'];
	$tresc = $_POST['tresc'];
	$headers = 'From: '.$email;
	$headers  .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	$mail =mail('szaqku@gmail.com',$temat,$tresc,$headers) ;
	if ($mail == true)
	{
		echo 'Udało się !!! <br /> <a href="opinia.php">Powrót</a>';
	}
	else 
	{
		echo 'Nie udało się !!! <br /> <a href="opinia.php" style="color: red; font-weight: bold; background: none;">Powrót</a>';
	}
	
	
?>
</body>
</html>