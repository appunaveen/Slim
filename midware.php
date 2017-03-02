<?php
/**
 * Example middleware closure
 *
 * @param  \Psr\Http\Message\ServerRequestInterface $request  PSR7 request
 * @param  \Psr\Http\Message\ResponseInterface      $response PSR7 response
 * @param  callable                                 $next     Next middleware
 *
 * @return \Psr\Http\Message\ResponseInterface
 */
 require 'vendor/autoload.php';
 $app = new \Slim\App();

 $app->add(function ($request, $response, $next) {
 	$response->getBody()->write('BEFORE');
 	$response = $next($request, $response);
 	$response->getBody()->write('AFTER');

 	return $response;
 });

 $app->get('/', function ($request, $response, $args) {
 	$response->getBody()->write(' Hello ');

 	return $response;
 });
 $app->get('/date/{naveen}', function ($request, $response) {
        return $response->getBody()->write(date('Y-m-d H:i:s'));
        $name=$request->getAttribute('naveen');
        $request = $request->withAttribute($name);
    });
    $app->get('/time', function ($request, $response) {
        return $response->getBody()->write(time());
      });
 $app->run();
