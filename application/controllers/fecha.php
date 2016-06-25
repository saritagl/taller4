<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fecha extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		session_start();
		
        $this->load->model('fecha_model');         
        $this->load->model('reservacion_model');
		date_default_timezone_set('America/Caracas');
	}
    
    public function disponible($index='no')
    {
        /*validación de usuarios y envío de mensaje*/
        $this->form_validation->set_rules('date_ini', 'Fecha', 'callback_es_fecha');

        $viewIndex= $this->input->post('index');
                            
        if($index=='no' && $viewIndex!=0){
            $index=intval($viewIndex);
        }
        $xdata['index'] = $index;
        
        if($this->form_validation->run()== FALSE){
            
            $data['contenido'] = $this->load->view('fecha',$xdata,true);
            $this->load->view('includes/template',$data);
        }else{
            $fecha_ini = $this->input->post('date_ini');
            $fecha_fin = $this->input->post('date_fin');
			$_SESSION["fecha_ini"] = $fecha_ini;
			$_SESSION["fecha_fin"] = $fecha_fin;
			
            $data['hab_disp'] = $this->fecha_model->hab_disponibles($fecha_ini,$fecha_fin);
            $dat['contenido'] = $this->load->view('disponible',$data,true);
            $this->load->view('includes/template',$dat);
        }
    }

	public function es_fecha($fecha_ini)
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
						$this->form_validation->set_message('es_fecha', 'No se puede hacer una reservación de más de 6 meses');
						return FALSE;
					}

				}else{
					$this->form_validation->set_message('es_fecha', 'La Fecha debe ser mayor que la fecha actual');
					return FALSE;
				}
			}else{
				$this->form_validation->set_message('es_fecha', 'La Fecha Inicial debe ser menor que la Fecha Final');
				return FALSE;
			}
		}else{
			$this->form_validation->set_message('es_fecha', 'Debe ingesar alguna fecha');
			return FALSE;
		}
	}

	public function hab_reservadas($index='no')
	{
		$this->form_validation->set_rules('date_ini', 'Fecha', 'callback_es_fecha_ocupadas');
		$this->form_validation->set_message('es_fecha_ocupadas', 'Se necesita ingresar una Fecha válida');
		$viewIndex= $this->input->post('index');
		
		if($index=='no' && $viewIndex!=0){
			$index = intval($viewIndex);
		}
		
		$xdata['index'] = $index;
		
		if($this->form_validation->run()== FALSE)
		{
			$data['contenido'] = $this->load->view('fecha',$xdata,true);
			$this->load->view('includes/template',$data);
		}else{
			$fecha_ini = $this->input->post('date_ini');
			$fecha_fin = $this->input->post('date_fin');
			
			$data['hab_ocup'] = $this->fecha_model->hab_ocupadas($fecha_ini,$fecha_fin);
			
			$dat['contenido'] = $this->load->view('hab_reservadas',$data,true);
			$this->load->view('includes/template',$dat);
		}
	}	
	
	public function es_fecha_ocupadas($fecha_ini)
	{
		$fecha_actual = date('Y-m-d');
		$fecha_fin = $this->input->post('date_fin');

		if($fecha_ini!=NULL && $fecha_fin!=NULL)
		{
			if($fecha_ini<$fecha_fin)
			{			
				$ini = date_create($fecha_ini);
				$fin = date_create($fecha_fin);
				$interval = $ini->diff($fin);
				
				if($interval->format('%a') <= 180){
					return TRUE;
				}else{
					$this->form_validation->set_message('es_fecha', 'No se puede hacer una reservación de más de 6 meses');
					return FALSE;
				}
				
			}else{
				$this->form_validation->set_message('es_fecha', 'La Fecha Inicial debe ser menor que la Fecha Final');
				return FALSE;
			}
		}else{
			$this->form_validation->set_message('es_fecha', 'Debe ingesar alguna fecha');
			return FALSE;
		}
	}
	
	public function pago()
	{
		$hab = array_keys($_POST); // obtiene los nombres de las variables
		$cant = count($_POST);

		$_SESSION["hab"] = $hab;
		$_SESSION["cant"] = $cant;
		
		$data['contenido'] = $this->load->view('pago','',true);
		$this->load->view('includes/template',$data);
	}
	
	public function confirmacion_pago()
	{
		$this->form_validation->set_rules('nombre', '', 'callback_datos_correctos');
		
		if($this->form_validation->run()== FALSE)
		{
			$data['contenido'] = $this->load->view('pago','',true);
			$this->load->view('includes/template',$data);
		}else{
			
			
			$date1 = $_SESSION["fecha_ini"];
			$date2 = $_SESSION["fecha_fin"];
			$hab = $_SESSION["hab"];
			$cant = $_SESSION["cant"];
			
			$nombre = $this->input->post('nombre');
			$apellido = $this->input->post('apellido');
			$correo = $this->input->post('correo');
			$tlf = $this->input->post('tlf');
			$tarj = $this->input->post('tarj');
			$codtarj = $this->input->post('cod-tarj');
			
			for($i=0;$i<$cant;$i++){ 
				$this->reservacion_model->insercion($hab[$i], $nombre, $apellido, $correo, $tlf, $tarj, $codtarj, $date1, $date2);
			}
				
			$data['contenido'] = $this->load->view('confirmacion_pago','',true);
			$this->load->view('includes/template',$data);
		}
	}

	public function datos_correctos($nombre){
		
		$apellido = $this->input->post('apellido');
		$correo = $this->input->post('correo');
		$tlf = $this->input->post('tlf');
		$tarj = $this->input->post('tarj');
		$codtarj = $this->input->post('cod-tarj');
		
		if($nombre!=NULL && $apellido!=NULL && $correo!=NULL && $tlf!=NULL && $tarj!=NULL && $codtarj!=NULL){
			if(is_numeric($tlf)){
				if(is_numeric($tarj)){
					if(is_numeric($codtarj)){
						return TRUE;	
					}else{
						$this->form_validation->set_message('datos_correctos', 'El campo Código de Validación debe ser numérico');	
						return FALSE;
					}
				}else{
					$this->form_validation->set_message('datos_correctos', 'El campo Número de Tarjeta debe ser numérico');	
					return FALSE;
				}
			}else{
				$this->form_validation->set_message('datos_correctos', 'El campo Teléfono debe ser numérico');	
				return FALSE;
			}
		}else{
			$this->form_validation->set_message('datos_correctos', 'Debe llenar todos los campos');	
			return FALSE;
		}
	}
	
	public function eliminar_reserva()
	{
		$dat['reservaciones'] = $this->fecha_model->reservaciones();
		$data['contenido'] = $this->load->view('eliminar_reserva',$dat,true);
		$this->load->view('includes/template',$data);
	}
	
	public function confirmacion_eliminar_reserva()
	{
		$id = $this->input->get('id');

		$data['reserva'] = $this->fecha_model->esta_reserva($id);
		$this->fecha_model->eliminar_reserva($id);
		$dat['contenido'] = $this->load->view('confirmacion_eliminar_reserva',$data,true);
		$this->load->view('includes/template',$dat);
		
	}
}
?>