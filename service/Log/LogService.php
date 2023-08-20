<?php

namespace Imaarov\Service\Log;

class LogService
{
    public static function log(mixed $log): void
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR. ".." . DIRECTORY_SEPARATOR . "storage" . DIRECTORY_SEPARATOR . "logs". DIRECTORY_SEPARATOR . "some.log";
        file_put_contents($path, print_r($log, true) . PHP_EOL , FILE_APPEND);
    }
}