<?php
require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as DB;

$DB = new DB;
$modeldir = "model\\";
$setting = [
    "driver" => "mysql",
    "host" => "127.0.0.1",
    "database" => "newsfilm_propeace",
    "username" => "newsfilm_mcci",
    "password" => "Mechi123!@#"
];
$DB->addConnection($setting);
// print_r($Views);
$DB->setAsGlobal();
$DB->bootEloquent();
