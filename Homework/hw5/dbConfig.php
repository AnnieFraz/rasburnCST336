<?php
//db details
$dbHost = getenv('IP');
$dbUsername = 'anniefraz';
$dbPassword = '';
$dbName = 'final_project';
//Connect and select the database

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>




