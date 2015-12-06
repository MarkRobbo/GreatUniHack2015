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
	public function createUser($steamID, $email, $name, $charityID)
	{
		$insert = $this->connection->prepare("INSERT INTO Users (steamID, email, name, charity_ID) VALUES (?, ?, ?, ?)");
		$insert->bind_param("ssss", $steamID, $email, $name, $charityID);
		$insert->execute();
	}

	// Get an associative array with all the user names, steam ID and charity ID that match
	public function getUsers($like)
	{
		$this->connection->real_escape_string($like);
		$query = "SELECT name, steamID, charity_ID FROM Users WHERE name LIKE '%" . $like . "%' LIMIT 10";
		$result = $this->connection->query($query);
		$JGAPI = new JustGivingAPI();
		$results_array = array();
		while ($row = $result->fetch_assoc()) {
			$charityInfo = $JGAPI->getCharityByID($row['charity_ID']);
			$row['charity_name'] = $charityInfo['name'];
		  	$results_array[] = $row;
		}
		return $results_array;
	}

	// Updates the charity for a user
	public function updateUserCharity($steamID, $charityID)
	{
		$update = $this->connection->prepare("UPDATE Users SET charity_ID = ? WHERE steamID = ?");
		$update->bind_param("ss", $charityID, $steamID);
		$update->execute();
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