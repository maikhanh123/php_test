<?php
    // include('DatabaseModel.php');

    class CommentModel extends DatabaseModel
    {
        public function insertComment($productId, $comment, $author)
        {
            $sql = "INSERT INTO comments (productId, comment, author) 
                    VALUES ($productId, '$comment', '$author') ";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }

        public function getCommentByProductId($id) {
            $sql = "SELECT * FROM comments WHERE productId = {$id}";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
    }
?>