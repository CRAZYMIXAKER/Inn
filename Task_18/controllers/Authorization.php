<?php

namespace controllers;

use Exception;
use models\Users;

/**
 * works with login window
 */
class Authorization extends Users
{
    /**
     * stores the name of the tab
     *
     * @var string $pageTitle
     */
    protected string $pageTitle = 'Authorization';

    /**
     * the method processes information from the authorization window
     *
     * @return array
     * @throws Exception
     */
    public function signIn(): array
    {
        $arrReturn = [
            'pathToView' => 'v_auth',
            'title' => $this->pageTitle
        ];


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (!isset($_SESSION['auth'])) {
                $_SESSION['auth'] = ['ip' => $_SERVER['REMOTE_ADDR'], 'change' => 0];
            }

            if ($_SESSION['auth']['change'] < 3 && !isset($_COOKIE['banPoIp'])) {
                $_SESSION['auth']['change']++;

                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                $remember = isset($_POST['remember']);

                $usersOne = $this->usersOne($email);

                if ($usersOne !== null && password_verify($password, $usersOne['password'])) {
                    $user = $this->userById($usersOne['id_user']);

                    $token = substr(bin2hex(random_bytes(128)), 0, 128);
                    (new \models\Sessions)->sessionsAdd($usersOne['id_user'], $token);
                    $_SESSION['token'] = $token;

                    if ($remember) {
                        setcookie('token', $token, time() + 3600 * 24 * 7, '/');
                    }

                    unset($_SESSION['auth']);
                    header("Location: /Task_18");
                    exit();
                } else {
                    $arrReturn['error'] = 'login or password is not correct';
                    $arrReturn['email'] = $email;
                }
            } else {
                if (!isset($_COOKIE['banPoIp'])) {
                    unset($_SESSION['auth']);
                    (new \core\Log)->badAuthorization($_SERVER['REMOTE_ADDR'], trim($_POST['email']));
                    setcookie('banPoIp', $_SERVER['REMOTE_ADDR'], time() + 900, '/');
                }
                $arrReturn['error'] = 'You are was banned! Wait 15 min';
            }
        }
        return $arrReturn;
    }
}