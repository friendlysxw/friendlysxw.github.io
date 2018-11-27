<?php
$urls = array(
    'https://it.tingquke.com/2018/11/24/e9bc0c14.html'
);
$api = 'http://data.zz.baidu.com/urls?site=it.tingquke.com&token=17BuLsMrojCVyQo0';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;