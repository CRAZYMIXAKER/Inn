<?php

namespace core;

use PDO;
use PDOStatement;

class DB
{
    private string $db_host = 'localhost';
    private string $db_name = 'Inn';
    private string $db_login = 'root';
    private string $db_pass = '';
    private static $db;

    private array $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    public function dbInstance(): PDO
    {
        if (self::$db === null) {
            self::$db = new PDO('mysql:host=' . $this->db_host . ';dbname=' .
                $this->db_name, $this->db_login, $this->db_pass, $this->options);
            self::$db->exec('SET NAMES UTF8');
        }
        return self::$db;
    }

    public function dbQuery(string $sql, array $params = []): PDOStatement
    {
        self::$db = $this->dbInstance();
        self::$db->beginTransaction();
        $query = self::$db->prepare($sql);
        $query->execute($params);
        $this->dbCheckError($query);
        self::$db->commit();
        return $query;
    }

    public function dbCheckError(PDOStatement $query): bool
    {
        $errInfo = $query->errorInfo();

        if ($errInfo[0] !== PDO::ERR_NONE) {
            self::$db->rollBack();
            echo $errInfo[2];
            exit();
        }
        return true;
    }
}