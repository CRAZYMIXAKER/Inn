<?php

namespace core;

/**
 * helper class for working with authorization class
 */
class Auth
{
    /**
     * check the user for existence by reading cookies and sessions
     *
     * @return array|null
     */
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