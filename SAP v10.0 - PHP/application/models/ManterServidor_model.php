<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManterServidor_model extends CI_Model{	
    public function getServidor()
    {                                 
        $query = $this->db->get("servidor");
        return $query->result();
    }
    public function addServidor($dados=NULL)
    {                                 
        if ($dados != NULL):
        $this->db->insert('servidor', $dados);      
    endif;

    }
    public function getServidorByID($MatriculaServidor=NULL)
    {
    if ($MatriculaServidor != NULL):
  
        $this->db->where('MatriculaServidor', $MatriculaServidor);        
    
        $this->db->limit(1);
        
        $query = $this->db->get("servidor");        

        return $query->row();   
    endif;
    }
    public function atualizarServidor($dados=NULL, $MatriculaServidor=NULL)
    {
     
    if ($dados != NULL && $MatriculaServidor != NULL):
        
        $this->db->update('servidor', $dados, array('MatriculaServidor'=>$MatriculaServidor));      
    endif;
    }
    public function apagarServidor($MatriculaServidor=NULL){
       
        if ($MatriculaServidor != NULL):
           
            $this->db->delete('reservar', array('Servidor_MatriculaServidor'=>$MatriculaServidor));
            $this->db->delete('alugarEdevolver', array('Servidor_MatriculaServidor'=>$MatriculaServidor)); 
            $this->db->delete('servidor', array('MatriculaServidor'=>$MatriculaServidor)); 

        endif;
    }
}
