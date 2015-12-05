<?php		include_once "SteamAPI.class.php";
			$steamAPI = new SteamAPI();
			$playerSummary = $steamAPI->getPlayerInfo('76561198014236288');
			print_r($playerSummary);
?>