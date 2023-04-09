<?php

use JetBrains\PhpStorm\NoReturn;

include "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();
class Database {
    private static ?Database $instance = null;
    private mysqli $conn;

    #[NoReturn] private function __construct()
    {
        $this->conn = new mysqli($_ENV['HOST'], $_ENV['USER'], $_ENV['PASS'], $_ENV['DB_NAME']);
        if ($this->conn->connect_error) {
            die("Ошибка соединения с базой данных: " . $this->conn->connect_error);
        }
    }

    public static function getInstance(): ?Database
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): mysqli
    {
        return $this->conn;
    }
}