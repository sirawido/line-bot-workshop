<?php



require "vendor/autoload.php";

$access_token = 'TuIMvbYWRKbQX/jk+38g45kSmUTQr3cewTYgQsA4tC4hUM4QttMS+sT+1QwMv6qDTN4lAh1Ow66qicO5Q2A9om7WQtCIlhbpT8bqAVU+ayX/8fqcdEuE0Kwe7ziSlbIKiyf5oawO/VwdfiFE3/GnKgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '68052ed67f31947e473b30bd037be5ed';
// ID ที่ต้องการส่งไปหา
$pushID = '*ReceiverID*';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







