<?php

namespace Imaarov\route;

use Imaarov\App\Controller\HomeController;
use Imaarov\Utils\Router;

Router::get(HomeController::class, 'index', '/home');
