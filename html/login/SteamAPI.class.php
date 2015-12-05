<?php

class SteamAPI
{
	const BASE_URL = "http://api.steampowered.com/";
	const API_KEY = "";

	// Get the player info of the steam ID
	public static function getPlayerInfo($steamID)
	{
		$apiResponse = file_get_contents(BASE_URL . "ISteamUser/GetPlayerSummaries/v0002/?key=XXXXXXXXXXXXXXXXXXXXXXX&steamids=" . $steamID ."&format=json");
		return json_decode($apiResponse, true);
	}
}

?>