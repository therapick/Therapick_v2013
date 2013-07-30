<?php

class Therapist extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_therapists() {
    $query = $this->db->get('therapists');
    return $query->result();
  }

}