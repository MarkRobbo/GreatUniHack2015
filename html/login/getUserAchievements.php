<?php
include_once 'SteamAPI.class.php';

$user = $_GET["user"];
$game = $_GET["game"];

$steamAPI = new SteamAPI();

$res = $steamAPI->getAchievementDetails($user, $game);

json_encode($res);
?>
