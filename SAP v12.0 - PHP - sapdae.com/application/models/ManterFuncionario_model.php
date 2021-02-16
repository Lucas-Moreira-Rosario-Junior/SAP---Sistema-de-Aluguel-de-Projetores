<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManterFuncionario_model extends CI_Model{	
    public function getFuncionario()
    {                                 
        $query = $this->db->get("funcionario");
        return $query->result();
    }
    public function addFuncionario($dados=NULL)
    {                                 
        if ($dados != NULL):
        $this->db->insert('funcionario', $dados);      
    endif;

    }
    public function getFuncionarioByID($MatriculaFuncionario=NULL)
    {
    if ($MatriculaFuncionario != NULL):
  
        $this->db->where('MatriculaFuncionario', $MatriculaFuncionario);        
    
        $this->db->limit(1);
        
        $query = $this->db->get("funcionario");        

        return $query->row();   
    endif;
    }
    public function atualizarFuncionario($dados=NULL, $MatriculaFuncionario=NULL)
    {
   
    if ($dados != NULL && $MatriculaFuncionario != NULL):

        $this->db->update('funcionario', $dados, array('MatriculaFuncionario'=>$MatriculaFuncionario));      
    endif;

    }
    public function apagarFuncionario($MatriculaFuncionario=NULL){

        if ($MatriculaFuncionario != NULL):

            $this->db->delete('reservar', array('Funcionario_MatriculaFuncionario'=>$MatriculaFuncionario));
            $this->db->delete('alugarEdevolver', array('Funcionario_MatriculaFuncionario'=>$MatriculaFuncionario)); 
            $this->db->delete('funcionario', array('MatriculaFuncionario'=>$MatriculaFuncionario)); 
        endif;
    }
}
