<?php

namespace controllers;

class Error
{
    public function badUrl()
    {
        die("Error 301");
    }

    public function notFound()
    {
        die("Error 404");
    }
}