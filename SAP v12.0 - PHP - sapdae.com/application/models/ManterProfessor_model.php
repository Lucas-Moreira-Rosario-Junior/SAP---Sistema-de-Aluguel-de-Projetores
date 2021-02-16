<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManterProfessor_model extends CI_Model{	
    public function getProfessor()
    {                                 
        $query = $this->db->get("professor");
        return $query->result();
    }
     public function addProfessor($dados=NULL)
    {                                 
        if ($dados != NULL):
        $this->db->insert('professor', $dados);      
    endif;

    }
    public function atualizarProfessor($dados=NULL, $MatriculaProfessor=NULL)
    {
     
    if ($dados != NULL && $MatriculaProfessor != NULL):
  
        $this->db->update('professor', $dados, array('MatriculaProfessor'=>$MatriculaProfessor));      
    endif;
    }
    public function getProfessorByID($MatriculaProfessor=NULL)
    {
    if ($MatriculaProfessor != NULL):

        $this->db->where('MatriculaProfessor', $MatriculaProfessor);        
       
        $this->db->limit(1);
     
        $query = $this->db->get("professor");        
   
        return $query->row();   
    endif;
    }
     public function apagarProfessor($MatriculaProfessor=NULL){
      
        if ($MatriculaProfessor != NULL):
          
            $this->db->delete('reservar', array('Professor_MatriculaProfessor'=>$MatriculaProfessor));
            $this->db->delete('alugarEdevolver', array('Professor_MatriculaProfessor'=>$MatriculaProfessor)); 
            $this->db->delete('professor', array('MatriculaProfessor'=>$MatriculaProfessor)); 

        endif;
    }
    /*
   
    
    */
}
