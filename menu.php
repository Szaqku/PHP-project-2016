<?php 

function menu(){
	echo '<nav>
			<ul>
				<a href="index.php"><li class="np"> Strona Główna </li> </a>
				<a href="sonda.php"><li class="p"> Sonda </li> </a>
				<a href="opinia.php"><li class="np"> Wyślij Opinie </li> </a>
				<a href="info.php"><li class="p"> Info </li> </a>';
				if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) { 																
						printf('<a href="wyloguj.php"><li class="np" style="color: yellow; letter-spacing: 0.1em;"> Wyloguj </li></a>');				
					}
					else {
						printf('<a href="login.php"><li class="np">Logowanie</li> </a>'); 
					} 
				echo ' 	 
			</ul>
		</nav>'; 

}

?>