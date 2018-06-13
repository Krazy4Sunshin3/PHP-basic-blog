<?php 
/*
* Format The Date
*/

function formatDate ($date) {
	return date('j F, Y, g:i a', strtotime($date));
}

/*
* 
*/

function shortenText($text ,$chars = 450) {
	$text = $text." ";
	$text = substr($text, 0, $chars);
	$text = substr($text, 0, strrpos($text, ' '));
	$text = $text. "...";
	return $text;
}