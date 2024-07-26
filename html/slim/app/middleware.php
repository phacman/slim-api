<?php

declare(strict_types=1);

use App\Application\Middleware\SessionMiddleware;
use Slim\App;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

return function (App $app) {
    $app->add(SessionMiddleware::class);
    $app->add(function (Request $request, RequestHandler $handler) {
        $response = $handler->handle($request);
        $content = $response->getBody()->__toString();
        if (str_starts_with($content, '{')) {
            return $response->withHeader('Content-Type', 'application/json');
        }
        return $response;
    });
};
