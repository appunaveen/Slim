<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
$app=new \Slim\App();
$app->get('/put/:id',function($id){
echo $id->isGet()."and";
});
/*$app->put('/put/{id}',function($id){
echo $id->isPut();
});*/


$app->run()
?>
