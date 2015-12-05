<?php
	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();
	$loginAttempt = $steamSignIn->validate();

	// Echo steam ID if login was successful
	if ($loginAttempt)
		echo $loginAttempt;
	else
	{
		// This should never be the case
		echo 'Login Failed! Try again:<br>';
		include_once "signInButton.include.php";
	}

?>