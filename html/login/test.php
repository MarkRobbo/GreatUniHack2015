<?php
	error_reporting(E_ALL);
	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();
	echo ">" . $steamSignIn::genUrl();
?