<?php

namespace core;

use DateTime;

/**
 * creates logs
 */
class Log
{
    /**
     * creates logs about uploading files to the server
     *
     * @param $error
     * @param $file
     * @param $folderName
     * @param $folderSize
     * @return void
     */
    public function file($error, $file, $folderName, $folderSize)
    {
        $status = $error == '' ? 'Successfully' : "Not successful($error)";
        $fileName = $status == 'Successfully' ? 'uploud' : 'notLoaded';
        $timeToLoad = new DateTime("now");
        $content = "{$timeToLoad->format('d.m.Y G:i:s')}: {$file['name']} - {$file['size']} - {$folderName} - {$folderSize}";
        $this->templateLog($fileName, $content);
    }

    /**
     * creates ban logs after bad authorization
     *
     * @param $ip
     * @param $email
     * @return void
     */
    public function badAuthorization($ip, $email)
    {
        $fileName = 'badAuthorization';
        $time = new DateTime("now");
        $content = "Ip: {$ip}   E-mail: {$email}   Time: {$time->format('G:i:s')} - {$time->modify('15 minute')->format('G:i:s')}";
        $this->templateLog($fileName, $content);
    }

    /**
     * template for creating logs
     *
     * @param $fileName
     * @param $content
     * @return void
     */
    protected function templateLog($fileName, $content)
    {
        $date = new DateTime("00:00");
        $fileLog = fopen("logs/{$fileName}_{$date->format("dmY")}.log", 'a');
        fwrite($fileLog, $content . "\n");
        fclose($fileLog);
    }
}