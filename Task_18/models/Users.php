<?php

namespace models;

use core\DB;

/**
 * class for querying the users table in the database
 */
class Users extends DB
{
    /**
     * searches for a user by id
     *
     * @param string $id_user
     * @return array|null
     */
    function userById(string $id_user): ?array
    {
        $sql = "SELECT id_user, email, first_name, last_name FROM users WHERE id_user = :id_user";
        $query = $this->dbQuery($sql, ['id_user' => $id_user]);
        $user = $query->fetch();
        return (!$user) ? null : $user;
    }

    /**
     * looking for a user
     *
     * @param string $email
     * @return array|null
     */
    public function usersOne(string $email): ?array
    {
        $sql = "SELECT id_user, password FROM users WHERE email = :email";
        $query = $this->dbQuery($sql, ['email' => $email]);
        $user = $query->fetch();
        return (!$user) ? null : $user;
    }

    /**
     * adds a user
     *
     * @param array $fields
     * @return bool
     */
    public function userAdd(array $fields): bool
    {
        $sql = "INSERT users (first_name, last_name, email, password) VALUES (:firstName, :lastName, :email, :password)";
        $this->dbQuery($sql, $fields);
        return true;
    }
}