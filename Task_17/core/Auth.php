<?php

namespace core;

class Auth
{
    public function authGetUser(): ?array
    {
        $user = null;
        $token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;

        if ($token !== null) {
            $session = (new \models\Sessions)->sessionsOne($token);

            if ($session !== null) {
                $user = (new \models\Users)->userById($session['id_user']);
            }

            if ($user === null) {
                unset($_SESSION['token']);
                setcookie('token', '', time() - 1, '/');
            }
        }
        return $user;
    }
}