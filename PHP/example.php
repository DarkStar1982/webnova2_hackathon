<?php
require_once 'autoload.php';

use Exodus\SDK;

$username = "testuser123";
$baseUrl = "http://45.33.41.62/";
$apiKey = "tJ9Izf58Somi3dN02cwsopRLDkf7QtSLu6Ag668kr4M";
$noradId = 1;
$lon = '-79.6';
$lat = '43.7';
$net = '2023-03-01 00:00:00';
$nlt = '2023-03-04 00:00:00';
$missionType = 'Hyperspectral';
$missionDescription = 'Test Mission';

$satAPI = new SDK($username, $apiKey, $baseUrl);

$satellites = $satAPI->getSatellites();

$instruments = $satAPI->getInstruments($noradId);

$times = $satAPI->getTimesOnTarget($noradId,1,$lat, $lon,$nlt, $net);

$mission = $satAPI->createMission($missionType, $noradId, 1, $lat, $lon, $nlt, $net, $missionDescription);

$dataKey = $mission->getDataKey();
$dateAvailable = $mission->getDateAvailable();

$dataDownload = $satAPI->getDataDownload($dataKey);
var_dump($dataDownload->getDataUrl());