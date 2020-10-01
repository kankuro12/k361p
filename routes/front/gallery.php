<?php
use Models\Galary;
$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('front.gallery.list',['galleries'=>Galary::all()]);
});