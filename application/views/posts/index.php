<br>
<?php foreach($posts as $post) : ?>
    <div class="container">
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapse<?php echo $post['id'];?>">
                        <h5>Messege ID: <?php echo $post['id']; ?></h5>
                    </a>
                </div>
                <div id="collapse<?php echo $post['id'];?>" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <?php echo $post['message']; ?>
                </div>
            </div>
        </div>
    </div
<?php endforeach; ?>