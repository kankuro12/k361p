<?php
use Models\Message;
$app->post('messages/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $sms = Message::create($parsed);
    return $response->withRedirect('/');
});