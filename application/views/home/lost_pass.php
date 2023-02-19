<div class="container">
    <h4>Lost Password?<h4>
    <br>
    <h4>Entry your email and we will send you a link to generate your pass again</h4>
    <br>
    <?php echo form_open('home/reset_pass');?>
        <label for="email" name = "email">EMAIL</label><br>
        <input type="email" id="email" name = "email">
        <button type="submit"class="btn btn-primary">Remind Me</button>
</form>

</div>