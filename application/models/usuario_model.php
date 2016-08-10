<?php if ( !defined('BASEPATH')) exit ('No direct script access allowed');

class Usuario_model extends CI_Model {
    
    public $variable;
    
    public function __construct() 
        {
         parent::__construct();
        }
    
    public function login($username,$password)
    {
        $this->db->where('usuario',$username);
        $this->db->where('password',$password);
        
        $q = $this->db->get('usuarios');
        if($q->num_rows()>0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

