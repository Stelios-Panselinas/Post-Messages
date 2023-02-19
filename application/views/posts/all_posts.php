<br>
<?php foreach($posts as $post) : ?>
    <div class="container">
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapse<?php echo $post['id'];?>">
                        <h5>Messege ID: <?php echo $post['id']; ?></h5><small>Created at: <?php echo $post['created_at']; ?> </small>
                    </a>
                </div>
                <div id="collapse<?php echo $post['id'];?>" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5>USER</h5>
                            <br>
                            <div class="container p-3 my-3 border">
                                Name: <?php echo $post['first_name']; ?> <br>
                                Last Name: <?php echo $post['last_name']; ?><br>
                                Email: <?php echo $post['email']; ?><br>
                                Created at: <?php echo $post['created_at']; ?>
                            </div>
                        </div>
                        <div class="col">
                            <h5>Message</h5>
                            <br>
                            <div class="container p-5 my-3 border">
                            <?php echo $post['message']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div
<?php endforeach; ?>