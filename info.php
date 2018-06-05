<?php  session_start(); 
if(!isset($_SESSION['zalogowany'])) 
{	
	header('Location: login.php'); 
	exit();
}	
include('polecenia.php');

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
		
			<div id="informacje">
			
				<div style="float:left; width:2%; height: 500px;"> </div>
			
				<div id="info">
						<p> Ilość zalogowań: <span> <?php  echo $_SESSION['numer'] ?></span></p>
						<p> Login: <span> <?php  echo $_SESSION['login'] ?></span></p>
						<p> Email: <span> <?php  echo $_SESSION['email'] ?></span></p>
						<p id="ranga">RANGA</p>
						
						<img src="img/<?php echo $_SESSION['ranga']; ?>.png" alt="ranga" />
				</div>
				
				<div style="float:left; width:0.1%; height: 500px;"> </div>
				
				<div id="col2">
					<p id="licznik">
							Licznik odwiedzin strony głównej:<span class="licznik"><?php  echo Licznik_Odwiedzin_Info(); ?> </span>
					</p>
				
					<div id="panel">
					
					<?php
					if($_SESSION['ranga'] == 'Admin')
					{
						echo '<p class="list"> Lista zarejestrowanych użytkowników: </p>
						<ul>';
							$katalog = 'users'; 
						
						$i = 0;
						$pliki = scandir($katalog,1);
						foreach($pliki as $plik) 
						{
							if($plik != "." && $plik != "..")
							{
								$l = strlen($plik);
								$plik = substr($plik,0,$l-4); 
								echo ' | <li style="color: lightgreen">'.$plik.'</li>'; 
								$i++;
								if($i%6 == 0)
								{
									echo ' <br /> ';
								}
							}
						}
						echo ' | </ul>';
						
						echo'
						  <p class="list" style="margin-top: 230px;"> Zmina rangi użytkownika: </p> 
						 <div id="zmiana_hasla"><form method="post" action="zmien_range.php">
							<input type="text" placeholder="Login Użytkownika" name="user"/>
							<select name="ranga">
								<option value="Admin"> Admin </option>
								<option value="Mod"> Mod </option>
								<option value="User"> User </option>
							</select>
							<input type="submit" value="Zmień" />  
						</form></div>
						';
						if(isset($_SESSION['blad_zh']))
						{
							echo '<p id="bad">'.$_SESSION['blad_zh'].'</p>';
							unset($_SESSION['blad_zh']);
						}
						if(isset($_SESSION['good_zh']))
						{
							echo '<p id="good">'.$_SESSION['good_zh'].'</p>';
							unset($_SESSION['good_zh']);
						}
					}
					?>
					</div>
				</div> <div style="clear: both;"> </div>
			</div>
		
		</div>
	</div>
	
	<div id="footer"> Szaqku 2016r. &copy;</div>
</body>
</html>