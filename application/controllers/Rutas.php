<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rutas extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('array');
	}

  public function generarRuta()
  {
    $this->load->view('main');
    $this->load->view('guardarRuta');
    $this->load->view('footer');
  }
}
