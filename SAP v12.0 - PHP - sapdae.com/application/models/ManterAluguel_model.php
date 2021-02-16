<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManterAluguel_model extends CI_Model{	
    public function addAluguel($dados=NULL)
    {                                 
        if ($dados != NULL):
        $this->db->insert('alugarEdevolver', $dados);      
    endif;

    }
}