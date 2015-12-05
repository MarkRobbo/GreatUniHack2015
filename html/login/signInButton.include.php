<a href="<?php
	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();
	echo $steamSignIn->genUrl('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
?>"><img src="https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_large_noborder.png" alt="Login through Steam"></a>