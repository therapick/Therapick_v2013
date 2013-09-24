<?php

class Therapist extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_therapists() {
    $query = $this->db->get('therapists');
    return $query->result();
  }

  function get_therapists_by_last_name($last_name) {
  	$query = $this->db->get_where('therapists', array('last_name' => $last_name));
  	return $query->result();
  }

}