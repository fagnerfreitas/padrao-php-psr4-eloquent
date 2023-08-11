<?php
session_start();

$timeout = 3600 * 24 * 30; //setar 30 dias de sessao
// $timeout = 120;


// Defina o nome da sessão padrão
$s_name = 'nome_campanha';
$midia_origem = 'midia_origem';


// Verifique se a sessão existe ou não
if (!isset($_COOKIE[$s_name]) && isset($_GET['nome_campanha'])) {
    setcookie($s_name, $_GET['nome_campanha'], time() + $timeout, '/');
    //  echo "Session foi criada para $s_name.<br/>";
}


if (!isset($_COOKIE[$midia_origem]) && isset($_GET['midia_origem'])) {
    setcookie($midia_origem, $_GET['midia_origem'], time() + $timeout, '/');
    //echo "Session foi criada para $s_name.<br/>";
}


require '../vendor/autoload.php';
require '../src/routes.php';

$router->run( $router->routes );


//?midia_origem=Google%20Ads%20(Site)&nome_campanha=8745