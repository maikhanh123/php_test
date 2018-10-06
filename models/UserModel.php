<?php
    
    // include('DatabaseModel.php');

    class UserModel extends DatabaseModel
    {
        public function getUserList()
        {
            $sql = "SELECT * FROM Users";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }

        public function insertUser($name, $email, $role, $username, $password, $dateCreate, $dateUpdate)
        {
            $sql = "INSERT INTO Users (name, email, role, username, password, created_at, updated_at) 
                    VALUES ('$name', '$email', '$role','$username', '$password', '$dateCreate', '$dateUpdate')";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
    }
