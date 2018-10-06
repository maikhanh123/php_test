
<div class="row">
  <div class="col-md-8 col-sm-12">
    <?php while($row = mysqli_fetch_array($result)): ?>
        <img id="myImage" src="public/uploads/<?php echo $row['image'] ?>" style="width:100%">
        </div>
        <div class="col-md-4 col-sm-12">
            <h1> <?php echo $row['name'] ?> </h1>
            <p> <?php echo $row['description'] ?> </p>
            <div>
                <h2>$<?php echo $row['price'] ?></h2>
                <a href="/cart" class="btn btn-success">
                    add to cart
                </a>
            </div>            
        </div>
    <?php endwhile ?>    
  </div> 

</div>
<hr/>
