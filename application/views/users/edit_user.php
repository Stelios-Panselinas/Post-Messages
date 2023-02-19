<h2>Edit User</h2>
<div class = "container">
    <div class="row lg-4 col-lg-offset-4">
    <?php echo form_open('/users/update/'.$user_id); ?>
    <div class="form-group">
        <label for="name">Change First Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="first_name">
    </div>
    <div class="form-group">
        <label for="last name">Change Last Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Last Name" name="last_name">
    </div>
    
    <div class="form-group">
        <label for="email">Change Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <button type="submit" class="btn btn-warning">Update User Data</button>
</form>