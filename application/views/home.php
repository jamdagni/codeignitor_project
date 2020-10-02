<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="mt-5 p-3" style="width: 50ch;margin:auto;background:wheat">
  <h2 style="text-align:center;background:white">Login</h2>
    <?php echo form_open('home/login_process'); ?>
      <input class="form-control mb-2 no-border" style="border:0;box-shadow:none" id="username" type="text" name="u_name" placeholder="Firstname" value="" required>
      <input class="form-control" type="password" name="password" placeholder="Password" value="" required>
      <div class="form-group offset-md-4 mt-3">
          <input class="btn btn-success" type="submit" name="u_login" value="Log in"></input>
          <a href="<?php echo site_url('home/register')?>" class="btn btn-warning" type="button" name="u_register">Register</a>
      </div>
    <?php echo form_close(); ?>
</div>
