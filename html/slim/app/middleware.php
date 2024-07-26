<?php

declare(strict_types=1);

use App\Application\Middleware\JsonResponseMiddleware;
use App\Application\Middleware\SessionMiddleware;
use Slim\App;

return function (App $app) {
    $app->add(SessionMiddleware::class);
    $app->add(JsonResponseMiddleware::class);
};
