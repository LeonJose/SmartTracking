<?php
	//use files
	require_once('connection.php');
	require_once('exceptions.php');
	
	class DireccionesRuta extends Connection
	{
		//attributes
		private $id;
		private $ruta;
		private $latitud;
		private $longitud;
		private $resultsArray;
		
		//methods
		public function get_id() { return $this->id; }
		public function set_id($value) { $this->id = $value; }
		public function get_ruta() { return $this->ruta; }
		public function set_ruta($value) { $this->ruta = $value; }
		public function get_latitud() {return $this->latitud; }
		public function set_latitud($value) { $this->latitud = $value; }
		public function get_longitud() { return $this->longitud; }
		public function set_longitud($value) { $this->longitud = $value; }
		
		//constructor
		function __construct()
		{
			//if no arguments received, create empty object
			if(func_num_args() == 0) 
			{
				$this->id = 0;
				$this->ruta = 0;
				$this->latitud = '';
				$this->longitud = '';
			}
		}

		public function getRutas($idRuta)
		{
				$idruta = $idRuta;
				//open connection to MySql
				parent::open_connection();
				//query
				$query = "select id_direcciones_ruta, latitud, longitud from DatosRuta where id_ruta = ?";
				//prepare command
				$command = parent::$connection->prepare($query);
				//link parameters
				$command->bind_param('i', $idruta);
				//execute command
				$command->execute();
				//link results to class attributes
				$command->bind_result($id, $latitud, $longitud);

				while($command->fetch()){
			        $resultsArray[] = array('id_direcciones_ruta'=>$id,'id_ruta'=>$idruta, 'latitud' => $latitud, 'longitud' => $longitud);
			    }
				//close command
				mysqli_stmt_close($command);
				//close connection
				parent::close_connection();

				return $resultsArray;
			}
		}

	}
?>

