<?php
include_once "../configs/conn.php";
include_once "../models/product.php";

    class productservices{
        private $connection;
        function __construct(){
            $this->connection = (new Configs())->getConnection();
        }
        public function getallproducts()
        {
            try {
                $query = "SELECT * FROM PRODUCTS";
                $stmt = $this->connection->prepare($query);
                if ($stmt->execute()) {
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        public function getaproduct($name)
        {
            try {
                $username = "%" . $name . "%";
                $query = "SELECT CATEGORYID,PRICE,NAME,INFOR,CODE FROM PRODUCTS WHERE NAME LIKE ? ";
                $stmt = $this->connection->prepare($query);
                $stmt->bindParam(1, $username);
                $stmt->execute();
                if ($stmt->execute() >0) {
                    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $row;
                }else{
                    return null;
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        public function getacartbyuser($iduser)
        {
            try {
                $query = "SELECT userinfor.IDUSER,products.NAME,orderdetails.QUANTITY,products.PRICE,(products.PRICE * orderdetails.QUANTITY) AS TOTAL FROM orderdetails INNER JOIN orders ON orderdetails.ORDERID = orders.IDORDER INNER JOIN userinfor
                ON orders.USERID = userinfor.IDUSER INNER JOIN products ON orderdetails.PRODUCTID = products.IDPRODUCTS
                WHERE userinfor.IDUSER = $iduser";
                $stmt = $this->connection->prepare($query);
                if ($stmt->execute() >0) {
                    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $row;
                }else{
                    return true;
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        public function updateaproduct($idproduct,$nameproduct)
        {
            try {
                $query = "UPDATE products SET products.NAME = '$nameproduct'
                                        WHERE products.IDPRODUCTS = $idproduct";
                $stmt = $this->connection->prepare($query);
                error_log($nameproduct);
                $stmt->execute();
                if ($stmt->execute()) {
                    return true;
                }else{
                    return null;
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        public function addproduct($categoryid,$price,$name,$infor,$code)
        {
            try {
                error_log($name);
                $query = "INSERT INTO PRODUCTS (CATEGORYID, PRICE,NAME,INFOR,CODE)VALUES(?,?,?,?,?);";
                $stmt = $this->connection->prepare($query);
                $stmt->bindParam(1, $categoryid);
                $stmt->bindParam(2, $price);
                $stmt->bindParam(3, $name);
                $stmt->bindParam(4, $infor);
                $stmt->bindParam(5, $code);
                if ($stmt->execute()) {
                    return true;
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        public function deletearproduct($idproduct)
        {
            try {
                $query = "DELETE FROM products WHERE IDPRODUCTS= ?";
                $stmt = $this->connection->prepare($query);
                $stmt->execute();
                $stmt->bindParam(1, $idproduct);
                if ($stmt->execute()) {
                    return true;
                }else{
                    return null;
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        
    }