<?php
require 'vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/fibonacci/{n}', function ($request, $response, $args) {
    $n = $args['n'];

    $fibonacciValue = fibonacci($n);

    $result = ['fibonacci' => $fibonacciValue];
    $response->getBody()->write(json_encode($result));
    return $response->withStatus(200)->withHeader('Content-Type', 'application/json');
});

function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$app->run();
