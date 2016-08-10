<?php

class Administracion extends CI_Controller {

    public function index()
    {
         if($this->session->userdata('usuario')){
         /**redirect('administracion');**/
             $this->load->model('consultas_model');
        $data = array('enlaces' => $this -> consultas_model -> verTodoEquipos());
         $this->load->view('administracion',$data);
        //$this->load->view('administracion');
    }
    else
    {
        print "<script type=\"text/javascript\">alert('Debes de autenticarte para ver este contenido');</script>";
        redirect('welcome_torneos');        
        //$this->load->view('welcome_message_torneos');
    /**echo  "<script type = 'text/javascript'>" +
          "alert('Debes de autenticarte en el sistema para ver este contenido.');" +
          "</script>";*/
        /**$this->load->view('welcome_torneos');*/
        /**redirect('welcome_torneos');**/
    }
    
    }
    function ActualizarAviso()
    {
        $aviso = isset($_POST['avisos']) ? $_POST['avisos'] : NULL; /*IF TERNARIO*/
        /*echo $aviso;*/
        $data = array('Aviso' => $aviso);
        $this->db->where('Id',1);
        $this->db->update('avisos',$data);
        //las siguientes dos lineas sirven para mandar la variable aviso desde este controlador hasta la vista
        /*$data['aviso']=$aviso;
        $this->load->view('welcome_message_torneos',$data);*/
        $this->load->view('administracion');
    }
    
    function ver_equipos()
    {
        $this->load->model('consultas_model');
        $data = array('enlaces' => $this -> consultas_model -> verTodoEquipos());
        //$data['enlaces']=$this->consultas_model->verTodoEquipos();
         
        $this->load->view('header');
        $this->load->view('ver_equipos',$data);
        $this->load->view('footer');
    }
    
    function add()//esta funcion solo es para llamar a la vista formulario
    {
        $this->load->view('header');
        $this->load->view('agregar_equipos');
        $this->load->view('footer');
    }
    
    function  add_equipo()//esta funcion ya realiza la agregación del equipo
    {
        $equipo = isset($_POST['nombre_equipo']) ? $_POST['nombre_equipo'] : NULL;
        $data = array('Equipo_contrincante' => $equipo);
       
        //Llamando al modelo----------------------------------------------------
        $this->load->model('consultas_model');
        
        $this->consultas_model->add_equipos($data);
       // $this->load->view('administracion');
         print "<script type=\"text/javascript\">alert('El equipo se registro correctamente!');</script>";
        redirect('administracion');  
        
    }
    
    function editar()
    {
        $this->load->model('consultas_model');
        $id = $this->uri->segment(3);
        //echo $id;
        //$id = 1;
        $obtenerRegistro = $this->consultas_model->obtenerRegistro($id);
        //var_dump ($obtenerRegistro);
        //var_dump($id);
        if($obtenerRegistro != FALSE)
        {
            foreach ($obtenerRegistro->result() as $row){
                $Id = $row->Id;
                $Equipo_contrincante = $row->Equipo_contrincante;
            }
            $data = array(
              'id' => $id,
              'Equipo_contrincante' => $Equipo_contrincante);
        }
        else
        {
            echo 'hay un error';
            return FALSE;
        }
        $this->load->view('header');
        $this->load->view('editar',$data);
        $this->load->view('footer');
    }
    
    function edit_equipo()
    {
        $this->load->model('consultas_model');
         $id = $this->uri->segment(3);
         //echo $id;
         $data = array(
             'Equipo_contrincante' => $this->input->post('nombre_equipo',true)
         );
         
         $this->consultas_model->editar_equipo($id,$data);
         redirect('administracion');
     
    }
    
    function eliminar()
    {
        $this->load->model('consultas_model');
        $id = $this->uri->segment(3);
        $this->consultas_model->delete($id);
        redirect('administracion');   
    }
}


