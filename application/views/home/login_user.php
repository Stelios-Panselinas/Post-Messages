
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="conteiner p-3 my-3 border">
            <h3>Login to your account</h3>
                <?php echo form_open('home/login');?>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required autofocus>
                    </div>
                    <div>
                        <a href="<?php echo base_url()?>home/register">Sign In</a>
                        <br>
                        <a href="lost_pass">Lost my password</a>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <?php echo validation_errors();?>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>