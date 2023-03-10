<?php 

class Connection {

    private static $host = "localhost";
    private static $dbname = "pvnn";
    private static $user = "root";
    private static $password = "";

    private static $conn = null;

    public static function getConnection(): PDO {

        if(self::$conn == null) {

            try {
                self::$conn = new PDO("mysql:host=" . self::$host . ";charset=utf8;dbname=" . self::$dbname, 
                self::$user, 
                self::$password);

                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(Exception $e) {
                print("Erro ao conectar com o banco de dados");
            }

        }

        return self::$conn;
    }
}
