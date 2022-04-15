<?php
    class ModelUser{
        private $obj_conexion;
        public function __construct()
        {            
            $dsn = sprintf('mysql:unix=/var/run/mysqld/mysqld.sock;dbname=%s', "RelocaDB");
            $this->obj_conexion =  new PDO($dsn, "admin", "password");        
        }
        
        public function getAllVeterinary()
        {
            $sql = "SELECT * FROM users WHERE user_is_admin = 1";
            $result = $this->obj_conexion->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public function loginCheck($username,$password)
        {
            $password_md5 = md5($password);
            $sql = "SELECT user_id,user_name,user_lastname,user_is_admin 
            FROM users WHERE user_username = '$username' AND user_password = '$password_md5'";
            $result = $this->obj_conexion->prepare($sql);
            $result->execute();
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        public function register($name,$lastname,$username,$password)
        {
            $password_md5 = md5($password);
            $sql = "INSERT INTO users (user_name,user_lastname,user_username,user_password) 
            VALUES ('$name', '$lastname', '$username', '$password_md5')";
            $result = $this->obj_conexion->prepare($sql);
            $result->execute();
            return $result->rowCount();
        }
    }

?>