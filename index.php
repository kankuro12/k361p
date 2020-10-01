<?php
session_start();
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Jenssegers\Blade\Blade;
use Models\News;
use Models\Event;
use Models\Notice;

require 'bootstrap.php';

$config = [
      'settings' => [
          'displayErrorDetails' => true,
      ],
];
  
$app = new \Slim\App($config);

$container=$app->getContainer();
$container['view']=function($container){
      return new Blade('views', 'cache');
};

$container['auth']=function($container){
      return new Controllers\AuthManager();
};


// client side
$app->get('/', function (Request $request, Response $response)  {
      echo $this->view->make('front.index',['news'=>News::orderBy('id','desc')->take(5)->get(),'event'=>Event::orderBy('id','desc')->first(),'notices'=>Notice::orderBy('id','desc')->take(3)->get()]);
});


// backend routes
require('routes/back/admin.php');

// frontend routes
require('routes/front/front.php');

// api
require('routes/api.php');



$app->run();
