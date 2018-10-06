<?php
    // include('DatabaseModel.php');

    class ProductModel extends DatabaseModel
    {
        public function insertProduct($product_name, $product_des, $product_price, $fileName, $product_dateCreate, $product_dateUpdate)
        {
            $sql = "INSERT INTO Products (name, description, image, price, created_at, updated_at) 
                    VALUES ('$product_name', '$product_des', '$fileName','$product_price', '$product_dateCreate', '$product_dateUpdate')";
            $result = mysqli_query($this->conn, $sql);
            // var_dump($sql); exit();
            return $result;
        }

        public function getProductById($id)
        {
            $sql = "SELECT * FROM Products WHERE id = {$id}";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }

        public function getProducts() {
            $sql = "SELECT * FROM Products";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
    }
