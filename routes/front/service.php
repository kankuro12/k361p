<?php
use Models\Area;
$app->get('service/list/',function($request,$response,$args){
    echo $this->view->make('front.service.list');
});

$app->get('area/list/',function($request,$response,$args){
    echo $this->view->make('front.service.area',['areas'=>Area::orderBy('id','desc')->get()]);
});