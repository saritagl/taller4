<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	
	function selec_usuarios(){	
		$consulta = "SELECT * FROM usuario";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	function selec_hab(){	
		$consulta = "SELECT * FROM detalle_habitacion";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	function este_usuario($id){	
		$consulta = "SELECT * FROM usuario WHERE id=$id";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	function esta_hab($nro_hab){	
		$consulta = "SELECT * FROM detalle_habitacion WHERE nro_hab=$nro_hab";
		$query = $this->db->query($consulta);
		return $query->result();
	}

	function insertar_usuario($tipo_user,$nombre,$apellido,$clave,$usuario){
		
		$insert = "INSERT INTO usuario (tipo, nombre, apellido, clave, usuario) 
					VALUES ('$tipo_user','$nombre','$apellido','$clave','$usuario')";
 		
		$this->db->query($insert);
	}

	function insertar_hab($tipo,$estado){
		
		$insert = "INSERT INTO detalle_habitacion (tipo_hab, estatus) 
					VALUES ('$tipo','$estado')";
 		
		$this->db->query($insert);
	}

	function editar_usuario($id,$tipo_user,$nombre,$apellido,$clave,$usuario){
		
		$edit = "UPDATE usuario 
					SET tipo='$tipo_user', nombre='$nombre', apellido='$apellido', clave='$clave', usuario='$usuario'
					WHERE id=$id";
 		
		$this->db->query($edit);
	}

	function editar_hab($nro_hab,$tipo,$estado){
		
		$edit = "UPDATE detalle_habitacion 
					SET tipo_hab='$tipo', estatus='$estado'
					WHERE nro_hab=$nro_hab";
 		
		$this->db->query($edit);
	}

	function eliminar_usuario($id){
		
		$delete = "DELETE FROM usuario WHERE id=$id";
 		
		$this->db->query($delete);
	}

	function eliminar_hab($nro_hab){
		
		$delete = "DELETE FROM detalle_habitacion WHERE nro_hab=$nro_hab";
 		
		$this->db->query($delete);
	}
	
	function hab_reservadas($fecha_actual)
	{
		$consulta = "SELECT DISTINCT nro_hab FROM reservacion WHERE (fecha_fin > '$fecha_actual')";
		$query = $this->db->query($consulta);
		return $query->result();
	}
}
?>