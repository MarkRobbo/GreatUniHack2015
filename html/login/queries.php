<?php
var QUERYSTRING = $_GET["query"];

switch($QUERYSTRING) {
case "Names":
    // Return a JSON with all usernames in the DB
    break;
case "Achievements":
    // Return a JSON with all achievements associated to a user in the DB
    break;
case "Pledges":
    // Return a JSON wiht all achievements associated to a user in the DB
    break;
default:
    // Return something signifying an error
}
?>