<?php

// These arrays should be in an included config.php file to connect to the database.
	$db_host		=	"localhost";
	$db_user		=	"root";
	$db_password	=	"";
	$db_name		=	"divigostables";
#################################################################################

// This should be in a includes.php file

// Connects to your Database 

$con = mysql_connect("$db_host","$db_user", "$db_password"); 	//	Verbinding maken met de database
	if (!$con)													//	De gegevens nodig voor de verbinding staan in includes/config.inc.php
  	{															//
 		 die('Could not connect: ' . mysql_error());			//	Wannneer er geen juiste verbinding is zal er een error met uitleg verschijnen.
  	}															//
	mysql_select_db("$db_name", $con);							//
 
###############################################################################

	//$domain =  "http://".$_SERVER['HTTP_HOST'];
	$domain = "http://localhost/divigostables";

	$user_email			=	"divigotf@gmail.com";
	$user_name			=	"Patricia Kuijpers, Divigo Stables";
	$user_topmessage	=	"Thank you for contacting us.
							
							We received the following information from you.";
	$user_abrev			=	"DTF";
	
	$current_year		=	date('Y');

?>