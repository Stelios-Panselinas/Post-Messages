<div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="conteiner p-5">
            <?php echo form_open('/admin/update_profile_admin/'.$this->session->userdata['admin_id']); ?>
                    <div class="form-group">
                        <label for="first_name">Name:</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name">
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
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>