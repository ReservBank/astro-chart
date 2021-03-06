<?php
/**
 * A PHP File to test Numerology APIs from Vedic Rishi Astro
 * User: chandan
 * Date: 14/05/15
 * Time: 5:38 PM
 */


require_once 'src/VedicRishiClient.php';


$userId = "<YourUserIdhere>";
$apiKey = "<YourApiKeyHere>";

//TODO:  Make numerology request data. This needs to come from form in production
$dateOfBirth = 25;
$monthOfBirth = 12;
$yearOfBirth = 1988;
$name = 'Chandan';

// Numerology APIs which needs to be called
$numeroResourceName = 'numero_table';

// instantiate VedicRishiClient class
$vedicRishi = new VedicRishiClient($userId, $apiKey);

// call numerology method of the VedicRishiClient call .. provides JSON response
$numeroJSONData = $vedicRishi->numeroCall($numeroResourceName, $dateOfBirth, $monthOfBirth, $yearOfBirth, $name);

// printing the JSON data on the screen/browser
echo $numeroJSONData;