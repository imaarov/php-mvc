<?php

namespace Imaarov\SubService;

use Imaarov\SubService\Interface\SubServiceInterface;
use Imaarov\SubService\Route\RouteServiceContainer;

class Kernel
{
    private SubServiceInterface $subService;
    public function __construct(
        SubServiceInterface ...$subServices
    )
    {
        foreach ($subServices as $subService){
            $subService->dispatch();
        }
    }
}