<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fecha_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function hab_disponibles($fecha_ini, $fecha_fin){
		$consulta = "SELECT h.nro_hab, h.tipo_hab
					 FROM detalle_habitacion as h
					 WHERE h.estatus='habilitada'and NOT EXISTS
					 (SELECT r.nro_hab FROM reservacion as r WHERE 
					 (h.nro_hab=r.nro_hab) and
					 ((fecha_ini>='$fecha_ini' and fecha_fin>='$fecha_fin' and fecha_ini<='$fecha_fin') or
				   	 (fecha_ini<='$fecha_ini' and fecha_fin<='$fecha_fin' and fecha_fin>='$fecha_ini') or
					 (fecha_ini<='$fecha_ini' and fecha_fin>='$fecha_fin') or
					 (fecha_ini>='$fecha_ini' and fecha_fin<='$fecha_fin')))";
		
		$query = $this->db->query($consulta);
		return $query->result();
	}
	
	function hab_ocupadas($fecha_ini, $fecha_fin){
		$consulta = "SELECT tipo_hab, r.nro_hab, nombre, apellido, correo, tlf, fecha_ini, fecha_fin
					 FROM reservacion as r, detalle_habitacion as h 
					 WHERE
					 r.nro_hab=h.nro_hab and 
					 ((fecha_ini>='$fecha_ini' and fecha_fin>='$fecha_fin' and fecha_ini<='$fecha_fin') or
				   	 (fecha_ini<='$fecha_ini' and fecha_fin<='$fecha_fin' and fecha_fin>='$fecha_ini') or
					 (fecha_ini<='$fecha_ini' and fecha_fin>='$fecha_fin') or
					 (fecha_ini>='$fecha_ini' and fecha_fin<='$fecha_fin'))";
		$query = $this->db->query($consulta);
		return $query->result();
	}
	
	function reservaciones()
	{
		$consulta = "SELECT h.tipo_hab, r.nro_hab, id, nombre, apellido, correo, tlf, fecha_ini, fecha_fin
					 FROM reservacion as r, detalle_habitacion as h 
					 WHERE r.nro_hab=h.nro_hab
					 ORDER BY nombre, apellido";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	function esta_reserva($id)
	{
		$consulta = "SELECT * FROM reservacion WHERE id=$id";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	function eliminar_reserva($id){
		
		$delete = "DELETE FROM reservacion WHERE id=$id";
		$this->db->query($delete);
	}
	
	function datos_hab()
	{
		$consulta = "SELECT * FROM tipo_habitacion";
		$query = $this->db->query($consulta);
		return $query->result();
	}
}
?>