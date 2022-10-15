<?php
class Acount
{
        public $iduser;
        public $username;
        public $password;
        public $avt;
        public $active;
        public $adress;
        public $atmpay;

        public function __construct($iduser, $username, $password, $avt, $active, $adress, $atmpay)
        {
                $this->iduser = $iduser;
                $this->username = $username;
                $this->password = $password;
                $this->avt = $avt;
                $this->active = $active;
                $this->adress = $adress;
                $this->atmpay = $atmpay;
        }

        /**
         * Get the value of username
         */
        public function getUsername()
        {
                return $this->username;
        }

        /**
         * Set the value of username
         */
        public function setUsername($username): self
        {
                $this->username = $username;

                return $this;
        }

        /**
         * Get the value of password
         */
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         */
        public function setPassword($password): self
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of avt
         */
        public function getAvt()
        {
                return $this->avt;
        }

        /**
         * Set the value of avt
         */
        public function setAvt($avt): self
        {
                $this->avt = $avt;

                return $this;
        }

        /**
         * Get the value of active
         */
        public function getActive()
        {
                return $this->active;
        }

        /**
         * Set the value of active
         */
        public function setActive($active): self
        {
                $this->active = $active;

                return $this;
        }

        /**
         * Get the value of adress
         */
        public function getAdress()
        {
                return $this->adress;
        }

        /**
         * Set the value of adress
         */
        public function setAdress($adress): self
        {
                $this->adress = $adress;

                return $this;
        }

        /**
         * Get the value of atmpay
         */
        public function getAtmpay()
        {
                return $this->atmpay;
        }

        /**
         * Set the value of atmpay
         */
        public function setAtmpay($atmpay): self
        {
                $this->atmpay = $atmpay;

                return $this;
        }

        /**
         * Get the value of iduser
         */
        public function getIduser()
        {
                return $this->iduser;
        }

        /**
         * Set the value of iduser
         */
        public function setIduser($iduser): self
        {
                $this->iduser = $iduser;

                return $this;
        }
}
