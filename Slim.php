<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

#This is code for the slim get method example
/*
$app = new \Slim\App;
$app->get('/Navi/{name}/{age}/{course}', function (Request $request, Response $response) {

  	$name = $request->getAttribute('name');
	$age=$request->getAttribute('age');
	$course=$request->getAttribute('course');
    $response->getBody()->write("Hello, $name,$age,$course");
    return $response;
});
*/
#this is code example for post method
	$app = new \Slim\App;

			$app->post('/hello', function (Request $request,Response $response){
				$data=$request->getParsedBody();
				$response->getBody()->write("Jst speed up");
				echo $data['name']." and ".$data['age'];
			//	$name_data['name'] = filter_var($data['name'], FILTER_SANITIZE_STRING);
    //$age_data['age'] = filter_var($data['age'], FILTER_SANITIZE_STRING);

			//echo "<br>".$name_data['name'];
			//echo $age_data['age'];

				#connecting mongo;
			/*	$con=new MongoClient();
					if(!$con)
								echo "not connected";
				$db=$con->Test;
				$collection=$db->New;
					$name=$data['name'];
				$age=$data['age'];
				$query=array(Name=>$name,Age=>$age);
				$collection->insert($data);*/

    	});

$app->run();
?>

<html>
	<body>
		<form action="http://localhost/Slim/Slim.php/hello" method="post">
			<p>Slim work</p>
		Name  		<input type="text" name="name"><br>
		Age       <input type="text" name="age"><br>
		       		<input type="submit" name="submit">
</boyd>
</html>
