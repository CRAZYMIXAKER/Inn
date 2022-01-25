<?php

namespace core;

use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

/**
 * helper class for working with the site
 */
class System
{
    /**
     * calculates the size of a folder by counting the size of each file
     *
     * @param $path
     * @return int
     */
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

    /**
     * method for routing, processes url
     *
     * @param array $url
     * @return array
     */
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

    /**
     * gives the path to the controller
     *
     * @param $fileName
     * @return string
     */
    public function controller($fileName)
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/Task_18/controllers/' . $fileName . '.php';
    }

    /**
     * filters url
     *
     * @param $str
     * @return string
     */
    public function filterUrl($str)
    {
        return htmlspecialchars(trim($str));
    }

    /**
     * handles a get request
     *
     * @param $name
     * @return array|false|string|string[]
     */
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

    /**
     * handles a post request
     *
     * @param $name
     * @return array|false|string|string[]
     */
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