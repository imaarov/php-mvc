<?php
require_once 'vendor/autoload.php';
require_once 'route/web.php';

\Imaarov\Utils\Router::dispatch($_SERVER['REQUEST_URI']);