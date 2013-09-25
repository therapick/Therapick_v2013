<?php
class Search extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Therapist');
  }

  public function index()
  {
    $data = array();
    $data['query_input'] = $this->input->post('city_or_zip');
    $data['therapists'] = $this->Therapist->get_therapists_by_last_name($data['query_input']);
    $this->template->load('default', 'therapists/results', $data);
  }
}