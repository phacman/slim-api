<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');

        return $response;
    });

    $app->post('/post', function (Request $request, Response $response) {
        $raw = [
            'request' => $request->getParsedBody(),
            'hello' => 'world',
            'привет' => 'мир',
        ];
        $payload = json_encode($raw, 128|256);
        $response->getBody()->write($payload);

        return $response;
    });

    $app->get('/get', function (Request $request, Response $response) {
        $body = [
            'hello' => 'world',
            'привет' => 'мир',
        ];
        $response->getBody()->write(json_encode($body, 128|256));

        return $response;
    });

//    $app->group('/users', function (Group $group) {
//        $group->get('', ListUsersAction::class);
//        $group->get('/{id}', ViewUserAction::class);
//    });
};
