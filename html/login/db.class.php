<?php

class DB
{
	var $connection;

	// Make DB Connection
	function __construct ()
	{
		$this->connection = new mysqli('localhost', 'root', 'greatunihack', 'AchievementDatabase');
		if ($this->connection->connect_errno > 0)
			die('Unable to connect to database[' . $this->connection>connect_error . ']');
	}

	// Create a new user
	public static function createUser($steamID, $email, $name)
	{
		$insert = $this->connection->prepare("INSERT INTO Users (steamID, email, name) VALUES (?, ?, ?)");
		$insert->bind_param("sss", $steamID, $email, $name);
		$insert->execute();
	}

	// Get an associative array with all the user names
	public static function getUsers()
	{
		$query = "SELECT name FROM Users";
		$result = $this->connection->query($query);
		return $result->fetch_assoc();
	}

	function getConnection()
	{
		return $connection;
	}

	function __destruct ()
	{
		$db->close();
	}
}

?>