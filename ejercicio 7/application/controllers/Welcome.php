<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('estudiante');

	}
	public function index() {
	    $query = $this->db->query('SELECT * FROM estudiante');
	    $data['estudiante'] = $query->result(); // Obtener resultados
	    $this->load->view('actualizar', $data); // Cargar la vista
	}
	public function agregar(){
		$estudi['apellidos'] = $this->input->post('ape');
		$estudi['nombres'] = $this->input->post('nombre');
		$estudi['ci'] = $this->input->post('ci');
		$estudi['depto'] = $this->input->post('departamento');
		$estudi['nota'] = rand(51,100);
		$estudi['fecha_nac'] = $this->input->post('fec_nac');
		$estudi['genero'] = $this->input->post('sexo');
		$estudi['usuario'] = "user";
		$estudi['contrasena'] = "1234";

		
		$this->estudiante->agregar($estudi);
		redirect('welcome');

	}
	public function eliminar($id_persona){
		echo "entro";
		$this->estudiante->eliminar($id_persona);
		redirect('welcome');
	}

	public function actualizar($id_persona){
		$estudi['apellidos'] = $this->input->post('ape');
		$estudi['nombres'] = $this->input->post('nombre');
		$estudi['ci'] = $this->input->post('ci');
		$estudi['depto'] = $this->input->post('departamento');
		$estudi['nota'] = rand(51,100);
		$estudi['fecha_nac'] = $this->input->post('fec_nac');
		$estudi['genero'] = $this->input->post('sexo');
		$estudi['usuario'] = "user";
		$estudi['contrasena'] = "1234";

	    $this->estudiante->modificar($estudi, $id_persona);
		redirect('welcome');
	}
	public function editar(){

	}
}

