<html>
        <head>
                <title><?php echo $title; ?></title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
        <div class="conteiner-lg">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>pages/admin/myProfile_admin">My Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>users/view/customers">Customers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>posts/all_posts">All Messege History</a>
    </li>
    <li class="nav-item">
    <li class = "nav-item"><a class = "nav-link" href="<?php echo base_url() ?>home/logout">LogOut</a></li>
    </li>
  </ul>
</nav>

<div class = "container">
  <?php if($this->session->flashdata('admin_loggedin')): ?>
    <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('admin_loggedin').'</p>' ?>
        <?php endif; ?>

</div>