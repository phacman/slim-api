<?php

declare(strict_types=1);

namespace App\Application\Middleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface as Middleware;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

class JsonResponseMiddleware implements Middleware
{
    /**
     * {@inheritdoc}
     */
    public function process(Request $request, RequestHandler $handler): Response
    {
        $response = $handler->handle($request);
        $content = $response->getBody()->__toString();

        if (str_starts_with($content, '{')) {
            return $response->withHeader('Content-Type', 'application/json');
        }

        return $response;
    }
}
