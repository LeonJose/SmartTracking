<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route_model extends CI_Model
{
  public $id;
  public $latitud;
  public $longitud;

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function insert_route($data)
  {
    foreach($data as list($a, $b))
    {
        $this->db->insert('direccionesrutas', array('id_ruta' => 1 ,'latitud' => $a, 'longitud' => $b) );
    }//end foreach
  }

  public function searchRoute($id)
  {
      $query = $this->db->select('*')->from('direccionesrutas')->where('id_ruta' ,$id)->get();
      return $query->result();
  }

  public function searchActualLocation($id)
  {
      $query = $this->db->select('*')->from('datosruta')->where('id_ruta',$id)->order_by("id_datosruta", "desc")->limit(1)->get();
      return $query->result();
  }
}