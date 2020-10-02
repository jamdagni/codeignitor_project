<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!$_SESSION['u_name']) {
  redirect('home','refresh');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <title>Hello, world!</title>
  </head>
<body>

  <?php $this->load->view('dash/inc/nav'); ?>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3">
        <?php $this->load->view('dash/inc/sidebar'); ?>
      </div>
      <div class="col-md-9">
        <div class="list-group">
          <a class="list-group-item list-group-item-action list-group-item-dark" href="#">Add Employee</a>
          <div class="container">
            <?php echo form_open('employees/add_employee_process'); ?>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="e_name" placeholder="Employee Name">
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="e_email" placeholder="Employee Email">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="e_phone" placeholder="Contact Number">
              </div>
              <div class="form-group mt-3">
                <select class="form-control" name="e_job">
                  <option value="-">-</option>
                  <?php
                    $job_list = $this->db->get('jobs');
                    foreach ($job_list->result() as $job) {
                      ?>
                        <option value="<?php echo $job->name?>"><?php echo $job->name?></option>
                      <?php
                    }
                   ?>
                </select>
              </div>
              <input class="btn btn-success offset-md-5" type="submit" name="add_employee" value="Add Employee">
            <?php form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
