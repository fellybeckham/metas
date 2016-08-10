<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Consultas_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function actualizar_avisos()
    {
       $this->db->select('Aviso')->from('avisos')->where('Id=',1);
                 $query = $this->db->get();
                    if($query->num_rows() > 0 )
                     {
                        //echo $query;
                        return $query->row();
                     }
            //--
            //mandar los valores a la vista
                 //$data['Aviso']=$query;
                   // $this->load->view('welcome_message_torneos',$data);
            //--
    }
    
    public function verTodoEquipos()
    {
        $query = $this->db->get('CAT_equipos_contrincantes');
        
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
                {
                //echo $row->Id;
                //echo $row->Equipo_contrincante;
                return $query;
                }
        }
        else
        {
            return FALSE;
        }
    }
    
    public function add_equipos($data)
    {
        $this->db->insert('CAT_equipos_contrincantes', array('Equipo_contrincante'=>$data['Equipo_contrincante']));
    }
    
    public function obtenerRegistro($id)
    {
        $this->db->where('Id', $id);
        $query = $this->db->get('CAT_equipos_contrincantes');
        //var_dump($query);
        
        if($query->num_rows() > 0)
        {
            return $query;
        }
        else
        {
            return FALSE;
        }
    }
    
    public function editar_equipo($id, $data)
    {
        $this->db->where('Id',$id);
        $this->db->update('CAT_equipos_contrincantes',$data);
        
    }
    
    public function delete($id)
    {
        $this->db->where('Id',$id);
        $this->db->delete('CAT_equipos_contrincantes');
    }
}

