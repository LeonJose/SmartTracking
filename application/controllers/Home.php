<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('array');
		if(!$this->session->userdata('id_usuario'))
		{
			redirect('login');
		}
	}

	public function index()
	{
			redirect('home/inicio');
	}


	public function inicio()
	{
		$this->load->view('main2');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	public function saveItem()
	{
		//$this->load->helper('form');
	 //$data= array('address' => $this->input->post('direccionRest'), 'position' => $this->input->post('positions') );
	 //$data = array('name '  => $_POST['name']);
	print_r($_POST);
	}


}
