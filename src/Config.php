<?php

namespace src;

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

//se for ambiente localhost
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {

    $BASE_URL = 'http://' . $_SERVER['HTTP_HOST'] . '/premium2024/';

    define('BASE_DIR', '/premium/public/');

    $capsule->addConnection([
        "driver" => "mysql",
        "host" => "127.0.0.1",
        "database" => "premium2024",
        "username" => "root",
        "password" => ""
    ]);
}

//se for producao
else {

    $BASE_URL = 'https://premium.portalunsoft.com.br/';

    define('BASE_DIR', '/premium/public/');

    $capsule->addConnection([
        "driver" => "mysql",
        "host" => "127.0.0.1",
        "database" => "premium2024",
        "username" => "root",
        "password" => ""
    ]);
}


define('BASE_URL', $BASE_URL);

class Config
{
    const BASE_DIR = BASE_DIR;
    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
    const URL_API = 'https://api.imoview.com.br/';
}


//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();
$capsule->bootEloquent();
