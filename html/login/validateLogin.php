<?php
	session_start();

	error_reporting(E_ERROR); // reports all errors
	ini_set("display_errors", "1"); // shows all errors

	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();

	// Option to logout
	if (isset($_GET['logout']))
	{
		$_SESSION = array();
		session_destroy();
	}
	else
	{
		// If the account is not activated yet, ask for their email
		if (isset($_SESSION['steamID']) && $_SESSION['activated'] == false)
		{
			if ($atNewUserPage == true && isset($_POST['email']) && isset($_POST['charity_ID']))
			{
				// If we are already there and an email was provided, add 
				// account to the database with details

				// Get more information about the player
				include_once "SteamAPI.class.php";
				$steamAPI = new SteamAPI();
				$playerSummary = $steamAPI->getPlayerInfo($_SESSION['steamID']);
				
				// Create new user
				include_once 'db.class.php';
				$db = new DB();
				$db->createUser($_SESSION['steamID'], $_POST['email'], $playerSummary['personaname'], $_POST['charity_ID']);

				// Update session variables
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['activated'] = true;
			}
			if (!$atNewUserPage && basename($_SERVER['PHP_SELF']) != 'index.php')
			{
				// Redirect to ask for email page if we are not already there
				header('location: /newAccount.php');
			}
		}

		// If the user is not logged in at all
		if (!isset($_SESSION['steamID']))
		{
			// Validate the login with class
			$loginAttempt = $steamSignIn->validate();

			// Echo steam ID if login was successful
			if ($loginAttempt != '')
			{
				include_once 'db.class.php';
				$dbclass = new DB();
				$db = $dbclass->getConnection();

				// Check if the user exists already
				if ($result = $db->query("SELECT email FROM Users WHERE steamID=$loginAttempt")) 
				{
					// Store steam ID
					$_SESSION['steamID'] = $loginAttempt;

					// Get more information about the player
					include_once "SteamAPI.class.php";
					$steamAPI = new SteamAPI();
					$playerSummary = $steamAPI->getPlayerInfo($loginAttempt);

					// Store avatar and name
					print_r($playerSummary);
					$_SESSION['name'] = $playerSummary['personaname'];
					$_SESSION['avatar'] = $playerSummary['avatarfull'];

					if ($result->num_rows < 1)
					{
						// If account doesn't exist, we need to request their email to
						// create their account (to be implemented)

						// This email isn't activated yet, we don't have the user in the database
						$_SESSION['activated'] = false;

						// Redirect to where they can activate their account
						header('location: /newAccount.php');
					}
					else
					{
						// This account is activated
						$_SESSION['activated'] = true;

						// Their account already exists so we can get the email from the query
						$_SESSION['email'] = $result->fetch_object()->email;

						// Store the steam ID in the session variable
						$_SESSION['steamID'] = $loginAttempt;

						// Now we need to redirect back
						header('location: /');
					}
				}
				$db->close();
			}
			else
			{
				// Login wasn't attempted and page cannot be accessed without privilages
				if (basename($_SERVER['PHP_SELF']) != 'login.php' && basename($_SERVER['PHP_SELF']) != 'index.php')
					header( 'Location: /login.php?return_url=' . urlencode($_SERVER['REQUEST_URI']) );
			}
		}
	}

?>