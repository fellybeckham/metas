<?php

class Welcome_torneos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
           // $this->load->view('welcome_message_torneos');
            
             $this->load->model('consultas_model');
             //var_dump($this->consultas_model->actualizar_avisos());
             
             $data['aviso']=$this->consultas_model->actualizar_avisos();
             $this->load->view('welcome_message_torneos',$data);
         
                    
	}
}


