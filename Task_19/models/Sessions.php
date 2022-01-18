<?php

namespace models;

use core\DB;

/**
 * class for querying the session table in the database
 */
class Sessions extends DB
{
    /**
     * adds a session
     *
     * @param int $idUser
     * @param string $token
     * @return bool
     */
    public function sessionsAdd(int $idUser, string $token): bool
    {
        $params = ['id_user' => $idUser, 'token' => $token];
        $sql = "INSERT sessions (id_user, token) VALUES (:id_user, :token)";
        $this->dbQuery($sql, $params);
        return true;
    }

    /**
     * looking for a session
     *
     * @param string $token
     * @return array|null
     */
    public function sessionsOne(string $token): ?array
    {
        $sql = "SELECT * FROM sessions WHERE token=:token";
        $query = $this->dbQuery($sql, ['token' => $token]);
        $session = $query->fetch();
        return $session === false ? null : $session;
    }
}