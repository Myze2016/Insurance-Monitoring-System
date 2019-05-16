<div class="container">
  <?php 
    session_destroy();
    ?>
<h2 class="mt-2"> Home </h2>
<label class="mt-2"><?php echo base_url("assets/css/style.css"); ?> </label>
<p class="mt-2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

 

<nav class="navbar mt-2 navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav ">
    <li class="nav-item pr-4">
      <a class="nav-link" href="<?php echo base_url('setup');?>">Set Up Account</a>
    </li>
    <li class="nav-item pr-4">
     
      <a class="nav-link " href="<?php echo base_url('account');?>">Account </a>
    
    </li>
    <li class="nav-item pr-4">
      <div class="nav-link">
      <span class="badge badge-danger d-inline nav-link badge-pill ">!</span>
      <a class=" d-inline pl-1 nav-link" href="<?php echo base_url('user');?>">User</a>
      </div>
    </li>
        <li class="nav-item pr-4">
      <a class="nav-link" href="<?php echo base_url('entry');?>">Data Entry</a>
    </li>
 
  </ul>

</nav>




</div>