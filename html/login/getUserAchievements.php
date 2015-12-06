<?php
include_once 'SteamAPI.class.php';

$user = $_GET["user"];
$game = $_GET["game"];

$steamAPI = new SteamAPI();

json_encode($steamAPI->getAchievementDetails($user, $game));
?>
