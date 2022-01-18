<?php

namespace core;

use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class System
{
    function getFilesSize($path): int
    {
        $it = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)
        );

        $size = 0;
        foreach ($it as $fi) {
            $size += $fi->getSize();
        }
        return $size;
    }

    function parseUrl(array $url): array
    {
        $res = [];
        $res['controller'] = $url[0] ?? 'File';
        $res['method'] = $url[1] ?? 'run';

        if (file_exists($this->controller($res['controller']))) {
            $className = '\controllers\\' . $res['controller'];
            $objClass = new $className;

            if (!method_exists($objClass, $res['method']) == true) {
                $res['controller'] = 'Error';
                $res['method'] = 'notFound';
            }
        } else {
            $res['controller'] = 'Error';
            $res['method'] = 'notFound';
        }

        return $res;
    }

    public function controller($fileName)
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/Task_17/controllers/' . $fileName . '.php';
    }

    public function filterUrl($str)
    {
        return htmlspecialchars(trim($str));
    }


    public function get($name)
    {
        if (isset($_GET[$name])) {

            if (is_array($_GET[$name])) {
                return array_map(function ($item) {
                    return $this->filterUrl($item);
                }, $_GET[$name]);
            }

            return $this->filterUrl($_GET[$name]);

        }
        return false;
    }

    public function post($name)
    {
        if (isset($_POST[$name])) {

            if (is_array($_POST[$name])) {
                return array_map(function ($item) {
                    return $this->filterUrl($item);
                }, $_POST[$name]);
            }

            return $this->filterUrl($_POST[$name]);

        }
        return false;
    }
}