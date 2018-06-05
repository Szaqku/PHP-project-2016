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
			
			<?php if(!isset($_COOKIE['Sonda_HET'])) {echo'
				<form method="post" action="sonda_wyniki.php"><div id="vote"> 
					<p> Twoja ocena strony: </p>
					<ul>
						<li>	<input id="piec" type="radio" name="vote" value="1" checked />	<label for="piec"><span></span> <img src="img/star.png" alt="star"><img src="img/star.png" alt="star"><img src="img/star.png" alt="star"><img src="img/star.png" alt="star"><img src="img/star.png" alt="star"></label>	</li>
						<li>	<input id="cztery" type="radio" name="vote" value="2"/>	<label for="cztery"><span></span> <img src="img/star.png" alt="star"><img src="img/star.png" alt="star"><img src="img/star.png" alt="star"><img src="img/star.png" alt="star"></label>	</li>
						<li>	<input id="trzy" type="radio" name="vote" value="3"/>	<label for="trzy"><span></span>  <img src="img/star.png" alt="star"><img src="img/star.png" alt="star"><img src="img/star.png" alt="star"></label>	</li>
						<li>	<input id="dwa" type="radio" name="vote" value="4"/>	<label for="dwa"><span></span> <img src="img/star.png" alt="star"><img src="img/star.png" alt="star"></label>	</li>
						<li>	<input id="jeden" type="radio" name="vote" value="5"/>	<label for="jeden"><span></span>  <img src="img/star.png" alt="star"></label>	</li>
					</ul>
					<input type="submit" value="Wyślij"  />
					
				</div></form>';}
				else {
					echo '<div id="vote"> <p id="sonda_off"> Moża głosować co 10 minut. <br /> [ lub wyczyść cookie ]</p></div>';
				}
			?>
				<div id="puste"> </div>
				
				
				<div id="sonda"> 
				
					<?php include('polecenia.php'); Sonda_wyniki(); ?>
				
				</div>
			</div>
		</div>
		
		
		</div> <div style="clear: both;"> </div>
		</div>
		
		</div>
	</div>
	
	<div id="footer"> Szaqku 2016r. &copy;</div>
</body>
</html>