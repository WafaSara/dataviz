<?php
require_once(dirname(__FILE__).'/Velib.php');
// Set the JSON header
header("Content-type: text/json");
// Get parameters
$contract = isset($_GET['contract']) ? $_GET['contract'] : 'paris';
$station = isset($_GET['station']) ? $_GET['station'] : '7007';
// Get the Availabilities
$velib = new Velib();
$availableBikes = $velib->getAvailableBikes($contract, $station);
// Echo the json response
$response = [$availableBikes->last_update, $availableBikes->available_bikes]; //js time
echo json_encode($response);
