<?php
$access_token = '0i2v/wM+ufakKsO4rEPGJlBaRvRoQODlNlfrTyYbhx7dVdr9umhk8d4Ou0y/fQ6NlMEzKG2y98FkIgPOmWzQxXKTxmbdpwJQ786nmaTtMsK0PzEwR/+zmd/ipByxbxH2WOQDmACqgmyfeCwF1M4BFwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
