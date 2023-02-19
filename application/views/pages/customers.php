<br>
<?php foreach($users as $user) : ?>
    <div class="container">
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapse<?php echo $user['user_id'];?>">
                        User ID: <?php echo $user['user_id']; ?>
                    </a>
                </div>
                <div id="collapse<?php echo $user['user_id'];?>" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p name = "first_name">First Name: <?php echo $user['first_name']; ?></p>
                            <p class = "last_name">Last Name: <?php echo $user['last_name']; ?></p>
                            <p class = "email">email: <?php echo $user['email']; ?></p>
                        </div>
                        <div class="col">
                            <?php echo form_open('/users/delete/'.$user['user_id']); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <?php echo form_open('/users/edit/'.$user['user_id']); ?>
                            <button type="submit" class="btn btn-warning">Edit User</button>
                            </form>
                            <br>
                            <br>
                            <?php echo form_open('/users/show_messages/'.$user['user_id']); ?>
                            <button type="submit" class="btn btn-info">Show user's messages</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>