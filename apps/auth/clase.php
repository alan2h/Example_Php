
<?php
    require_once('../../../config.php');

class Usuario {
        private $username;
        private $password;

        /**
         * Get the value of username
         */ 
        public function getUsername()
        {
                return $this->username;
        }

        /**
         * Set the value of username
         *
         * @return  self
         */ 
        public function setUsername($username)
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
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        public function validate()
        {
            $mysql = new Connection();
            $query = "Select * from auth_usuarios where password='".$this->password."' and username='".$this->username."'";
            $result = $mysql->consultar($query);
            
            return $result;
        }
    }
?>