<a href="<?php
	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();
	if (isset($_GET['return_url']))
		echo $steamSignIn->genUrl('http://' . $_SERVER['HTTP_HOST'] . $_GET['return_url']);
	else
		echo $steamSignIn->genUrl('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
?>"><img src="https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_large_noborder.png" alt="Login through Steam"></a>