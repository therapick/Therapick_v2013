<?php
class carousel extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array();
    $data['var1'] = 'Blah';
    $this->template->load('default', 'carousel/carousel-test', $data);
  }
}