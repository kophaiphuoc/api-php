<?php
include_once "../configs/conn.php";
include_once "../models/user.php";

    class userservices{
        private $connection;
        function __construct(){
            $this->connection = (new Configs())->getConnection();
        }
        public function registeraccount($username, $password,$adress)
        {
            try {
               $avtnow = "";
               $activenow = 0;
               $atmnow = "";
                $query = "INSERT INTO USERINFOR (USERNAME, PASSWORD,AVT,ACTIVE,ADRESS,ATMPAY)VALUES(?,?,'$avtnow','$activenow',?,'$atmnow');";
                $stmt = $this->connection->prepare($query);
                $stmt->bindParam(1, $username);
                $stmt->bindParam(2, $password);
                $stmt->bindParam(3, $adress);
                if ($stmt->execute()) {
                    return true;
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        public function getalluser()
        {
            try {
                $query = "SELECT * FROM userinfor";
                $stmt = $this->connection->prepare($query);
                if ($stmt->execute()) {
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);;
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }