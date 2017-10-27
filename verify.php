<?php
$access_token = '8ba20e5d48c1fa5c4bd6d316ea50244a';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . 8ba20e5d48c1fa5c4bd6d316ea50244a);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

