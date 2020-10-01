<?php 
use Models\Mailinglist;
use Models\Callback;

$app->post('supporter/',function($request,$response,$args){
     $parsed = $request->getParsedBody();
     $mail = Mailinglist::create($parsed);
     return $response->withJson(new Callback(['mailing'=>$mail]));
});