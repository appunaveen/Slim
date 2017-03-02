<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
$app=new \Slim\App;
$app->put('/put',function(Request $request,Response $response){
echo "checking is put request".$request->isPut()."<br/>";
$data=$request->getParsedBody();
	 echo $data['name'];
});
$app->post('/put',function(Request $request,Response $response){ $data=$request->getParsedBody();
				//$response->getBody()->write("Jst speed up");
				echo $data['name']."<br/>";
				#slim methods
			echo "checking what methodsis:".$request->getmethod()."<br/>";
			echo "checking is method is Post: ".$request->isPost()."<br/>";
			echo "checking is method is get: ".$request->isGet()."<br/>";
			echo "checking is put request".$request->isPut()."<br/>";
			echo "checking is Delete request".$request->isDelete()."<br/>";
			echo "checking is Head request".$request->isHead()."<br/>";
			echo "checking is isOptions request".$request->isOptions()."<br/>";
			echo "checking is isPatch request".$request->isPatch()."<br/>";
			//echo "checking is isPatch request".$request->headers->get('ACCEPT_CHARSET')."<br/>";			
			//echo "checking is isAjax request".$request->isAjax()."<br/>";

});
$app->run();

?>
<html>
	<body>
		<form action="http://localhost/Slim/putmetho.php/put" method="post">

			<p align="center">Working SLim put method</p>
			<div align="center">
			<input type="text" name="name">
			<input type="submit" name="sumit">
			</div>
		</form>
	</body>

</html>
