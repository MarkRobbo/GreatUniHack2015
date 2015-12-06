<?php
include_once 'JustGivingAPI.class.php';

$searchString = $_GET["typed"];

$jgAPI = new JustGivingAPI();

//$charityNames = $jgAPI->searchCharities($searchString, 10);
$charityNames = $jgAPI->searchCharities('a', 10);

// var_dump($charityNames);
echo $searchString
?>
