<?php
namespace Mbacher1810\Logger;

interface ILogger {
    public function logEntry(string $line): void;
}