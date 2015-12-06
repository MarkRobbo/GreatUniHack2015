<?php
	
	// Expecting a donation ID from Just Giving to this page
	// This is a callback
	if (isset($_GET['jgDonationId']))
	{
		$donationID = $_GET['jgDonationId'];

		include_once 'justGivingAPI.class.php';
		$jg = new JustGivingAPI();

		// Get donation info with the API
		$donationInfo = $jg->getDonationInfo($donationID);
		echo '<pre>';
		print_r($donationInfo);
		echo '</pre>';
	}
	else
	{
		echo 'No Donation Provided';
	}

?>