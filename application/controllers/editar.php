<?php
class Editar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('consulta');

    }

    public function edit($item)
    {
        
        $this->load->view('header');
        $data["s"] = $item;
        $data["user_entrys"] = $this->consulta->edit($item);
        //var_dump($data);
        $this->load->view('edicion',$data);
        $this->load->view('footer');
    }


function editar_empresa()
 {
 if(isset($_POST['editar']) and $_POST['editar'] == 'si')
 {


     $nombre = $this->input->post('nombre');
     $correo = $this->input->post('email');
     $descrip = $this->input->post('descripcion');
     $password = $this->input->post('pass');
     $tip = $this->input->post('tipologia');
     $pais = $this->input->post('pais');
     $estado = $this->input->post('estado');
     $ciudad = $this->input->post('ciudad');
     $id = $this->input->post('id');

     //var_dump($_POST);
      $insert = $this->consulta->editar($nombre,$tip,$pais,$estado,$ciudad,$descrip,$correo,$password,$id);

      $this -> edit($id);

 }
    
 }


}
