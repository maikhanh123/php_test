
<div class="row">
    <h1>Product Add</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="col-lg-6">
            <div class="form-group <?php if(!empty($errName)) echo 'has-error'; ?>">
                <label >Product Name</label>
                <input type="text" name="product_name" class="form-control" placeholder="Product Name">
                <span class="error"><?php echo $errName;?></span>
            </div>

            <div class="form-group <?php if(!empty($errDes)) echo 'has-error'; ?>">
                <label>Product Description</label>
                <textarea name="product_des" class="form-control" rows="3"></textarea>
                <span class="error"><?php echo $errDes;?></span>
            </div>

            <div class="form-group <?php if(!empty($errPrice)) echo 'has-error'; ?>">
                <label>Price</label>
                <input type="text" name="product_price" class="form-control" placeholder="Price">
                <span class="error"><?php echo $errPrice;?></span>
            </div>

            <div class="form-group">
                <label>Image</label>
                <p><input type="file" name="file"></p>
                <span class="error"> <?php echo $errFile?> </span>
            </div>
            

            <button type="submit" name="submit_product" class="btn btn-default">Submit</button>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label>Date Create</label>
                <input name="product_dateCreate" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                <p class="help-block">This is today on format: Month/Day/Year</p>
                <span class="error"><?php echo $errDateCreate;?></span>
            </div>

            <div class="form-group">
                <label>Date Update</label>
                <input name="product_dateUpdate" type="date" class="form-control">
                <p class="help-block">This on format: Month/Day/Year</p>
                <span class="error"><?php echo $errDateUpdate;?></span>
            </div>
        </div>


        
        
    </form>
</div>