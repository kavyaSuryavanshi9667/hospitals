<?php
$authKey = "64edc92fd6fc051ef52a6ff2";
$senderId = "123456";

if($_POST['Sending']){
    $mobileNumber = $_POST['phoneno'];
    $msg = $_POST['massage'];
    $message = urlencode( $msg);
    // $route = "default";
    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderId,
        // 'route' => $route
    );
    $url="http://api.msg91.com/api/sendhttp.php";
    $ch = curl_init( $url);
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $response;

}
?>