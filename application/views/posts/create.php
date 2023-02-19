<h2><?= $title; ?></h2>
<?php echo validation_errors();?>
<div class="conteiner p-5">
                <?php echo form_open('posts/create'); ?>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" rows="8" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
        </div>
    
</div>