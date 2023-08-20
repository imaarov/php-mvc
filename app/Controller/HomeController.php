<?php
namespace Imaarov\App\Controller;
use Imaarov\Service\Log\LogService;

class HomeController
{
    public function index()
    {
        LogService::log("YOU ARE IN CONTROLLER");
        echo "hi from home controller";
    }
}