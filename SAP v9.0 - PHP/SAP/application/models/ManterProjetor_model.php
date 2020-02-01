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
        //Verifica se a ID no banco de dados
        $this->db->where('idProjetor', $idProjetor);        
        //limita para apenas um regstro    
        $this->db->limit(1);
        //pega os produto
        $query = $this->db->get("projetor");        
        //retornamos o produto
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
    //Verifica se foi passado $dados e $id    
    if ($dados != NULL && $idProjetor != NULL):
        //Se foi passado ele vai a atualização
        $this->db->update('projetor', $dados, array('idProjetor'=>$idProjetor));      
    endif;
    }
     public function apagarProjetor($idProjetor=NULL){
        //Verificamos se foi passado o a ID como parametro
        if ($idProjetor != NULL):
            //Executa a função DB DELETE para apagar o produto
            $this->db->delete('reservar', array('Projetor_idProjetor'=>$idProjetor));
            $this->db->delete('alugarEdevolver', array('Projetor_idProjetor'=>$idProjetor)); 
            $this->db->delete('projetor', array('idProjetor'=>$idProjetor)); 

        endif;
    }
}
