<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim();

$app->config(array(
    'templates.path' => '../templates',
    'debug' => false,
));

$app->get('/', function() {
	echo 'hellow, world!';
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->notFound(function () use ($app) {
    $app->render('404.html');
});

$app->run();
