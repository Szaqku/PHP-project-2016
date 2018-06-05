<?php  session_start();  
	
	if(!isset($_SESSION['rej']))  
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
		
		<div id="rejestracja_b">
		<?php	if(isset($_SESSION['login_a']) || isset($_SESSION['login_b']) || isset($_SESSION['login_c']) || isset($_SESSION['email_b']) || isset($_SESSION['haslo_b'])) 
					{
						echo '<p class="kom"> nie udalo sie zarejestrowac. </p>';
						if(isset($_SESSION['login_a'])) echo '<p class="blad">'.$_SESSION['login_a']."</p>";
						if(isset($_SESSION['login_b'])) echo '<p class="blad">'.$_SESSION['login_b']."</p>";
						if(isset($_SESSION['login_c'])) echo '<p class="blad">'.$_SESSION['login_c']."</p>";
						if(isset($_SESSION['email_b'])) echo '<p class="blad">'.$_SESSION['email_b']."</p>";
						if(isset($_SESSION['haslo_b'])) echo '<p class="blad">'.$_SESSION['haslo_b']."</p>";
						
						echo '<a href="rejestracja.php"><p> Powrót</p></a>';
					}	
					else 
					{
					     echo '<p class="kom_g"> Gratualcje !!!<br /> Rejestracja powiodła się.</p>';
						 echo '<a href="login.php"><p> Dalej </p></a>';
					}
				session_unset();
				?>
				
					
		</div>
		
		
		</div>
	<div id="footer"> Szaqku 2016r. &copy;</div>
	</div>
	

</body>
</html>