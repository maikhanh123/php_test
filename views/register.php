

<div class="row">
    <h1>Register</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="col-lg-6">
            <div class="form-group <?php if(!empty($errName)) echo 'has-error'; ?>">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Product Name">
                <span class="error"><?php echo $errName;?></span>
            </div>

            <div class="form-group <?php if(!empty($errEmail)) echo 'has-error'; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Product Name">
                <span class="error"><?php echo $errEmail;?></span>
            </div>

            <!-- <div class="form-group <?php //if(!empty($errRole)) echo 'has-error'; ?>">
                <label>role</label>
                <input type="text" name="role" class="form-control" placeholder="Role">
                <span class="error"><?php //echo $errRole;?></span>
            </div> -->

            <div class="form-group <?php if(!empty($errUserName)) echo 'has-error'; ?>">
                <label>User Name</label>
                <input type="text" name="username" class="form-control" placeholder="UserName">
                <span class="error"><?php echo $errUserName;?></span>
            </div>

            <div class="form-group <?php if(!empty($errPass)) echo 'has-error'; ?>">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Password">
                <span class="error"><?php echo $errPass;?></span>
            </div>

            <div class="form-group">
                <label>Role</label>
                    <div class="radio">
                        <label> 
                            <input type="radio" name="role" value="admin">
                            <span> Admin </span> 
                        </label>
                        <label> 
                            <input type="radio" name="role" value="employee">
                            <span> Employee </span> 
                        </label>
                    </div>
                <span class="error"><?php echo $errRole;?></span>
            </div>

            <button type="submit" name="submit_user" class="btn btn-default">Submit</button>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label>Date Create</label>
                <input name="dateCreate" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                <p class="help-block">This is today on format: Month/Day/Year</p>
                <span class="error"><?php echo $errDateCreate;?></span>
            </div>

            <div class="form-group">
                <label>Date Update</label>
                <input name="dateUpdate" type="date" class="form-control">
                <p class="help-block">This on format: Month/Day/Year</p>
                <span class="error"><?php echo $errDateUpdate;?></span>
            </div>
        </div>


        
        
    </form>
</div>