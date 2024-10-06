<?php
header("Access-Control-Allow-Origin: *");  

$url = $_GET["url"];

$response = file_get_contents($url);


if ($fileContents === FALSE) {
    echo "Failed to fetch audio file.";
}
else{
    echo $response;
}
?>
