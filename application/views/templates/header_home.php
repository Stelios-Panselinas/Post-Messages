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
      <a class="nav-link" href="login">User</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>home/login_admin">Admin</a>
    </li>
  </ul>
</nav>

<br>
<div class = "container">
  <?php if($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class = "alert alert-danger">'.$this->session->flashdata('login_failed').'</p>' ?>
        <?php endif; ?>

</div>
<div class = "container">
  <?php if($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class = "alert alert-danger">'.$this->session->flashdata('user_loggedout').'</p>' ?>
        <?php endif; ?>

</div>