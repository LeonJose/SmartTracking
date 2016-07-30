<?php
	//use files
	require_once('connection.php');
	require_once('exceptions.php');
	
	class DatosRuta extends Connection
	{
		//attributes
		private $id;
		private $ruta;
		private $fecha;
		private $temperatura;
		private $alerta;
		private $latitud;
		private $longitud;
		
		//methods
		public function get_id() { return $this->id; }
		public function set_id($value) { $this->id = $value; }
		public function get_ruta() { return $this->ruta; }
		public function set_ruta($value) { $this->ruta = $value; }
		public function get_fecha() { return $this->fecha; }
		public function set_fecha($value) { $this->fecha = $value; }
		public function get_temperatura() { return $this->temperatura; }
		public function set_temperatura($value) { $this->temperatura = $value; }
		public function get_alerta() { return $this->alerta; }
		public function set_alerta($value) { $this->alerta = $value; }
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
				$this->fecha = new DateTime();
				$this->temperatura = 0.0;
				$this->alerta = false;
				$this->latitud = '';
				$this->longitud = '';
			}
			//if one argument received create object with data
			if(func_num_args() == 1)
			{
				//receive arguments into an array
				$args = func_get_args();
				//id
				$idruta = $args[0];
				//open connection to MySql
				parent::open_connection();
				//query
				$query = "select id_datos_ruta, fecha, temperatura, alerta, latitud, longitud from DatosRuta where id_ruta = ?";
				//prepare command
				$command = parent::$connection->prepare($query);
				//link parameters
				$command->bind_param('i', $idruta);
				//execute command
				$command->execute();
				//link results to class attributes
				$command->bind_result($this->id, $this->fecha, $this->temperatura, $this->alerta, $this->latitud, $this->longitud);

				$this->ruta = $idruta;
				//fetch data
				$found = $command->fetch();
				//close command
				mysqli_stmt_close($command);
				//close connection
				parent::close_connection();
				//if not found throw exception
				if(!$found) throw(new RecordNotFoundException());	
			}
		}

	}
?>

