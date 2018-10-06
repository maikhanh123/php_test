<?php 
    class DatabaseModel{
        public $conn;
        public function connect()
        {
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $databaseName = 'computer_shop';
            $this->conn = mysqli_connect($host, $user, $password, $databaseName);
            return $this->conn;
        }
        
        public function __construct()
        {
            $this->connect();
        }

        
        
    }


?>