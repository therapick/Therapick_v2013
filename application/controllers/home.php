<?php
class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array();
    $data['var1'] = 'Blah';
    $this->template->load('default', 'home/index', $data);
  }
}