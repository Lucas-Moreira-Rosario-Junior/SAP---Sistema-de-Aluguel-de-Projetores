<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CadastrarProjetor_model extends CI_Model{	
    public function addProjetor($dados=NULL)
    {                                 
        if ($dados != NULL):
		$this->db->insert('projetor', $dados);		
	endif;
    }
}
