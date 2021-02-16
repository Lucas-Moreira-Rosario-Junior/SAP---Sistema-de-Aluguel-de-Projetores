<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Historico_model extends CI_Model{	
    public function getHistorico()
    {                                 
        $query = $this->db->get("alugarEdevolver");
        return $query->result();
    }
    public function getHistoricoReserva()
    {                                 
        $query = $this->db->get("reservar");
        return $query->result();
    }
}
