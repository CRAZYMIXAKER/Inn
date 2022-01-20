<?php
return (function () {
    return [
        [
            'test' => '/^\/?$/',
            'controller' => 'File',
            'method' => 'run'
        ],
        [
            'test' => '/^Authorization\/signIn\/?$/',
            'controller' => 'Authorization',
            'method' => 'signIn'
        ],
        [
            'test' => '/^Registration\/signUp\/?$/',
            'controller' => 'Registration',
            'method' => 'signUp'
        ]
    ];
})();
