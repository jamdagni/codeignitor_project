<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!$_SESSION['u_name']) {
  redirect('home','refresh');
}

$id = $this->uri->segment(3);
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
        <table class="table table bordered">
          <?php
            $employee_details = $this->db->get_where('employees', array('e_id' => $id));
            foreach ($employee_details->result() as $emp) {
              ?>
                <tr>
                  <th>ID</th>
                  <td><?php echo $emp->e_id;?></td>
                </tr>
                <tr>
                  <th>DATE</th>
                  <td><?php echo $emp->e_date;?></td>
                </tr>
                <tr>
                  <th>NAME</th>
                  <td><?php echo $emp->e_name;?></td>
                </tr>
                <tr>
                  <th>EMAIL</th>
                  <td><?php echo $emp->e_email;?></td>
                </tr>
                <tr>
                  <th>PHONE</th>
                  <td><?php echo $emp->e_phone;?></td>
                </tr>
                <tr>
                  <th>JOB</th>
                  <td><?php echo $emp->e_job;?></td>
                </tr>
                <tr>
                  <td>
                    <a href="<?php echo site_url();?>employees/update_employee/<?php echo $emp->e_id;?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo site_url();?>employees/delete_employee/<?php echo $emp->e_id;?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>
              <?php
            }
           ?>
        </table>
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
