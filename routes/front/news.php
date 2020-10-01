<?php
use Models\News;
$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('front.news.list',['news'=>News::orderBy('id','desc')->get()]);
});

$app->get('/single/{id}/',function($request,$response,$args){
    echo $this->view->make('front.news.single',['new'=>News::where('id',$args)->first(),'news'=>News::orderBy('id','desc')->take(10)->get()]);
});