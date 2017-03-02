<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
//$app=new \Slim\App;
$app = new \Slim\App();
$app->put('/books/:id', function ($id) {
    //Update book identified by $id
//echo $id;
});
?>
<html>
<body>
<form action="http://locatlhost/Slim/put.php/books/1" method="post">
    ... other form fields here...
    <input type="hidden" name="_METHOD" value="PUT"/>
    <input type="submit" value="Update Book"/>
</form>
</body>
</html>
