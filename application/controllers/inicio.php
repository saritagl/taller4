<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();    
	}
	
	public function index()
	{
		$this->load->library('form_validation');
		
	}
	
	public function fecha(){
		$data['contenido'] = $this->load->view('fecha','',true);
		$this->load->view('includes/template',$data);
	}
	
	public function hab_reservadas(){
		$data['contenido'] = $this->load->view('hab_reservadas','',true);
		$this->load->view('includes/template',$data);
	}
}
