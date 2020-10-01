<?php
use Models\Notice;
$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('front.notice.list',['notices'=>Notice::orderBy('id','desc')->get()]);
});

$app->get('/single/{id}/',function($request,$response,$args){
    echo $this->view->make('front.notice.single',['notice'=>Notice::where('id',$args)->first()]);
});
