<?php

namespace models;

use core\DB;

class Sessions extends DB
{
    public function sessionsAdd(int $idUser, string $token): bool
    {
        $params = ['id_user' => $idUser, 'token' => $token];
        $sql = "INSERT sessions (id_user, token) VALUES (:id_user, :token)";
        $this->dbQuery($sql, $params);
        return true;
    }

    public function sessionsOne(string $token): ?array
    {
        $sql = "SELECT * FROM sessions WHERE token=:token";
        $query = $this->dbQuery($sql, ['token' => $token]);
        $session = $query->fetch();
        return (!$session) ? null : $session;
    }
}