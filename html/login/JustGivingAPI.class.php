<?php

	class JustGivingAPI
	{
		const APP_ID = "8d7cbec9";

		// Search charities by name
		public static function searchCharities($string, $pageSize)
		{
			$context = stream_context_create(array(
			    'http' => array(
			        'method' => 'GET',
			        'header' => "Accept: application/json\r\nContent-type: application/json")
			));
			$apiResponse = file_get_contents("https://api.justgiving.com/" . self::APP_ID . "/v1/charity/search?q=" . urlencode($string) . "&page=1&pagesize=" . urlencode($pagesize), false, $context);
			return json_decode($apiResponse, true);
		}

		// Get charity details by ID
		public static function getCharityByID($charityID)
		{
			$context = stream_context_create(array(
			    'http' => array(
			        'method' => 'GET',
			        'header' => "Accept: application/json\r\nContent-type: application/json")
			));
			$apiResponse = file_get_contents("https://api.justgiving.com/" . self::APP_ID . "/v1/charity/" . urlencode($charityID);
			return json_decode($apiResponse, true);
		}

		// Get donation link for a charity, choosing a unique reference (should be an ID of the pledge to link them)
		public static function getDonationLink($charityID, $amount, $reference)
		{
			return "http://v3sandbox.justgiving.com/4w350m3/donation/direct/charity/" . urlencode($charityID) ."/?amount=" . urlencode($amount) ."&exitUrl=http%3A%2F%2F46.101.29.75%3FjgDonationId%3DJUSTGIVING-DONATION-ID&currency=GBP&reference=" . urlencode($reference) . "&defaultMessage=AchieveForGood&utm_source=sdidirect&utm_medium=buttons&utm_campaign=buttontype";
		}

	}

?>