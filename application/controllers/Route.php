<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Route extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('route_model');
  }

  public function index_get()
  {

  }

  public function index_post()
  {
      $data = $this->post('positions');
      $this->route_model->insert_route($data);
      $this->response($data);
  }
  public function index_find($id)
  {

  }
}
