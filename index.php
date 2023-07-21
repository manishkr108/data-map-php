<?php
// Read the JSON data from "json/data.json"
$jsonData = file_get_contents('data.json');

// Serve the JSON data as response
header('Content-Type: application/json');
echo $jsonData;
?>
