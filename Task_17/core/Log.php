<?php

namespace core;

use DateTime;

class Log
{
    public function file($error, $file, $folderName, $folderSize)
    {
        $status = $error == '' ? 'Successfully' : "Not successful($error)";
        $fileName = $status == 'Successfully' ? 'uploud' : 'notLoaded';
        $timeToLoad = new DateTime("now");
        $content = "{$timeToLoad->format('d.m.Y G:i:s')}: {$file['name']} - {$file['size']} - {$folderName} - {$folderSize}";
        $this->templateLog($fileName, $content);
    }

    public function badAuthorization($ip, $email)
    {
        $fileName = 'badAuthorization';
        $time = new DateTime("now");
        $content = "Ip: {$ip}   E-mail: {$email}   Time: {$time->format('G:i:s')} - {$time->modify('15 minute')->format('G:i:s')}";
        $this->templateLog($fileName, $content);
    }

    protected function templateLog($fileName, $content)
    {
        $date = new DateTime("00:00");
        $fileLog = fopen("logs/{$fileName}_{$date->format("dmY")}.log", 'a');
        fwrite($fileLog, $content . "\n");
        fclose($fileLog);
    }
}