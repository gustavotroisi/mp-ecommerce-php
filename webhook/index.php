<?php
header('Content-Type: application/json');

$id = $_GET["id"];
$token = 'APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398';

$cURLConnection = curl_init('https://api.mercadopago.com/v1/payments/'.$id.'?access_token='.$token);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);

echo $apiResponse;

?>