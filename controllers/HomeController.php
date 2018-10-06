<?php
    include('models/DatabaseModel.php');
    include('models/UserModel.php');
    include('models/ProductModel.php');

    class HomeController
    {
        public function checkRequest()
        {
            $page = isset($_GET['page']) ? $_GET['page'] : $_SERVER['PHP_SELF'];
            
            switch ($page) {
                case $_SERVER['PHP_SELF']:
                    include('views/home.php');
                    break;
                case 'productList':
                    $product = new ProductModel();
                    $result = $product->getProducts();
                    include('views/productList.php');
                    break;
                case 'userList':
                    $user = new UserModel();
                    $result = $user->getUserList();
                    include('views/userList.php');
                    break;
                case 'singlePage':
                    $product = new ProductModel();
                    $result = $product->getProductById($_GET['productId']);

                    $comment = new CommentModel();
                    $resultComment = $comment->getCommentByProductId($_GET['productId']);
                    include('views/singlePage.php');
                    break;
                case 'addProduct':
                    $errName = $errDes = $errPrice = $errFile = $errDateCreate = $errDateUpdate = "";
                    $checkSubmit = true;
                    if (isset($_POST['submit_product'])) {
                        $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : "";
                        $product_des = isset($_POST['product_des']) ? $_POST['product_des'] : "";
                        $product_price = isset($_POST['product_price']) ? $_POST['product_price'] : "";
                        $product_dateCreate = isset($_POST['product_dateCreate']) ? $_POST['product_dateCreate'] : "";
                        $product_dateUpdate = isset($_POST['product_dateUpdate']) ? $_POST['product_dateUpdate'] : "";
                        $fileUpload = isset($_FILES['file']) ? $_FILES['file'] : "";
                        $fileName = isset($fileUpload['name']) ? uniqid().'_'.$fileUpload['name'] : "";
                        if ($product_name == '') {
                            $checkSubmit = false;
                            $errName = "Please input name of product!";
                        }
                        if ($product_des == '') {
                            $checkSubmit = false;
                            $errDes = "Please input description of product!";
                        }
                        if ($product_price == '') {
                            $checkSubmit = false;
                            $errPrice = "Please input price of product!";
                        }
                        if ($fileUpload['error']) {
                            $checkSubmit = false;
                            $errFile = "Please input image!";
                        }
                        if ($product_dateCreate == '') {
                            $checkSubmit = false;
                            $errDateCreate = "Please input date Create!";
                        }

                        if ($checkSubmit) {
                            $targetUpload = "public/uploads/".$fileName;
                            move_uploaded_file($fileUpload['tmp_name'], $targetUpload);
                            $product = new ProductModel();
                            $result = $product->insertProduct($product_name, $product_des, $product_price, $fileName, $product_dateCreate, $product_dateUpdate);
                            $this->redirect("index.php?page=productList");
                        }
                    }
                    include('views/productForm.php');
                    break;
                case 'register':
                    $errName =  $errEmail = $errUserName = $errRole = $errPass = $errDateCreate = $errDateUpdate ="";
                    $checkSubmit = true;
                    if (isset($_POST['submit_user'])) {
                        $name = isset($_POST['name']) ? $_POST['name'] : "";
                        $email = isset($_POST['email']) ? $_POST['email'] : "";
                        $role = isset($_POST['role']) ? $_POST['role'] : "";
                        $username = isset($_POST['username']) ? $_POST['username'] : "";
                        $password = isset($_POST['password']) ? $_POST['password'] : "";
                        $dateCreate = isset($_POST['dateCreate']) ? $_POST['dateCreate'] : "";
                        $dateUpdate = isset($_POST['dateUpdate']) ? $_POST['dateUpdate'] : "";
                        if ($name == '') {
                            $checkSubmit = false;
                            $errName = "Please input name!";
                        }
                        if ($email == '') {
                            $checkSubmit = false;
                            $errEmail = "Please input email!";
                        }
                        if ($username == '') {
                            $checkSubmit = false;
                            $errUserName = "Please input username!";
                        }
                        if ($password == '') {
                            $checkSubmit = false;
                            $errPass = "Please input password!";
                        }
                        if ($role == '') {
                            $checkSubmit = false;
                            $errRole = "Please input role!";
                        }
                        if ($dateCreate == '') {
                            $checkSubmit = false;
                            $errDateCreate = "Please input date Create!";
                        }

                        if ($checkSubmit) {
                            
                            $user = new UserModel();
                            $result = $user->insertUser($name, $email, $role, $username, $password, $dateCreate, $dateUpdate);
                            $this->redirect("index.php");
                        }
                    }
                    include('views/register.php');
                    break;
                case 'comment':
                    $errComment =  $errAuthor = "";
                    $checkSubmit = true;
                    
                    if (isset($_POST['submit_comment'])) {
                        $productId = isset($_POST['productId']) ? $_POST['productId'] : "";
                        $comment = isset($_POST['comment']) ? $_POST['comment'] : "";
                        $author = isset($_POST['author']) ? $_POST['author'] : "";
                        if ($comment == '') {
                            $checkSubmit = false;
                            $errComment = "Please input comment!";
                        }
                        if ($author == '') {
                            $checkSubmit = false;
                            $errAuthor = "Please input author name!";
                        }
    
                        if($checkSubmit) {
                            $commentModel = new CommentModel();
                            $result = $commentModel->insertComment($productId, $comment, $author);
                            $this->redirect("index.php?page=singlePage&productId=". $_GET['productId']);
                            // include('views/singlePage.php');
                        }
                    }

                    
                    
                    break;
                    


            }
        }

        public function redirect($location) {
            header("Location: $location");
        }
    }
