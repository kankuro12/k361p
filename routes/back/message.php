<?php 
use Models\Message;
$app->get('messages/',function($request,$response,$args){
    echo $this->view->make('back.message',['messages'=>Message::orderBy('id','desc')->get()]);
});


