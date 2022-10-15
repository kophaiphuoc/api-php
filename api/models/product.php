<?php
    class products{
        public $categoryid;
        public $price ;
        public $name;
        public $infor;
        public $code; 

        public function __construct($categoryid,$price,$name,$infor,$code)
        {
            $this->categoryid = $categoryid;
            $this->price = $price;
            $this->name = $name;
            $this-> infor = $infor;
            $this-> code = $code;
        }

        

        /**
         * Get the value of categoryid
         */
        public function getCategoryid()
        {
                return $this->categoryid;
        }

        /**
         * Set the value of categoryid
         */
        public function setCategoryid($categoryid): self
        {
                $this->categoryid = $categoryid;

                return $this;
        }

        /**
         * Get the value of price
         */
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         */
        public function setPrice($price): self
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of name
         */
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName($name): self
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of infor
         */
        public function getInfor()
        {
                return $this->infor;
        }

        /**
         * Set the value of infor
         */
        public function setInfor($infor): self
        {
                $this->infor = $infor;

                return $this;
        }

        /**
         * Get the value of code
         */
        public function getCode()
        {
                return $this->code;
        }

        /**
         * Set the value of code
         */
        public function setCode($code): self
        {
                $this->code = $code;

                return $this;
        }
    }
