<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gerente extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		session_start();
		
        $this->load->model('fecha_model');
        $this->load->model('gerente_model');
		date_default_timezone_set('America/Caracas');		               
	}
	
	public function disponible()
	{
		$this->form_validation->set_rules('date_ini', 'Fecha', 'callback_es_fecha_disp');
		$this->form_validation->set_message('es_fecha_disp', 'Se necesita ingresar una Fecha válida');
		
		if($this->form_validation->run()== FALSE)
		{
			$data['contenido'] = $this->load->view('fecha_disponible','',true);
			$this->load->view('includes/template',$data);
		}else{
			$fecha_ini = $this->input->post('date_ini');
			$fecha_fin = $this->input->post('date_fin');
			
			$data['hab_disp'] = $this->fecha_model->hab_disponibles($fecha_ini,$fecha_fin);
			
			$dat['contenido'] = $this->load->view('hab_disponibles',$data,true);
			$this->load->view('includes/template',$dat);
		}
	}
	
	public function es_fecha_disp($fecha_ini)
	{
		$fecha_actual = date('Y-m-d');
		$fecha_fin = $this->input->post('date_fin');

		if($fecha_ini!=NULL && $fecha_fin!=NULL)
		{
			if($fecha_ini<$fecha_fin)
			{			
				if($fecha_ini>$fecha_actual)
				{
					$ini = date_create($fecha_ini);
					$fin = date_create($fecha_fin);
					$interval = $ini->diff($fin);
					
					if($interval->format('%a') <= 180){
						return TRUE;
					}else{
						$this->form_validation->set_message('es_fecha_disp', 'No se puede hacer una reservación de más de 6 meses');
						return FALSE;
					}

				}else{
					$this->form_validation->set_message('es_fecha_disp', 'La Fecha debe ser mayor que la fecha actual');
					return FALSE;
				}
			}else{
				$this->form_validation->set_message('es_fecha_disp', 'La Fecha Inicial debe ser menor que la Fecha Final');
				return FALSE;
			}
		}else{
			$this->form_validation->set_message('es_fecha_disp', 'Debe ingesar alguna fecha');
			return FALSE;
		}
	}
	
	public function detalle_hab()
	{
		$data['detalle_hab'] = $this->gerente_model->detalle_hab();
		$dat['contenido'] = $this->load->view('estatus_hab',$data,true);
		$this->load->view('includes/template',$dat);
	}
	
	
}
?>