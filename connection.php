<?php

// This is the name of the service in OpenShift that connects to our API endpoint
// Any dashes (-) should be converted to underscores (_)
// We pull this in from an environment varaible if set, otherwise using the default
if ($_ENV['DB2_API_SERVICE_NAME']) {
    $apiName = strtoupper($_ENV['DB2_API_SERVICE_NAME']);
    $apiInstanceName = str_replace("-", "_", $apiName);
} else {
    $apiInstanceName = 'DB2_READER_API';
}

// Create the relevant environment variables from the Instance Name
$hostenv = $apiInstanceName . '_SERVICE_HOST';
$portenv = $apiInstanceName . '_SERVICE_PORT';

// Get details from the environment variables
$host = getenv($hostenv);
$port = getenv($portenv);

// Here we set the endpoint of our API instance
$apiBaseUri = 'http://' . $host . ':' . $port;

// This varaiable $apiBaseUri can then be used in all the pages

?>
