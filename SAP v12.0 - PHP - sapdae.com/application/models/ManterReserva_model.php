<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManterReserva_model extends CI_Model{	
    public function addReserva($dados=NULL)
    {                                 
        if ($dados != NULL):
        $this->db->insert('reservar', $dados);      
    endif;

    }
}