<?php
if (!defined('_DEFVAR')) { //checking if the magic variable is defined, as it should be when it's accessed from where it should, aka through an include/require on a page that defines this variable
	$host  = $_SERVER['HTTP_HOST']; //even if it's usefull to declare that already in previous pages, redifining it here in case the check.php is requested directly 
	$extra = '403.php'; //that or whatever page you wanna redirect your users to whenever they snoop
	header("Location: https://$host/$extra"); //how to yeet snooping-users with no hassle
	exit; //because.
}
?>
