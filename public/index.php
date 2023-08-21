<?php
require_once '../vendor/autoload.php';
require_once '../route/web.php';

$kernel = new \Imaarov\SubService\Kernel(
    new \Imaarov\SubService\Route\RouteServiceContainer(),
    \Imaarov\SubService\Log\LogService::make()
);