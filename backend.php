<?php

function httpGet($url)
{

    $curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
$resp = curl_exec($curl);
curl_close($curl);
    return $resp;
}
var_dump(httpGet('https://api.github.com/search/repositories?q=tetris+in:tetris'));
?>