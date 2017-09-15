<?php
$access_token = 'FyE8k5WmYR/S/Sf0c2A0T3wNNoVfr4g9wI9L796VMYeKJgA2hgDk4RLGLOQpcXiQbq0rfXp1QQq7LdG5N6d2qT4ZmB5mndvlRx/MrF94fHJdzPBJyBHepf3eZoBGS/KTmKovj/tY4RYHiQQMECV8zgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
