<?php
namespace Controllers\Admin;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Controllers\Controller;

class EventController extends Controller{
    public static function getAdd(Request $request, Response $response, array $args){
        echo "add this get";
    }

    public static function postAdd(Request $request, Response $response, array $args){
        echo "add this post";
    }

}