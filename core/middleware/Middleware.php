<?php


namespace Core\Middleware;
use Exception;
class Middleware
{
    public const MAP = [
        'auth' => Authenticated::class,
        'guest' => Guest::class
    ];

    public static function resolve($key) {
        if(!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;
        if(!$middleware) {
            throw new Exception("no matching middleware found for $key");
        }

        (new $middleware())->handle();
    }

}