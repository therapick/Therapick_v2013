<?php
class Hello extends CI_Controller {

  function __construct()
  {
    parent::__construct();

    $this->load->model('Therapist');
  }

  public function index()
  {
    $data['other_message'] = 'Another Message!';

    $data['therapists'] = $this->Therapist->get_therapists();

    //print_r($data['therapists']);

    $this->load->view('hello/index', $data);
  }
}