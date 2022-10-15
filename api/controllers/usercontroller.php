<?php
    include_once "../services/userservice.php";
    class UserController{
        private $services;

        function __construct(){
            $this->services = new userservices();
        }
        public function registerusers($username, $password,$adress){
            $res = $this->services->registeraccount($username, $password,$adress);
            if ($res != null){
                return $res;
            }else{
                return false;
            }
        }

        public function getalluser(){
            $res = $this->services->getalluser();
            if ($res != null){
                return $res;
            }else{
                return false;
            }
        }
    }