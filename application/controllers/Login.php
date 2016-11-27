<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Login_model','loggin',TRUE);//carga el mo
		$this->load->helper('url');
		$this->load->helper('form');

	}

	public function index()
	{
		if($this->session->userdata('id_usuario'))
		{
			redirect('home/inicio');
		}
		else
		{
			$data['valido'] = true;
			$this->load->view('log_in',$data);
		}
	}

	public function validar()
	{
		  if($_POST)
			{
		      $datos = $this->loggin->validar($_POST);
		      if(count($datos)>0)
		      {
		        $this->session->set_userdata($datos[0]);
		        redirect('home');
		      }
		      else
		      {
		        $data['valido'] = false;
		        $this->load->view("log_in",$data);
		      }
			}
	 }

	 public function logout()
	 {
		 session_destroy();
		 redirect('login');
	 }
}
?>
