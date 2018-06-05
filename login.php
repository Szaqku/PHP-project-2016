<?php  session_start();  
if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) 
{	
	header('Location: index.php'); 
	exit();
}	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Opis strony internetowej o treści nijakiej." />
	<meta name="keywords" content="strona,html,cos,aha,itd,hhaha" />
	<link rel="stylesheet" href="style/style.css" type="text/css"/>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

	<title> High Elo TS</title>
</head>
<body>
	<div id="logo"> <span class="cR">H</span>IGH <span class="cR">E</span>LO <span class="cR">TS</span> </div>
	
	<div id="container"> 
	
		<?php include("menu.php");  menu(); ?>
		
		<div id="tresc"> 
		
			<form id="logowanie" action="logowanie.php" method="post"> <div>
			<p class="Logowanie"> Logowanie </p>
			<input type="text" placeholder="Login" name="login" />
			<input type="password" placeholder="Hasło" name="haslo" /> 
			<input type="submit" value="Zaloguj" />
			<p id="rej"> <a href="rejestracja.php"> Zarejsetruj się </a> </p>
			</div> </form> 
		
		
		</div>
	<div id="footer"> Szaqku 2016r. &copy;</div>
	</div>
	

</body>
</html>

