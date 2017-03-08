<?php

file_put_contents("fb.txt",file_get_contents("php://input"));

$fb = file_get_contents("fb.txt");

$fb = json_decode($fb);

$rid = $fb->entry[0]->messaging[0]->sender->id;

$token = "EAAU7xvq2auMBAOl8jo3b4SoNYmlFB7aaXngktoiCvRQs6Tw3bp8an0V03TKfPQjbWJINeiyULavylzi7yZAzQXQW3v9b6CqHuSMY3YurBuZBhWLNJ7dMLZAdSWCblhkPMrtVS7O5nrVZB6FloOR16xiRMwEOdCFI5R5xVg1x4wZDZD"

$data = array(
	'recipient => array('id'=> "$rid"),
	'message' => array('text' => "Hello w ra7mato allah!.. fadaaal")
);

$options = array(
	'http' => array(
		'method' => 'POST',
		'content' => json_encode($data),
		'header' => "Content-Type: application/json\n"
	)
);

$context = stream_context_create($options);

file_get_contents("https://graph.facebook.com/v2.6/me/messages?access_token=$token",fales,$context);

?>
