<?php
namespace Src\Database;

use mysqli;

class DB
{
    private static $connection; // No longer static

    // Establish a database connection
    public static function connect()
    {
        if (!self::$connection) {
            self::$connection = new mysqli(
                '127.0.0.1',
                'root',
                'password',
                'crud1'
            );

            if (self::$connection->connect_error) {
                die('Database connection failed: ' . self::$connection->connect_error);
            }
        }

        return self::$connection;
    }

    // Close the database connection
    // public static function close()
    // {
    //     if (self::$connection) {
    //         self::$connection->close();
    //         self::$connection = null;
    //     }
    // }
}
