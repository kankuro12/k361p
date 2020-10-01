<?php 
use Models\Event;
$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('front.event.list',['events'=>Event::orderBy('id','desc')->get()]);
});

$app->get('/single/{id}/',function($request,$response,$args){
    echo $this->view->make('front.event.single',['event'=>Event::where('id',$args)->first()]);
});