<?php
	session_start();

	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();

	if (!isset($_SESSION['steamID']))
	{
		$loginAttempt = $steamSignIn->validate();

		// Echo steam ID if login was successful
		if ($loginAttempt != '')
		{
			// Store the steam ID in the session variable
			$_SESSION['steamID'] = $loginAttempt;

			// Get more information about the player
			include_once "SteamAPI.class.php";
			$steamAPI = new SteamAPI();
			$playerSummary = $steamAPI->getPlayerInfo($loginAttempt);

			// Store avatar and name
			$_SESSION['name'] = $playerSummary['personaname'];
			$_SESSION['avatar'] = $playerSummary['avatarfull'];
		}
		else
		{
			// Login wasn't attempted and page cannot be accessed without privilages
			header( 'Location: /login.php?return_url=' . urlencode($_SERVER['REQUEST_URI']) );
		}
	}
?>