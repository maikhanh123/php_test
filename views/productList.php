
<div class="row">
  <?php while($row = mysqli_fetch_array($result)): ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="public/uploads/<?php echo $row['image']?>" alt="picture">
      <div class="caption">
        <h3><?php echo $row['name']?></h3>
        <p><?php echo $row['description']?></p>
        <h3>$ <?php echo $row['price']?></h3>
        <p><a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=singlePage&productId=<?php echo $row['id']?>" class="btn btn-primary" role="button">Detail</a></p>
      </div>
    </div>
  </div>
  <?php endwhile ?>

      
</div>