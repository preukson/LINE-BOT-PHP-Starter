<?php
/**
 * Created by PhpStorm.
 * User: PVitid01
 * Date: 12/22/2016
 * Time: 9:40 AM
 */

$access_token = 'qFl/h3J0kkeSpTd/L9ls6GfEmUv5cZKBv2NEhHfrJx/pYaVb/3Ami0NUuHDRCDBpz4g4UfmZS6RPlXXF2JTlueC3RTnbN/IpujBmmUmt9O33Xv/HUJC7O0C9LMRNsrhUNuEXZG+yU+9hSwYgcjvyTQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;