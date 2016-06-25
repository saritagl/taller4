<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
		
	function __construct()
	{
		parent::__construct();     
    	$this->load->model('usuario_model');
    	$this->load->model('admin_model');
	}
	
	public function index()
	{
			
		/*validación de usuarios y envío de mensaje*/
		$this->form_validation->set_rules('user', 'Usuario', 'callback_es_usuario');
		$this->form_validation->set_message('es_usuario', 'Se necesita ingresar un Usuario o Contraseña válido');
	
		/*Si es un usuario invalido sigue en la vista "login", 
		 *sino pasa a la vista "inicio"*/
		if($this->form_validation->run()== FALSE){
			$data['contenido'] = $this->load->view('login','',true);
			$this->load->view('includes/template',$data);
					
		}else{
			$user = $this->input->post('user');
			$type = $this->usuario_model->tipo_usuario($user);
			//pre($type);		
			
			foreach ($type as $a) {
				if($a == "administrador"){
					/*$data['contenido'] = $this->load->view('inicio_admin','',true);
					$this->load->view('includes/template',$data);*/
					redirect(base_url().'login/inicio_admin');
				}elseif($a == "gerente"){
					redirect(base_url().'login/inicio_gerente');
				}else{
					/*$data['contenido'] = $this->load->view('inicio','',true);
					$this->load->view('includes/template',$data);*/
					redirect(base_url().'login/inicio');			
				}
			 }		
		}
	}
	

	public function inicio(){
		$data['contenido'] = $this->load->view('inicio','',true);
		$this->load->view('includes/template',$data);
	}
	
	public function es_usuario($user)
	{
		$pwd = $this->input->post('password');
		$result_bd=$this->usuario_model->validar_usuario($user,$pwd);
		if($result_bd == 'FALSE'){
			return FALSE;
		}else{
			return TRUE;
		}
	}

	public function inicio_admin()
	{
		$xdata['usuarios'] = $this->admin_model->selec_usuarios();
		$data['contenido'] = $this->load->view('inicio_admin',$xdata,true);
		$this->load->view('includes/template',$data);
	}
	
	public function inicio_gerente()
	{
		$xdata['usuarios'] = $this->admin_model->selec_usuarios();
		$data['contenido'] = $this->load->view('inicio_gerente',$xdata,true);
		$this->load->view('includes/template',$data);
	}
}
?>