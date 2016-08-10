<?php if ( !defined('BASEPATH')) exit ('No direct script access allowed');

class Login extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
    if($this->session->userdata('usuario')){
        redirect('administracion');
    }
       if(isset($_POST['password'])){
        $this->load->model('usuario_model');
        if($this->usuario_model->login($_POST['usuario'],$_POST['password'])){
            
            $this->session->set_userdata('usuario', $_POST['usuario']);
            redirect('administracion');
        }
        else {
              redirect('login');
             }
       }
        $this->load->view('login');
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome_torneos');
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

