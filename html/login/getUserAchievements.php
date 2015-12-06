<?php
include_once 'SteamAPI.class.php';

$user = $_GET["user"];
$game = $_GET["game"];

$steamAPI = new SteamAPI();

var_dump($steamAPI->getAchievementDetails($user, $game));
?>
