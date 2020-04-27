<?php
class Database {
    public $connection;
    
    function __construct() {

        $dsn = 'mysql:host=my18b.sqlserver.se;dbname=246400-shoes-us';
        $user = '246400_at68952';
        $password = 'grupparbete';

        /*$dsn = 'mysql:host=localhost;dbname=shoes_us';
        $user = 'root';
        $password = 'root';*/

        try {
            $this->connection = new PDO($dsn, $user, $password);
            $this->connection->exec('set names utf8');
            error_log("created DB");
        } catch(PDOException $e) {
            error_log($e->getMessage());
            throw $e;

        }
    }
}


?>
