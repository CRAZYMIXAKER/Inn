<?php

namespace core;

use PDO;
use PDOStatement;

/**
 * connects the database and processes all requests to it
 */
class DB
{
    /**
     * db host name
     *
     * @var string $db_host
     */
    private string $db_host = 'localhost';

    /**
     * database name
     *
     * @var string $db_name
     */
    private string $db_name = 'Inn';

    /**
     * database login
     *
     * @var string $db_login
     */
    private string $db_login = 'root';

    /**
     * database password
     *
     * @var string $db_pass
     */
    private string $db_pass = '';

    /**
     * database object
     *
     * @var $db
     */
    private static $db;

    /**
     * array of settings with work database
     *
     * @var array $options
     */
    private array $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    /**
     * method to create single connection point to database using PDO
     *
     * @return PDO
     */
    public function dbInstance(): PDO
    {
        if (self::$db === null) {
            self::$db = new PDO('mysql:host=' . $this->db_host . ';dbname=' .
                $this->db_name, $this->db_login, $this->db_pass, $this->options);
            self::$db->exec('SET NAMES UTF8');
        }
        return self::$db;
    }

    /**
     * processes each request through the database using transactions
     *
     * @param string $sql
     * @param array $params
     * @return PDOStatement
     */
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

    /**
     * checks for errors when querying the database
     *
     * @param PDOStatement $query
     * @return bool
     */
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