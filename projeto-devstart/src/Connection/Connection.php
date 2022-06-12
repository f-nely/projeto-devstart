<?php

declare(strict_types=1);

namespace App\Connection;

use PDO;

abstract class Connection
{
    public static function getConnection(): PDO
    {
        $database = 'db_store';
        $username = 'nelynely';
        $password = '2006si';

        return new \PDO("mysql:host=localhost;dbname={$database}", $username, $password);
    }
}