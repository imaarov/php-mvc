<?php

namespace Imaarov\Service\Route;
use Imaarov\Service\Log\LogService;

class RouteServiceContainer
{
    private static array $routes;

    public static function add(string $url, string $controller, string $action): void
    {
        self::$routes[$url] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public static function dispatch(string $requestUri): bool
    {
        foreach (self::$routes as $url => $route) {
            if (preg_match($url . '/', $requestUri, $matches)) {
                $controller = new $route['controller'];
                $action = $route['action'];
                $controller->$action($matches);
                return true;
            }
        }
        return false;
    }
}