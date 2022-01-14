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
     * @param string $url
     * @param array $routes
     * @return array
     */
    function parseUrl(string $url, array $routes): array
    {
        $res = [
            'controller' => 'errors/e404',
            'params' => []
        ];

        foreach ($routes as $route) {
            $matches = [];

            if (preg_match($route['test'], $url, $matches)) {
                $res['controller'] = $route['controller'];
                $res['method'] = $route['method'];

                if (isset($route['params'])) {
                    foreach ($route['params'] as $name => $num) {
                        $res['params'][$name] = $matches[$num];
                    }
                }
                break;
            }
        }
        return $res;
    }
}