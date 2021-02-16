<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManterProjetor_model extends CI_Model{	
    public function getProjetor()
    {                                 
        $query = $this->db->get("projetor");
        return $query->result();
    }
    public function getProjetorByID($idProjetor=NULL)
    {
    if ($idProjetor != NULL):
       
        $this->db->where('idProjetor', $idProjetor);        
           
        $this->db->limit(1);
    
        $query = $this->db->get("projetor");        
      
        return $query->row();   
    endif;
    }
    public function addProjetor($dados=NULL)
    {                                 
        if ($dados != NULL):
		$this->db->insert('projetor', $dados);		
	endif;

    }
    public function atualizarProjetor($dados=NULL, $idProjetor=NULL)
    {
        
    if ($dados != NULL && $idProjetor != NULL):
        
        $this->db->update('projetor', $dados, array('idProjetor'=>$idProjetor));      
    endif;
    }
     public function apagarProjetor($idProjetor=NULL){
        
        if ($idProjetor != NULL):
            
            $this->db->delete('reservar', array('Projetor_idProjetor'=>$idProjetor));
            $this->db->delete('alugarEdevolver', array('Projetor_idProjetor'=>$idProjetor)); 
            $this->db->delete('projetor', array('idProjetor'=>$idProjetor)); 

        endif;
    }
}
