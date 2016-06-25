<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();  
		$this->load->model('admin_model');
		date_default_timezone_set('America/Caracas');
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

	public function confirmacion_editar(){
		$id = $this->input->post('id');
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$usuario = $this->input->post('user');
		$clave = $this->input->post('psw');
		$tipo_user = $this->input->post('tipo_user');

		$this->admin_model->editar_usuario($id,$tipo_user,$nombre,$apellido,$clave,$usuario);
		$data['contenido'] = $this->load->view('confirmacion_editar','',true);
		$this->load->view('includes/template',$data);
	}

	public function confirmacion_editar_hab(){
		$nro_hab = $this->input->post('nro_hab');
		$tipo = $this->input->post('tipo_hab');
		$estado= $this->input->post('estado');
	

		$this->admin_model->editar_hab($nro_hab,$tipo,$estado);
		$data['contenido'] = $this->load->view('confirmacion_editar_hab','',true);
		$this->load->view('includes/template',$data);
	}

	public function confirmacion_insertar(){
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$usuario = $this->input->post('user');
		$clave = $this->input->post('psw');
		$tipo_user = $this->input->post('tipo_user');

		$this->admin_model->insertar_usuario($tipo_user,$nombre,$apellido,$clave,$usuario);
		$data['contenido'] = $this->load->view('confirmacion_insertar','',true);
		$this->load->view('includes/template',$data);
	}

	public function confirmacion_insertar_hab(){
		$tipo = $this->input->post('tipo_hab');
		$estado = $this->input->post('estado');

		$this->admin_model->insertar_hab($tipo,$estado);
		$data['contenido'] = $this->load->view('confirmacion_insertar_hab','',true);
		$this->load->view('includes/template',$data);
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

	public function habitaciones()
	{
		$fecha_actual = date('Y-m-d');
		$xdata['habitaciones'] = $this->admin_model->selec_hab();
		$xdata['hab_reservadas'] = $this->admin_model->hab_reservadas($fecha_actual);
		$data['contenido'] = $this->load->view('hab_admin',$xdata,true);
		$this->load->view('includes/template',$data);
	}

	/*public function prueba()
	{
		 $time = time();
	echo date("d-m-Y (H:i:s)", $time);
		$fecha_actual = date('Y-m-d');
		
		$a = $this->admin_model->hab_reservadas($fecha_actual);
	}*/
}
