<?php
require_once 'vendor/autoload.php';
require_once 'route/web.php';

$uri = new \Imaarov\Utils\UriSeparation($_SERVER['REQUEST_URI']);
\Imaarov\Utils\Router::dispatch($_SERVER['REQUEST_URI']);