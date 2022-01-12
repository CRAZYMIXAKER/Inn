<?php

namespace Controllers;

use core\Validates;
use core\Log;

class File extends Validates
{
    private string $title = 'File';

    public function run(): array
    {
        $arrParam = [
            'pathToView' => 'v_auth',
            'title' => 'Authorization'
        ];

        if (isset($_SESSION['user'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $arrParam = $this->workWithFile();
            } else {
                $arrParam = [
                    'pathToView' => 'v_main',
                    'title' => 'Main',
                    'user' => $_SESSION['user']
                ];
            }
        } else {
            header("Location: Authorization/signIn");
            exit();
        }

        return $arrParam;
    }

    public function workWithFile(): array
    {
        $file = $_FILES['file'];
        $dir = 'upload';
        $uploadDir = "$dir/";
        $uploadFile = $uploadDir . basename($file['name']);

        $error = $this->fileUpload($file);

        if (empty($error)) {
            @mkdir($dir, 0777, true);// folder existence
            // because I can use functions without unnecessary checks, thus less code

            move_uploaded_file($file['tmp_name'], $uploadFile);// uploading a file to a folder

            $metaInformation = $this->metaInformation($dir, $file['name']);
            $arrParam = ['pathToView' => 'v_file', 'title' => $this->title, 'file' => $file, 'metaInformation' => $metaInformation];
        } else {
            $arrParam = ['pathToView' => 'v_main', 'title' => 'main', 'error' => $error, 'user' => $_SESSION['user']];
        }

        $path = "{$_SERVER['DOCUMENT_ROOT']}/Task_17/{$dir}";
        $folderSize = (new \core\System)->getFilesSize($path);
        (new \core\Log)->file($error, $file, $dir, $folderSize);

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