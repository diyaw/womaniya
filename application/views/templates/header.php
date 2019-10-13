<html>
   <head>
    <title>ciBlog</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css">


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


    



    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>




  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>


  <div class="collapse navbar-collapse" id="navbarColor01" wfd-id="453">
    <ul class="navbar-nav mr-auto" wfd-id="455">
      <li class="nav-item active" wfd-id="459">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only" wfd-id="460">(current)</span></a>
      </li>
      <li class="nav-item" wfd-id="458">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
      <li class="nav-item" wfd-id="457">
        <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
      </li>
      <li class="nav-item" wfd-id="456">
        <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item active" wfd-id="459"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a></li>
            <li class="nav-item active" wfd-id="459"><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a></li>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            <li class="nav-item active" wfd-id="459"><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
            <li class="nav-item active" wfd-id="459"><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
            <li class="nav-item active" wfd-id="459"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
          <?php endif; ?>
          </ul>

  </div>
</nav>
    <div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>