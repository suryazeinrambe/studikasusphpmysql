<?php
namespace Config {
    class Database
    {
        static function getConnection(): \PDO
        {
            $host = 'localhost';
            $port = 3306;
            $dbname = 'belajarphptodolist';
            $username = 'root';
            $password = '';

            return new \PDO ("mysql:host=$host;dbname=$dbname", $username, $password);
        }
    }
}
