<?php echo validation_errors(); ?>

<div class="conteiner-lg">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="conteiner p-5">
                <h3 class = "text-center">Sign Up</h3>
                <?php echo form_open('home/register');?>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter first name" name="first_name">
                    </div>
                    <div class="form-group">
                        <label for="last name">Last name:</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password">Retype password:</label>
                        <input type="password" class="form-control" id="rpwd" placeholder="Enter password" name="password2">
                    </div>
                    <button type="submit" class="btn btn-primary">Registry</button>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>