<?php

namespace controllers;

/**
 * handles errors
 */
class Error
{
    /**
     * gives error 3..
     *
     * @return void
     */
    public function badUrl()
    {
        die("Error 301");
    }

    /**
     * gives error 4..
     *
     * @return void
     */
    public function notFound()
    {
        die("Error 404");
    }
}