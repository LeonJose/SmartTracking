<?php
class Login_model  extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}
	/*Funcion para insertar un usuario*/

	public function insertar($datos)
	{
	
		return $this->db->insert('usuarios', $datos);
	}

	public function validar($datos)
	{
		$instruccion= 'select id_usuario, correo from usuarios where correo = "'.$datos['emailinput'].'" and contrasena ="'.$datos['passwordinput'].'";';
		$query = $this->db->query($instruccion);

		return $query->result();
	}
}
?>