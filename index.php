<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Juliao\Page;
use \Juliao\PageAdmin;

$app = new Slim();

//Este ponto vai permitir mostrar os erros. Ele vai mostrar no console.
$app->config('debug', true);

$app->get('/', function(){ 

    $page = new Page();

    $page->setTpl("index");
});

$app->get('/admin', function(){

    $page = new PageAdmin();
    
    $page->setTpl("index");
});

$app->run();