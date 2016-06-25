<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gerente_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function detalle_hab()
	{
		$consulta = "SELECT * FROM detalle_habitacion";
		$query = $this->db->query($consulta);
		/*pre($query->result());*/
		return $query->result();	
	}
}

?>