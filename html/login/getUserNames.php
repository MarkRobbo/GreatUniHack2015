<?php
include_once 'JustGivingAPI.class.php';
include_once 'db.class.php';

$searchString = $_GET["typed"];

$dbAPI = new DB();

$userNames = $dbAPI->getUsers($searchString);

echo json_encode($userNames);
?>
