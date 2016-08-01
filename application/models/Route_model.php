<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route_model extends CI_Model
{
  public $lat;
  public $lon;

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function insert_route($data)
  {
    foreach($data as list($a, $b))
    {
        $this->db->insert('routes', array('lat' => $a, 'lon' => $b) );
    }//end foreach
  }
}
