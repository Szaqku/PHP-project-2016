<?php  session_start(); include("polecenia.php"); Licznik_Odwiedzin(); ?>

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
	
		<div id="strona"> 
		
			<div id="tresc_strony">
				<?php
			
			if(isset($_SESSION['ranga']))
			{
				if($_SESSION['ranga'] == "Admin" || $_SESSION['ranga'] == "Mod")
				{
					echo '
					<div id="narzedzia">
				
					<div id="dodaj"><form action="add_article.php"><input type="submit" value="Dodaj artykuł" /></form> </div>
					
					
					</div> ';
				}				
			}
			?>
					<?php 
					
						Sprawdz_Posty();
					
					?>
			
			</div>
			
			
			<div style="clear:both">
			</div>
		
		</div>
	</div>
	
	<div id="footer"> Szaqku 2016r. &copy;</div>
</body>
</html>