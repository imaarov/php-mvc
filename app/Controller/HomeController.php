<?php
namespace Imaarov\App\Controller;
use Imaarov\subService\Log\LogService;

class HomeController
{
    public function index()
    {
        LogService::log("Test from controller");
        echo "hi from home controller";
    }
}