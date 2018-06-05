<?php  session_start(); ?>

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

			<form action="w_opinia.php" method="post"><table id="Opinia">
				<tr><td colspan="2" id="Wyslij_Opinie">Wyślij Opinie</td></tr>
				<tr><td class="Pole">Email:</td><td><input type="email" name="email" <?php if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) echo 'value=" '.$_SESSION['email'].'" ' ?>/></td></tr>
				<tr><td class="Pole">Temat:</td><td><input type="text" name="temat"/> </td></tr>
				<tr><td colspan="2" id="ta"><textarea name="tresc"> </textarea></td></tr>
				<tr><td colspan="2" id="Submit"> <input type="submit" value="Wyślij" /></td></tr>
			</table></form>

		</div>
	</div>
	
	<div id="footer"> Szaqku 2016r. &copy;</div>
</body>
</html>