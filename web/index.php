<?php

use Jobleads\Action\IndexAction;
use Jobleads\Model\User;
use Symfony\Component\HttpFoundation\JsonResponse;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// factory
$app[User::class] = function () {
    return new User('Luke', 'Adamczewski');
};

$app->get('/', new IndexAction($app[User::class]));
$app->view(function (string $value) {
    return new JsonResponse([
        'response' => $value
    ]);
});
$app->run();
