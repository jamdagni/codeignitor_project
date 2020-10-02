<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller{


    public function __construct()
    {
      parent::__construct();
      $this->load->model('Employee_job');
    }

  public function index()
  {
    $this->load->view('dash/add_job');
  }

  public function view_jobs()
  {
    $this->load->view('dash/job_list');
  }

  public function add_job()
  {
    if ($this->input->post('add_job')) {
      $name = $this->input->post('name');

      $job_details = array('name' => $name, );

      $this->Employee_job->add_job($job_details);
      redirect('jobs/view_jobs','refresh');
    }
  }

  public function update_job($j_id)
  {
    $this->load->view('dash/update_job',$j_id);
  }

  public function update_job_process($j_id)
  {
    if ($this->input->post('update_job')) {
      $name = $this->input->post('name');

      $job_details = array('name' => $name, );

      $this->db->where('u_id', $j_id);
      $this->db->update('jobs', $job_details);
      redirect('jobs/view_jobs','refresh');
    }
  }

  public function delete_job($j_id)
  {
    $this->db->where('u_id', $j_id);
    $this->db->delete('jobs');
    redirect('jobs/view_jobs','refresh');
  }

}
