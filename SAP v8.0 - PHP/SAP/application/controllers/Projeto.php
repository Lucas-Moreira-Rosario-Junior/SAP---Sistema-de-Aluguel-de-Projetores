<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projeto extends CI_Controller {
	public function index(){
		$this->load->view('login');
	}
	public function salvarProjetores()
	{		
			if ($this->input->post('idProjetor') == NULL) {
			echo 'O campo numero do projetor é obrigatorio.';
			echo 'Voltar';
			}else{
			//Carrega o Model Produtos				
			$this->load->model('ManterProjetor_model', 'ManterProjetores');

			//Pega dados do post e guarda na array $dados
			$dados['idProjetor'] = $this->input->post('idProjetor');
			$dados['Tombo'] = $this->input->post('Tombo');
			$dados['Descricao'] = $this->input->post('Descricao');


			if ($this->input->post('idProjetor') != NULL) {

				$this->ManterProjetores->addProjetor($dados);
				
				$this->ManterProjetores->atualizarProjetor($dados, $this->input->post('idProjetor'));
			} 	

				
						
			//Fazemos um redicionamento para a página 		
			redirect("../index.php/Projeto/ManterProjetor");
		}
		 		
	}
	public function editarProj()
	{		
			if ($this->input->post('idProjetor') == NULL) {
			echo 'O campo numero do projetor é obrigatorio.';
			echo 'Voltar';
			}else{
			//Carrega o Model Produtos				
			$this->load->model('ManterProjetor_model', 'ManterProjetores');

			//Pega dados do post e guarda na array $dados
			$dados['idProjetor'] = $this->input->post('idProjetor');
			$dados['Tombo'] = $this->input->post('Tombo');
			$dados['Descricao'] = $this->input->post('Descricao');


			if ($this->input->post('idProjetor') != NULL) {
				
				$this->ManterProjetores->atualizarProjetor($dados, $this->input->post('idProjetor'));
			} 	

				
						
			//Fazemos um redicionamento para a página 		
			redirect("../index.php/Projeto/ManterProjetor");
		}
		 		
	}
	public function editarProjetor($idProjetor=NULL)	{						
		//Verifica se foi passado um ID, se não vai para a página listar produtos
		if($idProjetor == NULL) {
			redirect('../index.php/Projeto/ManterProjetor');
		}

		//Carrega o Model Produtos				
		$this->load->model('ManterProjetor_model', 'ManterProjetores');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->ManterProjetores->getProjetorByID($idProjetor);

		//Verifica que a consulta voltar um registro, se não vai para a página listar produtos
		if($query == NULL) {
			redirect('../index.php/Projeto/ManterProjetor');
		}
	
		//Criamos uma array onde vai guardar os dados do produto e passamos como parametro para view;	
		$dados['projetor'] = $query;

		//Carrega a View
		$this->load->view('EditarProjetores', $dados);		
	}
	public function deletarProjetor($idProjetor=NULL)
	{
		//Verifica se foi passado um ID, se não vai para a página listar produtos
		if($idProjetor == NULL) {
			redirect('../index.php/Projeto/ManterProjetor');
		}

		//Carrega o Model Produtos				
		$this->load->model('ManterProjetor_model', 'ManterProjetores');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->ManterProjetores->getProjetorByID($idProjetor);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagarProdutos do produtos_model
			$this->ManterProjetores->apagarProjetor($query->idProjetor);
			redirect('../index.php/Projeto/ManterProjetor');

		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar produtos
			redirect('../index.php/Projeto/ManterProjetor');
		}	
	}
	public function home(){
		$this->load->view('Principal');
	}
	public function alugar(){
		$this->load->view('Alugar');
	}
	public function devolver(){
		$this->load->view('devolver');
	}
	public function ManterProjetor(){
		$this->load->model('ManterProjetor_model', 'ManterProjetores');			

		$data['SAP'] = $this->ManterProjetores->getProjetor();

		$this->load->view('ManterProjetor',$data);
	}
	public function Funcionarios(){
		$this->load->view('Funcionarios');
	}
	public function Historico(){
		$this->load->model('Historico_model', 'historicos');			

		$data['SAP'] = $this->historicos->getHistorico();

		$this->load->view('Historico',$data);
	}
	public function Professor(){
		$this->load->view('Professor');
	}
	public function Usuarios(){
		$this->load->view('Usuarios');
	}
	public function Projetores(){
		$this->load->view('Projetor');
	}
	public function Reservar(){
		$this->load->view('Reservar');
	}
	public function ReceberReservado(){
		$this->load->view('RReservar');
	}
	public function Servidor(){
		$this->load->view('Servidor');
	}
	public function CadastroProjetores(){
		$this->load->view('CadastroProjetores');
	}
	public function CadastroUsuarios(){
		$this->load->view('CadastroUsuarios');
	}

}
