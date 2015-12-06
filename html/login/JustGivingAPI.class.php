<?php

	class JustGivingAPI
	{
		const APP_ID = "8d7cbec9";

		// Search charities
		public static function searchCharities($string, $pageSize)
		{
			$apiResponse = file_get_contents("https://api.justgiving.com/" . self::APP_ID . "/v1/charity/search?q=" . urlencode($string) . "&page=1&pagesize=" . urlencode($pagesize));
			return json_decode($apiResponse, true);
		}
	}

?>