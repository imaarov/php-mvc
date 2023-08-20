<?php

namespace Imaarov\Utils;

class UriSeparation
{
    private string $uri;
    public function __construct(
        string $uri
    )
    {
        $this->uri = $uri ?: $_REQUEST['REQUEST_URI'];
    }

    private function makeUri(): ?array
    {
        $uriArray = explode("/", $this->uri);
        array_shift($uriArray);
        return $uriArray;
    }

    public function uriToArray(): ?array
    {
        return $this->makeUri();
    }
}