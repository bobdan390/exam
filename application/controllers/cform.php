<?php
class Cform extends CI_Controller {

	function __construct() 
	 {
	 parent::__construct();
	 $this->load->model('guardar'); 
	 }
	function index()
	{	

		$this->load->view('header');
		$this->load->view('vform');
		$this->load->view('footer');
	}

	 function nueva_empresa()
	 {
	 if(isset($_POST['grabar']) and $_POST['grabar'] == 'si')
	 {

	 	 $nombre = $this->input->post('nombre');
		 $correo = $this->input->post('email');
		 $descrip = $this->input->post('descripcion');
		 $password = $this->input->post('pass');
		 $tip = $this->input->post('tipologia');
		 $pais = $this->input->post('pais');
		 $estado = $this->input->post('estado');
		 $ciudad = $this->input->post('ciudad');

		  $insert = $this->guardar->new_user($nombre,$tip,$pais,$estado,$ciudad,$descrip,$correo,$password);
		  $this ->index();
	 }
		
	 }
}
?>