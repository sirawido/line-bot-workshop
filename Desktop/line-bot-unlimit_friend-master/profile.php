<?php


$access_token = 'TuIMvbYWRKbQX/jk+38g45kSmUTQr3cewTYgQsA4tC4hUM4QttMS+sT+1QwMv6qDTN4lAh1Ow66qicO5Q2A9om7WQtCIlhbpT8bqAVU+ayX/8fqcdEuE0Kwe7ziSlbIKiyf5oawO/VwdfiFE3/GnKgdB04t89/1O/w1cDnyilFU=';

$userId = 'Ua4b940c7aea1b2ae4a12da1e922c610a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

