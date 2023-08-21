<?php
namespace Imaarov\Utils;
use Imaarov\SubService\Log\LogService;
use Imaarov\SubService\Route\RouteServiceContainer;

class Router extends RouteServiceContainer
{
    public static function get(string $controller, string $action, string $url): void
    {
        parent::add(url: $url, controller: $controller, action: $action);
    }
}