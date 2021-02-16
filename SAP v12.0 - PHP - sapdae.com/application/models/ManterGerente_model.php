<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManterGerente_model extends CI_Model{	
	public function getGerente()
    {                                 
        $query = $this->db->get("gerente");
        return $query->result();
    }
    public function addGerente($dados=NULL)
    {                                 
        if ($dados != NULL):
        $this->db->insert('gerente', $dados);      
    endif;

    }
}