<?php
class Backend{
    public function httpGet($url){
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
}
header("Accept: application/vnd.github.mercy-preview+json");
$search = new Backend();
if(isset($_REQUEST["q"])){
echo  $search->httpGet('https://api.github.com/search/repositories?q='.$_REQUEST['q'].'+in:'.$_REQUEST['q'].'');
}
if(isset($_REQUEST["owner"]) && isset($_REQUEST["repoNombre"])){
echo  $search->httpGet('https://api.github.com/repos/'.$_REQUEST['owner'].'/'.$_REQUEST['repoNombre'].'/pulls/comments');
}
?>