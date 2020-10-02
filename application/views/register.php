<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="mt-5 p-3" style="width: 50ch;margin:auto;background:wheat">
  <h2 style="text-align:center;background:white">Register</h2>
    <?php echo form_open('home/register_process'); ?>
      <input class="form-control mb-2 no-border" style="border:0;box-shadow:none" type="email" name="u_email" placeholder="Email" value="" required>
      <input class="form-control mb-2 no-border" style="border:0;box-shadow:none" type="text" name="u_name" placeholder="Username" value="" required>
      <input class="form-control" type="password" name="password" placeholder="Password" value="" required>
      <div class="form-group offset-md-4 mt-3">
          <input class="btn btn-success" type="submit" name="u_register" value="Register"></input>
          <a href="<?php echo site_url('home')?>" class="btn btn-warning" type="button" name="u_login">Log in</a>
      </div>
    <?php echo form_close(); ?>
</div>
