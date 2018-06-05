<?php
function Licznik_Odwiedzin() {

	$plik = "info/licznik.txt";
	$fp = fopen($plik,'r');
	$l = fread($fp,filesize($plik));
	
	$l++;
	
	$fp = fopen($plik,'w');
	fputs($fp, $l);
	fclose($fp);
	
}

function Licznik_Odwiedzin_Info() {

	$plik = "info/licznik.txt";
	$fp = fopen($plik,'r');
	$l = fread($fp,filesize($plik));
	
	fclose($fp);
	
	return " ".$l." ";
}

function Zmiana_Rangi($user,$new_ranga){
	
	$plik = "users/".$user.".txt";
	if (file_exists($plik))
	{	
		$lista = file($plik);
		
		foreach ($lista as $user)
			{
				$tuser = explode('|',$user);
				$numer= $tuser[0];
				$login= $tuser[1];
				$haslo = $tuser[2];
				$email = $tuser[3];
			}
			
		$_SESSION['good_zh']="Udało się";	
			$fp = fopen($plik,w);
				fwrite($fp, $numer."|".$login."|".$haslo."|".$email."|".$new_ranga."|" );
			fclose($fp);
			
		if($login == $_SESSION['login']) {$_SESSION['ranga'] = $new_ranga;}
	}
	
	else 
	{
		$_SESSION['blad_zh']="Nie udało się";
	}
}	
function Post($art){
	
		$article = 'articles/'.$art.'.txt';
		$topic = 'topics/'.$art.'.txt';
		
		$fp = fopen($article,'r');
		
		$tresc = fread($fp,filesize($article));
		fclose($fp);
		
		$fp = fopen($topic,'r');
		$temat = fread($fp,filesize($topic));
		fclose($fp);
		
		$nazwa = explode('_',$art);
		
		$nr= $nazwa[0];
		$author = $nazwa[1];
		
		
		echo '<p class="title">'.$temat.'</p>';
		echo '<p class="content">'.$tresc.'</p><hr>';
		echo'<div class="podpis">';
		if(isset($_SESSION['ranga']))
			{
				if($_SESSION['ranga'] == "Admin" || $_SESSION['ranga'] == "Mod") {echo '<div style="float:left;"><form action="del_article.php" method="post" class="usun"><input type="submit" value="Usuń"  />    <input type="number" name="num" style="display:none;"value="'.$nr.'" /></form></div>';}
			}
		echo '<p class="podpis">'.$nr.' by: <span style="color: limegreen";>'.$author.'</span></p>';
		echo'</div>';
}
function Sprawdz_Posty()
{
	$katalog = 'articles';
	
	$plik = scandir($katalog,1);
	
	foreach($plik as $art)
	{
		if($art != "." && $art != "..")
		{
			$l = strlen($art);
		    $art = substr($art,0,$l-4); 
			
			echo '<div class="article">';
			Post($art);
			echo '</div>';
							
		}
	}
}
function Sonda_wyniki() 
{
	$sto = 100;
	$vote_suma= 0;
	
	$fp = fopen("info/sonda.txt",'r');
	
	$votes = file('info/sonda.txt');
	
	foreach($votes as $votee)
	{
		$vote = explode('|',$votee);
	}
	for($i = 0; $i < 5; $i++)
	{
		$vote_suma+=$vote[$i];
	}
	
	for($i=0;$i < 5; $i++)
	{
		$v[$i] = $vote[$i];
	}
		
	
	for($i=0;$i < 5; $i++)
	{
		if($vote[$i] != 0)
		{
			$vote[$i]=round($vote[$i]/$vote_suma*$sto,1);
			$vote[$i] .="%";
		}
	}
	
	$star = '<img src="img/star.png" alt="star">';
	
	echo '<ul>
						<li> <img src="img/o1.png" alt="pasek" width="'.$vote[0].'"><span class="img_tx"> 5'.$star.' </span><span class="img_text">'.$vote[0].' | '.$v[0].'</span></li>
						<li> <img src="img/o1.png" alt="pasek" width="'.$vote[1].'"><span class="img_tx"> 4'.$star.' </span><span class="img_text">'.$vote[1].' | '.$v[1].'</span></li>
						<li> <img src="img/o1.png" alt="pasek" width="'.$vote[2].'"><span class="img_tx"> 3'.$star.' </span><span class="img_text">'.$vote[2].' | '.$v[2].'</span></li>
						<li> <img src="img/o1.png" alt="pasek" width="'.$vote[3].'"><span class="img_tx"> 2'.$star.' </span><span class="img_text">'.$vote[3].' | '.$v[3].'</span></li>
						<li> <img src="img/o1.png" alt="pasek" width="'.$vote[4].'"><span class="img_tx"> 1'.$star.' </span><span class="img_text">'.$vote[4].' | '.$v[4].'</span></li>
						
					</ul>';
					
	fclose($fp);
}
?>