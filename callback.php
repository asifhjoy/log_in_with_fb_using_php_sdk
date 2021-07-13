<?php

require_once('config.php');
$accesstoken='';
try{
    $accesstoken = $handler->getAccessToken();
}catch(\Facebook\Exception\FacebookResponseException $x){
echo "Response Exception ".$x->getMessage();
exit();
}catch(\Facebook\Exceptions\FacebookSDKException $x){
    echo "SDK Exception ".$x->getMessage();
    exit();
}

// echo $accesstoken->isLongLived();

// if($accesstoken){
//     header("Location: login.php");
//     exit();
// }

$oAuth2Client = $fb->getOAuth2Client();
if($accesstoken){
    $accesstoken = $oAuth2Client->getLongLivedAccessToken($accesstoken);
    $response = $fb->get('me?fields=id,name,email,birthday,picture.type(large)',$accesstoken);
    $userData = $response->getGraphNode()->asArray();
    $_SESSION['userData'] = $userData;
    $_SESSION['access_token'] = (string)$accesstoken;
    header('Location: details.php');
    exit();
}

?>