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
	public function createUser($steamID, $email, $name)
	{
		$insert = $this->connection->prepare("INSERT INTO Users (steamID, email, name) VALUES (?, ?, ?)");
		$insert->bind_param("sss", $steamID, $email, $name);
		$insert->execute();
	}

	// Get an associative array with all the user names
	public function getUsers()
	{
		$query = "SELECT name FROM Users";
		$result = $this->connection->query($query);
		return $result->fetch_assoc();
	}

	// Get the database connection for use outside of the class
	public function getConnection()
	{
		return $this->connection;
	}

	// Close the database connection when finished
	function __destruct ()
	{
		$this->connection->close();
	}
}

?>