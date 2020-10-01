<?php

namespace Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class Controller{

    public static $view;
    public function __construct(){
        $view=new Blade('views', 'cache');
    }


    public function __invoke() {
        $view=new Blade('views', 'cache');
    }
    public static function load($name, $type){
        $func = $type.$name;
        
        // $func();
    }
       
}