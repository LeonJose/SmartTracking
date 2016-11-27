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
		$this->db->select('id_usuario, correo, nombre, apellido');
		$this->db->from('usuarios');
		$this->db->where('correo',$datos['correo']);
		$this->db->where('contrasena',md5($datos['contrasena']));
		$query= $this->db->get()->result_array();
		return $query;
		$query->free_result();
	}
}
?>
