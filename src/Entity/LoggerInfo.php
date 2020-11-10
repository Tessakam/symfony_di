<?php


namespace App\Entity;


class LoggerInfo
{
    public function logInfo (string $string): string
    {
        file_put_contents('info.log', $string, FILE_APPEND );
        return $string;
    }
}