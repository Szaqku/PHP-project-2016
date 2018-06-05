<?php session_start(); 

if(!isset($_SESSION['log'])) 
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
		
			<div id="logowanie"> 
				
				<?php 
				if(isset($_SESSION['login_B']) || isset($_SESSION['haslo_B']))
				{
					echo '<p class="kom"> Logowanie nie powiodło się.  </p> ';
					
					if(isset($_SESSION['login_B'])) {echo '<p class="blad">'.$_SESSION['login_B'].'</p>';}
					if(isset($_SESSION['haslo_B'])) {echo '<p class="blad">'.$_SESSION['haslo_B'].'</p>';}
					
					session_unset();						
					echo '<a href="login.php"><p> Powrót</p></a>';
				}	
				else 
				{
				     echo '<p class="kom_g"> Gratualcje !!!<br /> Logowanie powiodło się.</p>';
					 echo '<a href="index.php"><p> Dalej </p></a>';
				}
				
				unset($_SESSION['log']);

				?>
					
				
			</div> 
		
		
		</div>
	<div id="footer"> Szaqku 2016r. &copy;</div>
	</div>
	

</body>
</html>
