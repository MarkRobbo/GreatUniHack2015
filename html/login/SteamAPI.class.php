<?php

	class SteamAPI
	{
		const BASE_URL = "http://api.steampowered.com/";
		const API_KEY = "EC8C180193E2429F3107446BEFB941DF";

		// Get the player info of the steam ID
		public static function getPlayerInfo($steamID)
		{
			$apiResponse = file_get_contents(self::BASE_URL . "ISteamUser/GetPlayerSummaries/v0002/?key=" . self::API_KEY . "&steamids=" . urlencode($steamID) ."&format=json");
			$responseArray = json_decode($apiResponse, true);
			return $responseArray['response']['players'][0];
		}

		// Get the games and details of them owned by a steam ID
		public static function getGamesOwned($steamID)
		{
			$apiResponse = file_get_contents(self::BASE_URL . 'IPlayerService/GetOwnedGames/v0001/?key=' . self::API_KEY . "&steamids=" . urlencode($steamID) ."&include_appinfo=1&format=json");
			return json_decode($apiResponse, true);
		}

		// Get the achievements for a particular user and game
		public static function getAchievementDetails($steamID, $appID)
		{
			$apiResponse = file_get_contents(self::BASE_URL . "ISteamUserStats/GetPlayerAchievements/v0001/?appid=" . urlencode($appID) ."&key=" . self::API_KEY . "&steamid=" . urlencode($steamID) ."&format=json&l=english");
			return json_decode($apiResponse, true);
		}

		// Get the game name from an app ID
		public static function getGameName($appID)
		{
			$apiResponse = file_get_contents(self::BASE_URL . "ISteamUserStats/GetSchemaForGame/v2/?appid=" . urlencode($appID) ."&key=" . self::API_KEY . "&format=json");
			$apiResponse = json_decode($apiResponse, true);
			return $apiResponse['game']['gameName'];
		}
	}

?>