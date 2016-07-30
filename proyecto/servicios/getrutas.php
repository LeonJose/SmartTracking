<?php
header('Access-Control-Allow-Origin: *');
require_once('../clases/direccionesruta.php');

	if(isset($_GET['ruta']) )
	{
		$ruta = new DireccionesRuta();
		$rutas = $ruta->getRutas($_GET['ruta']);

		echo json_encode($rutas); die();
	}
		

?>