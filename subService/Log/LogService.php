<?php

namespace Imaarov\SubService\Log;

use Imaarov\SubService\Interface\SubServiceInterface;

class LogService implements SubServiceInterface
{
    private static ?string $logPath = null;
    private static ?LogService $logServiceInstance = null;

    private function __construct(){}
    public static function log(mixed $log): void
    {
        if (! self::$logPath) return;
        file_put_contents(self::$logPath, print_r($log, true) . PHP_EOL , FILE_APPEND);
    }

    public function dispatch(?string $fileName = null): void
    {
        self::$logPath =
            __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR. ".." . DIRECTORY_SEPARATOR . "storage" . DIRECTORY_SEPARATOR . "logs". DIRECTORY_SEPARATOR . $fileName ?: "some.log";
    }

    public static function make()
    {
        if (! self::$logServiceInstance)
            self::$logServiceInstance = new LogService();
        return self::$logServiceInstance;
    }
}