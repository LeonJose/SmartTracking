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
    if(! $this->post('positions'))
    {
      $this->response(array('status' =>'The object positions are empty'  ), 404);
    }
      $data = $this->post('positions');
      $this->route_model->insert_route($data);
      $this->response($data);
  }
  public function find_get($id)
  {
    if( !$id )
    {
      $this->response(null, 404);
    }
    $route = $this->route_model->searchRoute($id);
    if( !is_null($route))
    {
      $this->response(array('routes' => $route),200);
    }
    else
    {
      $this->response(array('error' => 'No hay rutas'), 404);
    }
  }
}
