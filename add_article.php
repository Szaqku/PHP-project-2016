<?php  session_start(); 
	if(!isset($_SESSION['ranga']) && ($_SESSION['ranga']!="Mod" || $_SESSION['ranga']!="Admin"))
	{
		header('Location: index.php');
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
	
		<div id="strona"> 
		
			
			<div id="tresc" style="padding: 10px;">
			
				<div id="pole">
					<form action="add_article_2.php" method="post">
						<input type="text" name="temat" placeholder="Temat ..."/>
						<textarea name="tresc" placeholder="Treść" maxlength="2000"> </textarea>
						<input type="submit" value="Prześlij"/>
					
					</form>
					<p id="reg">| Max size: 2000 znaków. | Obsługa tagów HTML dostępna ! | Temat max znaków: 40 |</p>
				</div>
	
			</div>
			
			
			<div style="clear:both">
			</div>
		
		</div>
	</div>
	
	<div id="footer"> Szaqku 2016r. &copy;</div>
</body>
</html>