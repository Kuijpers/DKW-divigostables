<?php 
 function ShortenText($text,$chars) {



        // Change to the number of characters you want to display

        



        $text = $text." ";

        $text = substr($text,0,$chars);

        $text = substr($text,0,strrpos($text,' '));

        $text = $text."...";



        return $text;



    }
	

?>