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
		
			<form id="rejestr" action="rejestruj.php" method="post"><table> 
			<tr class="rejestr_napis"> <td colspan="2"> rejestracja</td> </tr>
			<tr class="pole"> <td> Login: </td> <td> <input type="text" name="login"/></td></tr>
			<tr class="pole"> <td> Email: </td> <td> <input type="email" name="email"/></td></tr>
			<tr class="pole"> <td> Hasło:  </td> <td> <input type="password" name="haslo1"/></td></tr>
			<tr class="pole"> <td> Hasło: </td> <td> <input type="password" name="haslo2"/></td></tr>
			<tr class="pole"> <td colspan="2"> <input type="submit" value="Potwierdz" /></td></tr>
					
			</table></form> 
		
		
		</div>
	<div id="footer"> Szaqku 2016r. &copy;</div>
	</div>
	

</body>
</html>