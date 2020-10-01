<?php 
$app->get('contact/',function($request,$response,$args){
    echo $this->view->make('front.contact');
});

$app->get('about/',function($request,$response,$args){
    echo $this->view->make('front.about');
});