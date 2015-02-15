<?php

	$page_id = "Index pagina"; // De tekst tussen de " " moet je veranderen voor de pagina titel ( <title></title> )
	
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
        	Lorem Ipsum
        </div>
        <div class="content">
       		<span class="right">
   				<img src="album/tries supreme.jpg" /> 
			</span>   
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in augue et tellus tincidunt tempus sit amet nec justo. Nunc a urna tellus. Fusce bibendum neque non leo auctor et auctor elit faucibus. Donec at nibh ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nisl nisl, egestas sit amet fermentum lobortis, euismod quis tellus. Integer a ullamcorper enim. Integer lobortis sem sit amet ligula sagittis luctus. Vivamus diam ante, mollis a viverra vel, semper vestibulum dolor. 
         
Nullam molestie elit non dui tincidunt bibendum. In hac habitasse platea dictumst. Aliquam malesuada semper augue eu lacinia. Integer rutrum odio sed sem commodo vel iaculis mi laoreet. Quisque massa risus, sagittis eget condimentum quis, vulputate sit amet felis. Nullam ultricies feugiat est, quis mattis quam consectetur vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin adipiscing facilisis dictum.
<br />
<br />
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc pulvinar nunc quis sapien viverra commodo. Proin eu risus at dolor aliquet eleifend. Nam id sapien a quam viverra dictum eget eget odio. Nunc vitae est eu lorem posuere tincidunt convallis vel libero. Fusce nec massa eget tortor dapibus egestas blandit eget elit. Ut dignissim erat ut tellus ultrices suscipit. Mauris eu sem at risus venenatis volutpat in sit amet elit. Morbi vestibulum posuere dui et auctor. Praesent quis urna neque, et gravida nisi. In posuere sagittis nisi, vitae dapibus neque accumsan quis.
<br />
<br />

Pellentesque laoreet gravida mi vel luctus. Morbi sed ligula sapien. Pellentesque blandit diam at quam mattis eu auctor turpis tristique. Aliquam aliquam mollis nisi, non congue metus molestie in. Vivamus consequat metus posuere ipsum vulputate pharetra. Curabitur eleifend libero vel massa vulputate sed dignissim magna molestie. In hac habitasse platea dictumst. Curabitur convallis felis eu nisl eleifend nec sagittis diam tempor. Aenean ultricies sodales urna, vel dapibus diam eleifend eget. Praesent magna augue, rutrum at congue ut, congue ac odio. Donec sed justo velit, ut volutpat diam. Ut justo orci, volutpat vitae tempus in, vestibulum in nisl. Maecenas pretium malesuada faucibus. Mauris dictum, turpis ac tristique pellentesque, ligula arcu accumsan nisl, vel dapibus quam enim vel mauris. Nulla ornare porta gravida. Ut auctor congue neque at pharetra. Curabitur molestie nisi mauris. Curabitur tellus arcu, consequat ut tincidunt laoreet, facilisis volutpat diam. Nunc fringilla cursus metus, eget sodales augue facilisis ac.
 
        </div>
	</div>

</div>


<?php
include ('templates/sidemenu.html');


?>


<?php

include ('templates/footer.html');

?>