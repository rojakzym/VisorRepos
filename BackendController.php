<?php
class BackendController{
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
include_once "Bdcontroller.php";
$selectHost = new BdController();
$conexion = BdController::conn($selectHost->dataConnection());
include_once "ModelController.php";


    $insert =ModelController::save($_REQUEST['q'],$selectHost->dataConnection());
    header("Accept: application/vnd.github.mercy-preview+json");
    $search = new BackendController();
    if($_REQUEST["tipo"]=='repo'){
    echo  $search->httpGet('https://api.github.com/search/repositories?q='.$_REQUEST['q'].'+in:'.$_REQUEST['q'].'');
    }
    if($_REQUEST["tipo"]=='comments'){
    echo  $search->httpGet('https://api.github.com/repos/'.$_REQUEST['q'].'/pulls/comments');
}

?>