<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Consulta extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function entradas()
    {

            $this->db->select('d.id,d.nombre,d.tipologia,d.pais,d.estado,d.ciudad,d.descripcion,d.email,d.password');
            $this->db->from('data d');

        $query = $this->db->get();

        return $query->result();
        
    }

    public function filas()
    {

            $this->db->select('d.id,d.nombre,d.tipologia,d.pais,d.estado,d.ciudad,d.descripcion,d.email,d.password');
            $this->db->from('data d');

            $query = $this->db->get();
            $total = $query->num_rows(); 
            
            return $total;
        
    }

    public function search($item)
    {

            $this->db->select('id,nombre,tipologia,pais,estado,ciudad,descripcion,email,password');
            $this->db->from('data');
            $this->db->where("nombre = ". "'".$item."'" );

            $query = $this->db->get();
            if($query->num_rows()>0){
                foreach($query->result() as $fila)
            {
                $data[] = $fila;
            }
                     return $data;
                }
            
        
    }


    public function edit($item)
    {

            $this->db->select('id,nombre,tipologia,pais,estado,ciudad,descripcion,email,password');
            $this->db->from('data');
            $this->db->where("id = ". "'".$item."'" );

            $query = $this->db->get();
            if($query->num_rows()>0){
                foreach($query->result() as $fila)
            {
                $data[] = $fila;
            }
                     return $data;
                }
            
        
    }
        function total_paginados($por_pagina,$segmento) 
        {   
            $this->db->order_by('id'.' desc');
            $consulta = $this->db->get('data',$por_pagina,$segmento);
            if($consulta->num_rows()>0)
            {
                foreach($consulta->result() as $fila)
        {
            $data[] = $fila;
        }
                 return $data;
            }
        }
 
        function total_paginados_asc($por_pagina,$segmento) 
        {   
            $this->db->order_by('id'.' asc');
            $consulta = $this->db->get('data',$por_pagina,$segmento);
            if($consulta->num_rows()>0)
            {
                foreach($consulta->result() as $fila)
        {
            $data[] = $fila;
        }
                 return $data;
            }
        }


     function editar($nombre,$tipologia,$pais,$estado,$ciudad,$descripcion,$email,$password,$id)
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
        $this->db->where('id', $id);
        $this->db->update('data', $data_);

    }



}
