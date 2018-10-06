<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']?>">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($_GET['page'] == 'productList') echo 'active' ?>"><a href="<?php echo $_SERVER['PHP_SELF']?>?page=productList">Product List</a></li>
            <li class="<?php if($_GET['page'] == 'userList') echo 'active' ?>"><a href="<?php echo $_SERVER['PHP_SELF']?>?page=userList">Users</a></li>
            <li class="<?php if($_GET['page'] == 'addProduct') echo 'active' ?>"><a href="<?php echo $_SERVER['PHP_SELF']?>?page=addProduct">Add Product</a></li>
            <li class="<?php if($_GET['page'] == 'register') echo 'active' ?>"><a href="<?php echo $_SERVER['PHP_SELF']?>?page=register">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>