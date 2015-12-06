<?php
include_once 'SteamAPI.class.php';

$user = $_GET["user"];

$steamAPI = new SteamAPI();

$res = $steamAPI->getGamesOwned($user);

echo json_encode($res);
?>
