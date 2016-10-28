<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('array');

	}
	public function agregar()
	{
		$this->load->view('agregar');
		$this->load->view('footer');
	}
}
?>