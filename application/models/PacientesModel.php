<?php  
	class paciente extends CI_model
	{
		
		function __construct(argument)
		{
			$this->load->database();
		}

		public function registro($id, $nombre, $apellido, $edad, $peso, $altura, $temperatura, $tension_arterial, $pulso, $frecuencia_res, $sintomas)
		{
			$this->db->insert("paciente", );
		}

	}
?>