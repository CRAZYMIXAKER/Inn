<?php

namespace src;

class Authorization
{

    protected $render;
    protected $errors = [];
    protected $email;
    protected $password;

    protected static array $loginCredentials = [
        'user1@test.com' => [
            'name' => 'Джон',
            'password' => '$2y$10$8YXvyVVWsBDV874DwFDheum.fg8kxfYnV86wpBnX1E/ETgB/BeYea', // what is the password ?

        ],
        'user2@test.com' => [
            'name' => 'Джейн',
            'password' => '$2y$10$3BioYxSFyW4oi2E91PUB0uRn/peCoTrs3BtoUMORc8ieeyKhqEITC', // what is the password ?
        ],
    ];

    public function __construct($email, $password)
    {
        $this->email = trim($email);
        $this->password = trim($password);
    }

    protected function validate()
    {
        if (!password_verify($this->password, self::$loginCredentials[$this->email]['password'])) {
            $this->errors[] = 'Password wrong';
        }
    }

    public function signIn(): string
    {
        $objTwig = new Twig();

        if (isset(self::$loginCredentials[$this->email])) {
            $this->validate();

            if (empty($this->errors)) {
                $this->render = $objTwig->template('hello', ['user' => self::$loginCredentials[$this->email]]);
            } else {
                $this->render = $objTwig->template('index', ['errors' => $this->errors]);
            }
        } else {
            $this->errors[] = 'Invalid login';
            $this->render = $objTwig->template('index', ['errors' => $this->errors]);
        }
        return $this->render;
    }
}