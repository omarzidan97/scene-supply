<?php

file_put_contents("fb.txt",file_get_contents("php://input"));

$input = json_decode(file_get_contents("fb.txt"), true);

$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = $input['entry'][0]['messaging'][0]['message']['text'];


//API Url

$token = "EAAU7xvq2auMBAOl8jo3b4SoNYmlFB7aaXngktoiCvRQs6Tw3bp8an0V03TKfPQjbWJINeiyULavylzi7yZAzQXQW3v9b6CqHuSMY3YurBuZBhWLNJ7dMLZAdSWCblhkPMrtVS7O5nrVZB6FloOR16xiRMwEOdCFI5R5xVg1x4wZDZD"

$url = 'https://graph.facebook.com/v2.6/me/messages?access_token=$token';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = '{
    "recipient":{
        "id":"'.$sender.'"
    }, 
    "message":{
        "text":"Hello w ra7mato allah!... fadaaal"
    }
}';

//Encode the array into JSON.
$jsonDataEncoded = $jsonData;

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
if(!empty($input['entry'][0]['messaging'][0]['message'])){
$result = curl_exec($ch);
}
?>
