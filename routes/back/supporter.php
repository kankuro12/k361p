<?php
use Models\Mailinglist;

$app->get('supporter/',function($request,$response,$args){
    echo $this->view->make('back.supporter',['supporters'=>Mailinglist::orderBy('id','desc')->get()]);
});
