<?php
class Consultas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('consulta');

    }
    public function index()
    {
        

		$pages=5; //Número de registros mostrados por páginas
		$this->load->library('pagination');

		$config['base_url'] = base_url().'empresas/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
        //echo $this->consulta->filas();
		$config['total_rows'] = $this->consulta->filas();
		$config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 2; //Número de links mostrados en la paginación

		$config['first_link'] = 'Primera';//primer link
		$config['last_link'] = 'Última';//último link
        $config["uri_segment"] = 2;//el segmento de la paginación
		$config['next_link'] = 'Siguiente';//siguiente link
		$config['prev_link'] = 'Anterior';//anterior link

		$this->pagination->initialize($config); //inicializamos la paginación		

        $this->load->view('header');
        $data["mode"] = base_url()."consultas_";
        $data["gly"] = "-chevron-down"; 
        $data["user_entrys"] = $this->consulta->total_paginados($config['per_page'],$this->uri->segment(2));
        //var_dump($data);
        $this->load->view('querys',$data);
        $this->load->view('footer');
    }

    public function search($item)
    {
        
        $this->load->view('header');
        $data["s"] = $item;
        $data["user_entrys"] = $this->consulta->search($item);
        //var_dump($data);
       $this->load->view('querys_',$data);
        $this->load->view('footer');
    }
}
