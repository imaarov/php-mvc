<?php

namespace Imaarov\subService;

use Imaarov\subService\Interface\SubServiceInterface;
use Imaarov\subService\Route\RouteServiceContainer;

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