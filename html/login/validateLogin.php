<?php
	error_reporting(E_ALL);
	session_start();

	include_once "SteamSignIn.class.php";
	$steamSignIn = new SteamSignIn();

	echo '<pre>';
	var_dump($_SESSION);
	echo '</pre>';

	// If the account is not activated yet, ask for their email
	if (isset($_SESSION['steamID']) && $_SESSION['activated'] == false)
	{
		if (!$atNewUserPage)
		{
			// Redirect to ask for email page if we are not already there
			header('location: /newAccount.php');
		}
		elseif (isset($_POST['email']))
		{
			echo 'madeithere';
			// If we are already there and an email was provided, add 
			// account to the database with details

			// Connect to MySQL database
			$db = new mysqli('localhost', 'root', 'greatunihack', 'AchievementDatabase');
			if($db->connect_errno > 0){
			    die('Unable to connect to database [' . $db->connect_error . ']');
			}

			echo 'could connect';

			// Get more information about the player
			include_once "SteamAPI.class.php";
			$steamAPI = new SteamAPI();
			$playerSummary = $steamAPI->getPlayerInfo($_SESSION['steamID']);

			// Create new user
			$insert = $db->prepare("INSERT INTO Users (steamID, email, name) VALUES (?, ?, ?)");
			$insert->bind_param("sss", $_SESSION['steamID'], $_POST['email'], $playerSummary['personaname']);
			$insert->execute();

			$db->close();

			// Update session variables
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['activated'] = true;
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
			// Connect to MySQL database
			$db = new mysqli('localhost', 'root', 'greatunihack', 'AchievementDatabase');
			if($db->connect_errno > 0){
			    die('Unable to connect to database [' . $db->connect_error . ']');
			}

			// Check if the user exists already
			if ($result = $db->query("SELECT email FROM Users WHERE steamID=$loginAttempt")) 
			{
				if ($result->num_rows < 1)
				{
					// If account doesn't exist, we need to request their email to
					// create their account (to be implemented)
					$_SESSION['steamID'] = $loginAttempt;

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

					// Get more information about the player
					include_once "SteamAPI.class.php";
					$steamAPI = new SteamAPI();
					$playerSummary = $steamAPI->getPlayerInfo($loginAttempt);

					// Store avatar and name
					$_SESSION['name'] = $playerSummary['personaname'];
					$_SESSION['avatar'] = $playerSummary['avatarfull'];
				}
			}

			$db->close();
		}
		else
		{
			// Login wasn't attempted and page cannot be accessed without privilages
			header( 'Location: /login.php?return_url=' . urlencode($_SERVER['REQUEST_URI']) );
		}
	}
?>