<?php
namespace Imaarov\App\Controller;
use Imaarov\SubService\Log\LogService;

class HomeController
{
    public function index()
    {
        LogService::log("Test from controller");
        echo "hi from home controller";
    }
}