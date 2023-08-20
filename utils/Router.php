<?php
namespace Imaarov\Utils;
use Imaarov\Service\Log\LogService;
use Imaarov\Service\Route\RouteServiceContainer;

class Router extends RouteServiceContainer
{
    public static function get(string $controller, string $action, string $url): void
    {
        parent::add(url: $url, controller: $controller, action: $action);
    }
}