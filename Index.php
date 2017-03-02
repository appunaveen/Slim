<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//require 'vendor/autoload.php';
require '../../vendor/autoload.php';
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;
$app=new \Slim\App;

$pdo=
$app->add(new \Slim\Middleware\HttpBasicAuthentication([
    "users" => [
        "root" => "navin"///username=>password
        //"naveen" => "naveen"
    ],
    #when login will successed it show the callback details
    "callback" => function ( Request $request,$response,$arguments  ) {
        echo "Authuntication successed";
        print_r($arguments);

},
  #When login is fails its show the error message
   "error" => function ( $request,$response, $arguments) {
        $data = [];
        $data["status"] = "error";
        $data["message"] = $arguments["message"];
        return $response->write(json_encode($data, JSON_UNESCAPED_SLASHES));
    },
    "environment" => "REDIRECT_HTTP_AUTHORIZATION"
]));
/*$app->get('/foo', function ($req, $res, $args) {
    return $res->withHeader(
        'Content-Type',
        'application/json'
    );
});*/

$app->run();



?>
