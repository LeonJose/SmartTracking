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
		$this->load->view('log_in');
	}

	public function agregar()
	{
		$this->load->view('agregar',$data);
		$this->load->view('footer');
	}
	public function insertar()
	{ /*die();*/
		if (!empty($_POST['txtemail']) && !empty($_POST['txtpassword']) && !empty($_POST['txtnombre']) && !empty($_POST['txtapellidos']))
		{
			$datos = array(
				"correo" => $_POST['txtemail'],
				"contrasena" => $_POST['txtpassword'],
				"nombre" => $_POST['txtnombre'],
				"apellido" => $_POST['txtapellidos']
				);
			$this->loggin->insertar($datos);

		}
	}

	public function validar()
	{
	   if($_POST)
		  {
	      $datos = $this->loggin->validar($_POST);
	      if(count($datos)>0)
	      {
	        $valido = true;
	        $this->session->set_userdata($datos);
	        redirect('usuario/agregar');
	      }
	      else
	      {
	        $data['valido'] = false;
	        $this->load->view("log_in",$data);
	      }
		}
	 }
}
?>
