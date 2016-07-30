<?php
	class RecordNotFoundException extends Exception
	{
		//attributes
		private $message = 'Record not found';
		
		//propiedades
		public function get_message() { return $this->message; }
	}
?>

