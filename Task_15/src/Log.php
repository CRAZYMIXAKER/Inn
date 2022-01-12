<?php

namespace src;

use DateTime;

class Log
{
    public function file($error, $file)
    {
        $status = $error == '' ? 'Successfully' : "Not successful($error)";
        $date = new DateTime("00:00");
        $fileLog = fopen("logs/uploud_{$date->format("dmY")}.log", 'a');
        $timeToLoad = new DateTime("now");
        $content = "Date: {$timeToLoad->format('d.m.Y G:i:s')}   Name: {$file['name']}   Size: {$file['size']}   status: $status";
        fwrite($fileLog, $content . "\n");
        fclose($fileLog);
    }
}