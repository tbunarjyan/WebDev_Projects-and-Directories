<?php

class DbConnection
{
    const HOST = "localhost";
    const DATABASE = "aca";
    const USERNAME = "root";
    const PASSWORD = "toxindzners";

    /**
     * @var PDO
     */
    private $connection;

    /**
     * DbConnection constructor.
     */
    public function __construct()
    {
        $conn = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DATABASE, self::USERNAME, self::PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->connection = $conn;
    }

    /**
     * @return PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }
}