<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projeto extends CI_Controller {
	public function index(){
		$this->load->view('login');
	}

	/*---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ------------------------------------------------MANTER PROJETORES----------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------*/
	public function salvarProjetores()
	{		
			if ($this->input->post('idProjetor') == NULL) {
			echo 'erro';
			}else{
							
			$this->load->model('ManterProjetor_model', 'ManterProjetores');

	
			$dados['idProjetor'] = $this->input->post('idProjetor');
			$dados['Tombo'] = $this->input->post('Tombo');
			$dados['Descricao'] = $this->input->post('Descricao');


			if ($this->input->post('idProjetor') != NULL) {

				$this->ManterProjetores->addProjetor($dados);
				
			} 	

				
						
		
			redirect("../index.php/Projeto/ManterProjetor");
		}
		 		
	}
	public function editarProj()
	{		
		
		
			
			
			$this->load->model('ManterProjetor_model', 'ManterProjetores');


			$dados['idProjetor'] = $this->input->post('idProjetor');
			$dados['Tombo'] = $this->input->post('Tombo');
			$dados['Descricao'] = $this->input->post('Descricao');

			if ($this->input->post('idProjetor') != NULL) {
				
				$this->ManterProjetores->atualizarProjetor($dados, $this->input->post('idProjetorAnt'));
			} 	

		
			redirect("../index.php/Projeto/ManterProjetor");
		
		 		
	}
	public function editarProjetor($idProjetor=NULL)	{						
		
		if($idProjetor == NULL) {
			redirect('../index.php/Projeto/ManterProjetor');
		}

				
		$this->load->model('ManterProjetor_model', 'ManterProjetores');


		$query = $this->ManterProjetores->getProjetorByID($idProjetor);

		
		if($query == NULL) {
			redirect('../index.php/Projeto/ManterProjetor');
		}
	
		$dados['projetor'] = $query;


		$this->load->view('EditarProjetores', $dados);		
	}
	public function deletarProjetor($idProjetor=NULL)
	{

		if($idProjetor == NULL) {
			redirect('../index.php/Projeto/ManterProjetor');
		}

			
		$this->load->model('ManterProjetor_model', 'ManterProjetores');

		$query = $this->ManterProjetores->getProjetorByID($idProjetor);

		if($query != NULL) {
			

			$this->ManterProjetores->apagarProjetor($query->idProjetor);
			redirect('../index.php/Projeto/ManterProjetor');

		} else {

			redirect('../index.php/Projeto/ManterProjetor');
		}	
	}


	/*---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ------------------------------------------------MANTER SERVIDORRES---------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------*/



	public function salvarServidores()
	{		
			if ($this->input->post('MatriculaServidor') == NULL) {
			redirect("../index.php/Projeto/Servidor");
			}else{
			
			$this->load->model('ManterServidor_model', 'ManterServidores');

			//Pega dados do post e guarda na array $dados
			$dados['MatriculaServidor'] = $this->input->post('MatriculaServidor');
			$dados['nomeServidor'] = $this->input->post('nomeServidor');
			$dados['telefoneServidor'] = $this->input->post('telefoneServidor');
			$dados['senhaServidor'] = $this->input->post('senhaServidor');
			$dados['emailServidor'] = $this->input->post('emailServidor');
			$dados['setorServidor'] = $this->input->post('setorServidor');


			if ($this->input->post('MatriculaServidor') != NULL) {

				$this->ManterServidores->addServidor($dados);
				
			} 	

	
			redirect("../index.php/Projeto/Servidor");
		}
		 		
	}
	public function editarServ()
	{		
		
		
			
			$this->load->model('ManterServidor_model', 'ManterServidores');

			
			$dados['MatriculaServidor'] = $this->input->post('MatriculaServidor');
			$dados['nomeServidor'] = $this->input->post('nomeServidor');
			$dados['telefoneServidor'] = $this->input->post('telefoneServidor');
			$dados['senhaServidor'] = $this->input->post('senhaServidor');
			$dados['emailServidor'] = $this->input->post('emailServidor');
			$dados['setorServidor'] = $this->input->post('setorServidor');


			if ($this->input->post('MatriculaServidor') != NULL) {

				$this->ManterServidores->atualizarServidor($dados, $this->input->post('MatriculaServidorAnt'));
				
			} 	
	
			redirect("../index.php/Projeto/Servidor");
		
		 		
	}
	public function editarServidor($MatriculaServidor=NULL)	{						

		if($MatriculaServidor == NULL) {
			redirect('../index.php/Projeto/Servidor');
		}

			
		$this->load->model('ManterServidor_model', 'ManterServidores');


		$query = $this->ManterServidores->getServidorByID($MatriculaServidor);


		if($query == NULL) {
			redirect('../index.php/Projeto/Servidor');
		}
	
	
		$dados['servidor'] = $query;


		$this->load->view('EditarServidores', $dados);		
	}
	public function deletarServidor($MatriculaServidor=NULL)
	{

		if($MatriculaServidor == NULL) {
			redirect('../index.php/Projeto/Servidor');
		}
			
		$this->load->model('ManterServidor_model', 'ManterServidores');

		$query = $this->ManterServidores->getServidorByID($MatriculaServidor);


		if($query != NULL) {
			

			$this->ManterServidores->apagarServidor($query->MatriculaServidor);
			redirect('../index.php/Projeto/Servidor');

		} else {

			redirect('../index.php/Projeto/Servidor');
		}	
	}

	/*---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ------------------------------------------------MANTER PROFESSORES---------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------*/

	public function salvarProfessores()
	{		
			if ($this->input->post('MatriculaProfessor') == NULL) {
			redirect("../index.php/Projeto/Professor");
			}else{
			
			$this->load->model('ManterProfessor_model', 'ManterProfessores');

			$dados['MatriculaProfessor'] = $this->input->post('MatriculaProfessor');
			$dados['nomeProfessor'] = $this->input->post('nomeProfessor');
			$dados['telefoneProfessor'] = $this->input->post('telefoneProfessor');
			$dados['senhaProfessor'] = $this->input->post('senhaProfessor');
			$dados['emailProfessor'] = $this->input->post('emailProfessor');
			$dados['departamento'] = $this->input->post('departamento');


			if ($this->input->post('MatriculaProfessor') != NULL) {

				$this->ManterProfessores->addProfessor($dados);
				
			} 	

	
			redirect("../index.php/Projeto/Professor");
		}
		 		
	}
	public function editarProf()
	{		
		
		
			
			$this->load->model('ManterProfessor_model', 'ManterProfessores');

			$dados['MatriculaProfessor'] = $this->input->post('MatriculaProfessor');
			$dados['nomeProfessor'] = $this->input->post('nomeProfessor');
			$dados['telefoneProfessor'] = $this->input->post('telefoneProfessor');
			$dados['senhaProfessor'] = $this->input->post('senhaProfessor');
			$dados['emailProfessor'] = $this->input->post('emailProfessor');
			$dados['departamento'] = $this->input->post('departamento');


			if ($this->input->post('MatriculaProfessor') != NULL) {

				$this->ManterProfessores->atualizarProfessor($dados, $this->input->post('MatriculaProfessorAnt'));
				
			} 	

	
			redirect("../index.php/Projeto/Professor");
		
		 		
	}
	public function editarProfessor($MatriculaProfessor=NULL)	{						

		if($MatriculaProfessor == NULL) {
			redirect('../index.php/Projeto/Professor');
		}

			
		$this->load->model('ManterProfessor_model', 'ManterProfessores');


		$query = $this->ManterProfessores->getProfessorByID($MatriculaProfessor);


		if($query == NULL) {
			redirect('../index.php/Projeto/Professor');
		}
	
	
		$dados['professor'] = $query;


		$this->load->view('EditarProfessores', $dados);		
	}
	public function deletarProfessor($MatriculaProfessor=NULL)
	{

		if($MatriculaProfessor == NULL) {
			redirect('../index.php/Projeto/Professor');
		}
			
		$this->load->model('ManterProfessor_model', 'ManterProfessores');

		$query = $this->ManterProfessores->getProfessorByID($MatriculaProfessor);


		if($query != NULL) {
			

			$this->ManterProfessores->apagarProfessor($query->MatriculaProfessor);
			redirect('../index.php/Projeto/Professor');

		} else {

			redirect('../index.php/Projeto/Professor');
		}	
	}

	/*---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  -----------------------------------------------MANTER FUNCIONARIOS---------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------
	  ---------------------------------------------------------------------------------------------------------------------*/
	public function salvarFuncionarios()
	{		
			if ($this->input->post('MatriculaFuncionario') == NULL) {
			redirect("../index.php/Projeto/Funcionarios");
			}else{
			
			$this->load->model('ManterFuncionario_model', 'ManterFuncionarios');

			$dados['MatriculaFuncionario'] = $this->input->post('MatriculaFuncionario');
			$dados['nomeFuncionario'] = $this->input->post('nomeFuncionario');
			$dados['telefoneFuncionario'] = $this->input->post('telefoneFuncionario');
			$dados['senhaFuncionario'] = $this->input->post('senhaFuncionario');
			$dados['emailFuncionario'] = $this->input->post('emailFuncionario');
			


			if ($this->input->post('MatriculaFuncionario') != NULL) {

				$this->ManterFuncionarios->addFuncionario($dados);
				
			} 	

	
			redirect("../index.php/Projeto/Funcionarios");
		}
		 		
	}
	public function editarFunc()
	{		
		
		
			
			$this->load->model('ManterFuncionario_model', 'ManterFuncionarios');

			$dados['MatriculaFuncionario'] = $this->input->post('MatriculaFuncionario');
			$dados['nomeFuncionario'] = $this->input->post('nomeFuncionario');
			$dados['telefoneFuncionario'] = $this->input->post('telefoneFuncionario');
			$dados['senhaFuncionario'] = $this->input->post('senhaFuncionario');
			$dados['emailFuncionario'] = $this->input->post('emailFuncionario');
		


			if ($this->input->post('MatriculaFuncionario') != NULL) {

				$this->ManterFuncionarios->atualizarFuncionario($dados, $this->input->post('MatriculaFuncionarioAnt'));
				
			} 	

	
			redirect("../index.php/Projeto/Funcionarios");
		
		 		
	}
	public function editarFuncionario($MatriculaFuncionario=NULL)	{						

		if($MatriculaFuncionario == NULL) {
			redirect('../index.php/Projeto/Funcionarios');
		}

			
		$this->load->model('ManterFuncionario_model', 'ManterFuncionarios');


		$query = $this->ManterFuncionarios->getFuncionarioByID($MatriculaFuncionario);


		if($query == NULL) {
			redirect('../index.php/Projeto/Funcionarios');
		}
	
	
		$dados['funcionario'] = $query;


		$this->load->view('EditarFuncionarios', $dados);		
	}
	public function deletarFuncionario($MatriculaFuncionario=NULL)
	{

		if($MatriculaFuncionario == NULL) {
			redirect('../index.php/Projeto/Funcionarios');
		}
			
		$this->load->model('ManterFuncionario_model', 'ManterFuncionarios');

		$query = $this->ManterFuncionarios->getFuncionarioByID($MatriculaFuncionario);


		if($query != NULL) {
			

			$this->ManterFuncionarios->apagarFuncionario($query->MatriculaFuncionario);
			redirect('../index.php/Projeto/Funcionarios');

		} else {

			redirect('../index.php/Projeto/Funcionarios');
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
		$this->load->model('ManterFuncionario_model', 'ManterFuncionarios');			

		$data['SAP'] = $this->ManterFuncionarios->getFuncionario();

		$this->load->view('Funcionarios',$data);
	}
	public function Historico(){
		$this->load->model('Historico_model', 'historicos');			

		$data['SAP'] = $this->historicos->getHistorico();

		$this->load->view('Historico',$data);
	}
	public function Professor(){

		$this->load->model('ManterProfessor_model', 'ManterProfessores');			

		$data['SAP'] = $this->ManterProfessores->getProfessor();

		$this->load->view('Professor',$data);
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
		$this->load->model('ManterServidor_model', 'ManterServidores');			

		$data['SAP'] = $this->ManterServidores->getServidor();

		$this->load->view('Servidor',$data);
	}
	public function CadastroProjetores(){
		$this->load->view('CadastroProjetores');
	}
	public function CadastroServidor(){
		$this->load->view('CadastroServidores');
	}
	public function CadastroProfessor(){
		$this->load->view('CadastroProfessor');
	}
	public function CadastroFuncionario(){
		$this->load->view('CadastroFuncionarios');
	}
	public function CadastroUsuarios(){
		$this->load->view('CadastroUsuarios');
	}

}
