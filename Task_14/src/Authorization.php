<?php

class Authorization
{

    protected $content;
    protected $errors = [];
    protected $email;
    protected $password;
    protected static $arrUsers = [
        'user1@test.com'=>[
            'name'=>'Джон',
            'password'=>'$2y$10$8YXvyVVWsBDV874DwFDheum.fg8kxfYnV86wpBnX1E/ETgB/BeYea',//используйте password_hash () для генерации пароля в вашем коде

        ],
        'user2@test.com' => [
            'name' => 'Джейн',
            'password' => '$2y$10$3BioYxSFyW4oi2E91PUB0uRn/peCoTrs3BtoUMORc8ieeyKhqEITC', // используйте password_hash () для генерации пароля в вашем коде
        ],
    ];

    public function __construct($email, $password){
        $this->email = trim($email);
        $this->password = trim($password);
    }

    protected function validate(){
        if(!password_verify($this->password, self::$arrUsers[$this->email]['password'])){
            $this->errors[] = 'Password wrong';
        }
    }

    public function signIn(){
        $objTwig = new Twig();

        if(isset(self::$arrUsers[$this->email])){
            $this->validate();

            if(empty($this->errors)){
                $this->content = $objTwig->template('hello', ['user' => self::$arrUsers[$this->email]]);
            }else{
                $this->content = $objTwig->template('index', ['errors' => $this->errors]);
            }
        }else{
            $this->errors[]='Invalid login';
            $this->content = $objTwig->template('index', ['errors' => $this->errors]);
        }
        return $this->content;
    }
}