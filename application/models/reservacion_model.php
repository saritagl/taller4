<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reservacion_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function insercion($hab, $nombre, $apellido, $correo, $tlf, $nro_tarj, $cod_val, $fecha_ini, $fecha_fin){
		
		$insert="INSERT INTO reservacion (nro_hab, nombre, apellido, correo, tlf, nro_tarj, codigo_tarj, fecha_ini, fecha_fin)
				 VALUES ($hab, '$nombre', '$apellido', '$correo', '$tlf', $nro_tarj, $cod_val, '$fecha_ini', '$fecha_fin')";
 		
		$this->db->query($insert);
	}

}
?>