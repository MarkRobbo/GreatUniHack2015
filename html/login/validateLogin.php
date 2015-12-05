<?php
	session_start();

	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();

	if (!isset($_SESSION['steamID']))
	{
		$loginAttempt = $steamSignIn->validate();

		// Echo steam ID if login was successful
		if ($loginAttempt)
		{
			// Store the steam ID in the session variable
			$_SESSION['steamID'] = $loginAttempt;
		}
		else
		{
			// Login wasn't attempted and page cannot be accessed without privilages
			header( 'Location: /' ) ;
		}
	}
?>