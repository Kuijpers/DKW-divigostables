<?php

	$page_id = "About us"; // De tekst tussen de " " moet je veranderen voor de pagina titel ( <title></title> )
	
	// De includes hieronder zijn html bestanden welke in de map templates staan.
	// Als je 1 van de 2 menus niet wil gebruiken dan plaats je voor de include regel een //
	// // maakt er een comment van waardoor de browser deze niet leest.
	
include ('templates/header.html');
include ('templates/top.html');
//include ('templates/topmenu.html');

?>

<div class="overall_body">


<!-- In dit onderstaande gedeelte komt de tekst en eventueel de foto's te staan welke je op de pagina wilt laten zien -->

	<div class="center_body" id="textfield">
		<div class="title">
        	About us
        </div>
        <div class="content">
       		
 
        </div>
	</div>

</div>


<?php
include ('templates/sidemenu.html');


?>


<?php

include ('templates/footer.html');

?>