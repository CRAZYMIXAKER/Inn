<?php

namespace core;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

/**
 * to work with Twig
 */
class Twig
{
    /**
     * creates a template for a website page
     *
     * @param string $path
     * @param array $vars
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function template(string $path, array $vars = []): string
    {
        static $twig;

        if ($twig === null) {
            $loader = new FilesystemLoader('views');

            $twig = new Environment($loader, [
                'cache' => 'cache/twig',
                'auto_reload' => true,
                'autoescape' => false,
                'strict_variables' => true
            ]);
        }

        return $twig->render("$path.twig", $vars);
    }
}