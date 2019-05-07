<?php

function httpGet($url)
{

    $curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
    return $resp;
}

var_dump(httpGet('https://api.github.com/search/repositories?q=tetris+in:tetris'));
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/search/repositories?q=tetris+in:tetris'); // or use https://requestb.in/ for testing purposes
// curl_setopt($curl, CURLOPT_FAILONERROR, true);
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $output = curl_exec($curl);
// if ($output === FALSE) {
// 	echo 'An error has occurred: ' . curl_error($curl) . PHP_EOL;
// }
// else {
// 	echo $output;
// }
?>