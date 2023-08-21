<?php

namespace Imaarov\subService\Route;
use Imaarov\SubService\Interface\SubServiceInterface;
use Imaarov\SubService\Log\LogService;

class RouteServiceContainer implements SubServiceInterface
{
    private static array $routes;

    public static function add(string $url, string $controller, string $action): void
    {
        self::$routes[$url] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function dispatch(?string $requestUri = null): bool
    {
        if (! $requestUri)
            $requestUri = $_SERVER['REQUEST_URI'];
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