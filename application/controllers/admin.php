<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();  
		$this->load->model('admin_model');
		date_default_timezone_set('America/Caracas');
		session_start();
	}
	
	public function index()
	{
		$this->load->library('form_validation');
		
	}
	
	public function insertar(){
		$data['contenido'] = $this->load->view('insertar_usuario','',true);
		$this->load->view('includes/template',$data);
	}

	public function insertar_hab(){
		$data['contenido'] = $this->load->view('insertar_hab','',true);
		$this->load->view('includes/template',$data);
	}

	public function editar(){
		$id = $this->input->get('id');
		
		$data['usuario'] = $this->admin_model->este_usuario($id);
		$dat['contenido'] = $this->load->view('editar_usuario',$data,true);
		$this->load->view('includes/template',$dat);
	}

	public function editar_hab(){
		$nro_hab = $this->input->get('nro');

		$data['hab'] = $this->admin_model->esta_hab($nro_hab);
		$dat['contenido'] = $this->load->view('editar_hab',$data,true);
		$this->load->view('includes/template',$dat);
	}
	
	public function editar_tipo_hab(){
		$tipo_hab = $this->input->get('tipo');
		
		$data['hab'] = $this->admin_model->este_tipo_hab($tipo_hab);
		$dat['contenido'] = $this->load->view('editar_tipo_hab',$data,true);
		$this->load->view('includes/template',$dat);
	}
	
	public function habitaciones()
	{
		$fecha_actual = date('Y-m-d');
		$xdata['habitaciones'] = $this->admin_model->selec_hab();
		$xdata['hab_reservadas'] = $this->admin_model->hab_reservadas($fecha_actual);
		$data['contenido'] = $this->load->view('hab_admin',$xdata,true);
		$this->load->view('includes/template',$data);
	}
	
	/*Impresión de los datos luego de llenar los formularios*/
	public function confirmacion_editar(){
		
		$this->form_validation->set_rules('nombre', '', 'callback_validacion_editar');
	
		$id = $this->input->post('id');
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$usuario = $this->input->post('user');
		$clave = $this->input->post('psw');
		$tipo_user = $this->input->post('tipo_user');
		
		if($this->form_validation->run()== FALSE){
			$dat['usuario'] = $this->admin_model->este_usuario($id);
			$data['contenido'] = $this->load->view('editar_usuario',$dat,true);
			$this->load->view('includes/template',$data);
					
		}else{
			$this->admin_model->editar_usuario($id,$tipo_user,$nombre,$apellido,$clave,$usuario);
			$data['contenido'] = $this->load->view('confirmacion_editar','',true);
			$this->load->view('includes/template',$data);
		}
	}
	
	public function confirmacion_editar_hab(){
		$this->form_validation->set_rules('tipo_hab', '', 'callback_validacion_habitacion');
		
		$nro_hab = $this->input->post('nro_hab');
		$tipo = $this->input->post('tipo_hab');
		$estado= $this->input->post('estado');
		$_SESSION['nro_hab']=$nro_hab; 
		if($this->form_validation->run()== FALSE){
			$data['hab'] = $this->admin_model->esta_hab($nro_hab);
			$dat['contenido'] = $this->load->view('editar_hab',$data,true);
			$this->load->view('includes/template',$dat);
		}else{
			$this->admin_model->editar_hab($nro_hab,$tipo,$estado);
			$data['contenido'] = $this->load->view('confirmacion_editar_tipo_hab','',true);
			$this->load->view('includes/template',$data);
		}
	}
	
	public function confirmacion_editar_tipo_hab(){
		$this->form_validation->set_rules('tipo_hab', '', 'callback_validacion_tipo_habitacion');
		
		$tipo = $this->input->post('tipo_hab');
		$costo = $this->input->post('costo');
		$info = $this->input->post('info');

		if($this->form_validation->run()== FALSE){
			$data['hab'] = $this->admin_model->este_tipo_hab($tipo);
			$dat['contenido'] = $this->load->view('editar_tipo_hab',$data,true);
			$this->load->view('includes/template',$dat);
		}else{
			$this->admin_model->editar_tipo_hab($tipo,$costo,$info);
			$data['contenido'] = $this->load->view('confirmacion_editar_tipo_hab','',true);
			$this->load->view('includes/template',$data);
		}
	}
	
	public function confirmacion_insertar(){
		$this->form_validation->set_rules('nombre', '', 'callback_validacion_datos');
	
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$usuario = $this->input->post('user');
		$clave = $this->input->post('psw');
		$tipo_user = $this->input->post('tipo_user');
		
		if($this->form_validation->run()== FALSE){
			$data['contenido'] = $this->load->view('insertar_usuario','',true);
			$this->load->view('includes/template',$data);
		}else{
			$this->admin_model->insertar_usuario($tipo_user,$nombre,$apellido,$clave,$usuario);
			$data['contenido'] = $this->load->view('confirmacion_insertar','',true);
			$this->load->view('includes/template',$data);
		}
	}

	public function confirmacion_insertar_hab(){
		$this->form_validation->set_rules('tipo_hab', '', 'callback_validacion_habitacion');
		
		$tipo = $this->input->post('tipo_hab');
		$estado = $this->input->post('estado');
		
		if($this->form_validation->run()== FALSE){
			$data['contenido'] = $this->load->view('insertar_hab','',true);
			$this->load->view('includes/template',$data);
		}else{
			$this->admin_model->insertar_hab($tipo,$estado);
			$data['contenido'] = $this->load->view('confirmacion_insertar_hab','',true);
			$this->load->view('includes/template',$data);
		}
	}

	public function confirmacion_eliminar(){
		$id = $this->input->get('id');

		$data['usuario'] = $this->admin_model->este_usuario($id);
		$this->admin_model->eliminar_usuario($id);
		$dat['contenido'] = $this->load->view('confirmacion_eliminar',$data,true);
		$this->load->view('includes/template',$dat);
	}

	public function confirmacion_eliminar_hab(){
		$nro_hab = $this->input->get('nro');

		$data['hab'] = $this->admin_model->esta_hab($nro_hab);
		$this->admin_model->eliminar_hab($nro_hab);
		$dat['contenido'] = $this->load->view('confirmacion_eliminar_hab',$data,true);
		$this->load->view('includes/template',$dat);
	}
	
	/*Validación de los datos de los formularios*/
		//Vista editar
		public function validacion_editar($nombre)
	{
		$apellido = $this->input->post('apellido');
		$usuario = $this->input->post('user');
		$clave = $this->input->post('psw');
		$tipo_user = $this->input->post('tipo_user');
		
		if ($nombre!=NULL && $apellido!=NULL && $usuario!=NULL && $clave!=NULL && $tipo_user!=NULL) {
				return TRUE;
		}else{
			$this->form_validation->set_message('validacion_editar', 'Debe llenar todos los campos');
			return FALSE;
		}
	}
		//Vista insertar
	public function validacion_datos($nombre)
	{
		$apellido = $this->input->post('apellido');
		$usuario = $this->input->post('user');
		$clave = $this->input->post('psw');
		$tipo_user = $this->input->post('tipo_user');
		
		if ($nombre!=NULL && $apellido!=NULL && $usuario!=NULL && $clave!=NULL && $tipo_user!=NULL) {
			$result = $this->admin_model->existe_usuario($usuario);
			if($result == 'TRUE'){
				return TRUE;
			}else{
				$this->form_validation->set_message('validacion_datos', 'Este Usuario ya existe, por favor intente de nuevo');
				return FALSE;
			}
		}else{
			$this->form_validation->set_message('validacion_datos', 'Debe llenar todos los campos');
			return FALSE;
		}
	}
	
	//Vista insertar_hab y editar_hab
	public function validacion_habitacion($tipo_hab)
	{
		$estado = $this->input->post('estado');
		if(($tipo_hab!=NULL && $estado!=NULL)){
			return TRUE;
		}else{
			$this->form_validation->set_message('validacion_habitacion', 'Debe llenar todos los campos');
			return FALSE;
		}
	}
	
	public function validacion_tipo_habitacion($tipo)
	{
		$costo = $this->input->post('costo');
		$info = $this->input->post('info');

		if(($costo!=NULL && $info!=NULL)){
			if(is_numeric($costo)){
				return TRUE;
			}else{
				$this->form_validation->set_message('validacion_tipo_habitacion', 'El campo Costo debe ser numérico');
				return FALSE;	
			}
		}else{
			$this->form_validation->set_message('validacion_tipo_habitacion', 'Debe llenar todos los campos');
			return FALSE;
		}
	}
}
