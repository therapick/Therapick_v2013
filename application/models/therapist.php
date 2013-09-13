<?php

class Therapist extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_therapists() {
    // Consutructing your query
    $this->db->select('therapists.first_name');
    $this->db->from('therapists, addresses');
    $this->db->where('addresses.address_id = therapists.address_id');
    $this->db->limit(10);
    // Running your query and getting results
    $query = $this->db->get();
    $results = $query->result();
    // Print the results array as a string to browser
    print_r($results);
    // Send results back to controller
    return $results;
  }

}