<div class="container">
    <div class="row">
        <div class="col lg-4 col-lg-4-offset-4">
            <h3 class="text-center">User's Message</h3>
            <?php foreach($messages as $message) : ?>
                <div class="container">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse<?php echo $message['id'];?>">
                                    <h5>Messege ID: <?php echo $message['id']; ?></h5><small>Created at: <?php echo $message['created_at']; ?> </small>
                                </a>
                            </div>
                            <div id="collapse<?php echo $message['id'];?>" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row">
                            
                                        <div class="col">
                                            <h5>Message</h5>
                                            <br>
                                            <div class="container p-5 my-3 border">
                                                <?php echo $message['message']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>