<?php

namespace src;

class Authorization
{
    protected $render;
    protected $error = '';
    protected $email;
    protected $password;

    protected static array $loginCredentials = [
        'user1@test.com' => [
            'name' => 'Джон',
            'password' => '$2y$10$8YXvyVVWsBDV874DwFDheum.fg8kxfYnV86wpBnX1E/ETgB/BeYea',

        ],
        'user2@test.com' => [
            'name' => 'Джейн',
            'password' => '$2y$10$3BioYxSFyW4oi2E91PUB0uRn/peCoTrs3BtoUMORc8ieeyKhqEITC',
        ],
    ];

    public function __construct($email, $password)
    {
        $this->email = trim($email);
        $this->password = trim($password);
    }

    public function signIn(): string
    {
        $objTwig = new Twig();

        if (isset(self::$loginCredentials[$this->email]) && password_verify($this->password, self::$loginCredentials[$this->email]['password'])) {
            $this->render = $objTwig->template('hello', ['user' => self::$loginCredentials[$this->email]]);
        } else {
            $this->error = 'Password or E-mail is not correct';
            $this->render = $objTwig->template('index', ['error' => $this->error]);
        }
        return $this->render;
    }
}