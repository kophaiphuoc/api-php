<?php
    include_once "../services/productservice.php";
    class prodcutcontroller{
        private $services;

        function __construct(){
            $this->services = new productservices();
        }
        public function getallproducts(){
            $res = $this->services->getallproducts();
            if ($res != null){
                return $res;
            }else{
                return false;
            }
        }

        public function getaproduct($name){
            $res = $this->services->getaproduct($name);
            if ($res != null){
                return $res;
            }else{
                return false;
            }
        }

        public function getacartbyuser($iduser){
            $res = $this->services->getacartbyuser($iduser);
            if ($res != null){
                return $res;
            }else{
                return false;
            }
        }

        public function updateaproduct($idproduct,$nameproduct){
            $res = $this->services->updateaproduct($idproduct,$nameproduct);
            if ($res != null){
                return true;
            }else{
                return false;
            }
        }

        public function addproduct($categoryid,$price,$name,$infor,$code){
            $res = $this->services->addproduct($categoryid,$price,$name,$infor,$code);
            if ($res != null){
                return true;
            }else{
                return false;
            }
        }

        public function deletearproduct($idproduct){
            $res = $this->services->deletearproduct($idproduct);
            if ($res != null){
                return true;
            }else{
                return false;
            }
        }
    }