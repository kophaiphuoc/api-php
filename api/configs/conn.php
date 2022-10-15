<?php
class Configs
{
    public $connection;
    public function getConnection()
    {
        $dbhost = "localhost";
        $dbname = "plantapp";
        $dbuser = "root";
        $dbpass = "";

        try {
            $this->connection = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname . ';charset=utf8', $dbuser, $dbpass);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $this->connection;
    }
}