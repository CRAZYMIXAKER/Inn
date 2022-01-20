<?php

namespace core;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Twig
{
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