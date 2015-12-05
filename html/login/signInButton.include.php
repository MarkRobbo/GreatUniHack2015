<a href="<?php
	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();
	echo $steamSignIn->genUrl("http://46.101.29.75/login/validate.php");
?>"><img src="https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_large_noborder.png" alt="Login through Steam"></a>