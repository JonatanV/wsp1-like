<?php

class DbConnection {
    private static $instance = null;
    private $dbh;

    private function __construct()
    {
        include 'dbinfo.php';

        try { 
            $this->dbh = new PDO(
                'mysql:host=localhost;
                 charset=utf8mb4;
                 dbname=' . $database . '', 
                 $user, 
                 $password
            );
        } catch (PDOException $e) {
            print "Error!" . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static function getInstance()
    {
       if (self::$instance == null)
       {
           self::$instance = new DbConnection();
       }
       return self::$instance;
    }

    public function getConnection() 
    {
        return $this->dbh;
    }
}

?>