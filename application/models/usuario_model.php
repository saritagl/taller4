<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
    
	function validar_usuario($usuario, $clave)
	{
		$consulta = "SELECT * FROM usuario WHERE usuario ='$usuario' and clave ='$clave'";
		$query = $this->db->query($consulta);
		
		if($query->num_rows()>0){
			return 'TRUE';
			//return $query->row();
		}else{
			return 'FALSE';
		}
	}
	
	function tipo_usuario($usuario)
	{
		$consulta = "SELECT tipo FROM usuario WHERE usuario ='$usuario'";
		$query = $this->db->query($consulta);
		return $query->row();
	}
}
?>