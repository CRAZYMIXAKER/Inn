<?php

namespace src;

use src\Validate;
use src\Log;

class File extends Validate
{
    public function workWithFile($file): array
    {
        $dir = 'upload';
        $uploadDir = "$dir/";
        $uploadFile = $uploadDir . basename($file['name']);

        $error = $this->fileUpload($file);

        if (empty($error)) {
            @mkdir($dir, 0777, true);// folder existence
            // because I can use functions without unnecessary checks, thus less code

            move_uploaded_file($file['tmp_name'], $uploadFile);// uploading a file to a folder

            $metaInformation = $this->metaInformation($dir, $file['name']);
            $arrParam = ['pathToViews' => 'file', 'file' => $file, 'metaInformation' => $metaInformation];
        } else {
            $arrParam = ['pathToViews' => 'index', 'error' => $error];
        }

        $objLog = new Log();
        $objLog->file($error, $file);

        return $arrParam;
    }

    public function metaInformation($dir, $fileName): array|bool
    {
        // opening the file in binary mode
        $fp = fopen("$dir/$fileName", 'rb');

        // trying to read exif headers
        @$headers = exif_read_data($fp);

        return $headers != '' ? $headers['COMPUTED'] : '';
    }
}