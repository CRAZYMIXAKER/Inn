<?php

namespace model;

use core\DB;

class Users extends DB
{
    public function usersOne(string $email): ?array
    {
        $sql = "SELECT id_user, email, first_name, last_name FROM users WHERE email=:email";
        $query = $this->dbQuery($sql, ['email' => $email]);
        $user = $query->fetch();
        return $user === false ? null : $user;
    }

    public function userAdd(array $fields): bool
    {
        $sql = "INSERT users (first_name, last_name, email, password) VALUES (:firstName, :lastName, :email, :password)";
        $this->dbQuery($sql, $fields);
        return true;
    }
}