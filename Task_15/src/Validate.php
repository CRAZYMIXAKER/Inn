<?php

namespace src;

class Validate
{
    public function fileUpload($file): string
    {
        $error = '';

        if ($file['error'] == 2) {// file size limit
            $error = 'Exceeding the allowed file size';
        }
        elseif (is_executable($file['tmp_name'])) {// checking the executable
            $error = 'Executable file';
        }
        elseif (disk_free_space("/") < $file['size']) {// not enough space for the file
            $error = 'Not enough memory';
        }

        return $error;
    }
}