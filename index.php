<?php

require_once("vendor/autoload.php");
$app = new \Slim\Slim();

//Este ponto vai permitir mostrar os erros. Ele vai mostrar no console.
$app->config('debug', true);

$app->get('/', function(){
    $sql = new Juliao\DB\Sql();
    $results = $sql->select("SELECT * FROM tb_users");
    echo json_encode($results);
});

$app->run();

