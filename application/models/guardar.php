<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class guardar extends CI_Model
{
 public function construct()
 {
 parent::__construct();
 }
 
 //realizamos la inserción de los datos y devolvemos el 
 //resultado al controlador para envíar el correo si todo ha ido bien
 function new_user($nombre,$tipologia,$pais,$estado,$ciudad,$descripcion,$email,$password)
 {
       $data_ = array(
            'nombre' => $nombre,
            'tipologia' => $tipologia,
            'pais' => $pais,
            'estado' => $estado,
            'ciudad' => $ciudad,
            'descripcion' => $descripcion,
            'email' => $email,
            'password' => $password
        );
        return $this->db->insert('data', $data_); 
    }

}
?>