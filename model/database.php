<?php
class Database {
    private static $dsn = 'mysql:host=sql2.njit.edu;dbname=rc443';
    private static $username = 'rc443';
    private static $password = 'Gpsc539F';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>
