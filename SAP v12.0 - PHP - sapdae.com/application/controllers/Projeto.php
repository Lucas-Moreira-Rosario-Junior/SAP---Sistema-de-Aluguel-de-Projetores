<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projeto extends CI_Controller {

	/*function __construct() {
		parent:: __construct();
		$this->load->library("Controle_acesso");
		$this->controle_acesso->controlar();
	}*/

	public function index(){
		$this->load->view('login');
		
	}

	public function logar(){
		
		$login = $this->input->post('email');
		$senha = $this->input->post('password');
		
		$this->db->where('emailGerente',$login);
        $this->db->where('senhaGerente',$senha);

		$query = $this->db->get("gerente");
        

        if($query->num_rows() == 1){
        	$gerente = $query->row();

        	$this->session->set_userdata("gerente", $gerente->MatriculaGerente);
			redirect("http://www.sapdae.com/index.php/Projeto/home");
		}else{
			redirect("http://www.sapdae.com/");
		}
		
	}
	public function logoff(){
		$this->session->set_userdata("gerente","");
		redirect("http://www.sapdae.com/");
	}

	public function salvarGerente()
	{		
			if ($this->input->post('MatriculaGerente') == NULL) {
			redirect("http://www.sapdae.com/index.php/Projeto/CadastroUsuarios");
			}else{
			
			$this->load->model('ManterGerente_model', 'ManterGerente');

			//Pega dados do post e guarda na array $dados
			$dados['MatriculaGerente'] = $this->input->post('MatriculaGerente');
			$dados['nomeGerente'] = $this->input->post('nome');
			$dados['telefoneGerente'] = $this->input->post('telefone');
			$dados['senhaGerente'] = $this->input->post('senha');
			$dados['emailGerente'] = $this->input->post('email');
			


			if ($this->input->post('MatriculaGerente') != NULL) {

				$this->ManterGerente->addGerente($dados);
				
			} 	

	
			redirect("http://www.sapdae.com/");
		}
		 		
	}

	public function salvarAluguel()
	{		
			if ($this->input->post('inputRecurso') == NULL) {
			redirect("http://www.sapdae.com/index.php/Projeto/alugar");
			}else{
			
			$this->load->model('ManterAluguel_model', 'ManterAluguel');

			//Pega dados do post e guarda na array $dados
			$dados['Servidor_MatriculaServidor'] = $this->input->post('inputMatriculaS');
			$dados['Projetor_idProjetor'] = $this->input->post('inputRecurso');
			$dados['horarioRetirar'] = $this->input->post('inputRetirado');
			$dados['horarioDevolver'] = $this->input->post('inputDevolvido');
			$dados['dataAluguel'] = $this->input->post('inputData');
			$dados['alugador'] = $this->input->post('inputEmprestador');
			


			if ($this->input->post('inputRecurso') != NULL) {

				$this->ManterAluguel->addAluguel($dados);
				
			} 	

	
			redirect("http://www.sapdae.com/index.php/Projeto/historico");
		}
		 		
	}
	public function salvarDevolver()
	{		
			if ($this->input->post('inputRecurso') == NULL) {
			redirect("http://www.sapdae.com/index.php/Projeto/devolver");
			}else{
			
			$this->load->model('ManterAluguel_model', 'ManterAluguel');

			//Pega dados do post e guarda na array $dados
			$dados['Servidor_MatriculaServidor'] = $this->input->post('inputMatriculaS');
			$dados['Projetor_idProjetor'] = $this->input->post('inputRecurso');
			$dados['horarioDevolver'] = $this->input->post('inputDevolvido');
			$dados['dataAluguel'] = $this->input->post('inputData');
			$dados['alugador'] = $this->input->post('inputEmprestador');
			


			if ($this->input->post('inputRecurso') != NULL) {

				$this->ManterAluguel->addAluguel($dados);
				
			} 	

	
			redirect("http://www.sapdae.com/index.php/Projeto/historico");
		}
		 		
	}
	public function salvarReserva()
	{		
			if ($this->input->post('inputRecurso') == NULL) {
			redirect("http://www.sapdae.com/index.php/Projeto/reservar");
			}else{
			
			$this->load->model('ManterReserva_model', 'ManterReserva');

			//Pega dados do post e guarda na array $dados
			$dados['Servidor_MatriculaServidor'] = $this->input->post('inputMatriculaS');
			$dados['Projetor_idProjetor'] = $this->input->post('inputRecurso');
			$dados['horarioRetirarRes'] = $this->input->post('inputRetirado');
			$dados['horarioDevolverRes'] = $this->input->post('inputDevolvido');
			$dados['dataReserva'] = $this->input->post('inputData');
			$dados['reservador'] = $this->input->post('inputEmprestador');
			


			if ($this->input->post('inputRecurso') != NULL) {

				$this->ManterReserva->addReserva($dados);
				
			} 	

	
			redirect("http://www.sapdae.com/index.php/Projeto/historicoReserva");
		}
		 		
	}
	public function salvarReservaRecebida()
	{		
			if ($this->input->post('inputRecurso') == NULL) {
			redirect("http://www.sapdae.com/index.php/Projeto/ReceberReservado");
			}else{
			
			$this->load->model('ManterReserva_model', 'ManterReserva');

			//Pega dados do post e guarda na array $dados
			$dados['Servidor_MatriculaServidor'] = $this->input->post('inputMatriculaS');
			$dados['Projetor_idProjetor'] = $this->input->post('inputRecurso');
			$dados['horarioDevolverRes'] = $this->input->post('inputDevolvido');
			$dados['dataReserva'] = $this->input->post('inputData');
			$dados['reservador'] = $this->input->post('inputEmprestador');
			


			if ($this->input->post('inputRecurso') != NULL) {

				$this->ManterReserva->addReserva($dados);
				
			} 	

	
			redirect("http://www.sapdae.com/index.php/Projeto/historicoReserva");
		}
		 		
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

				
						
		
			redirect("http://www.sapdae.com/index.php/Projeto/ManterProjetor");
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

		
			redirect("http://www.sapdae.com/index.php/Projeto/ManterProjetor");
		
		 		
	}
	public function editarProjetor($idProjetor=NULL)	{						
		
		if($idProjetor == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/ManterProjetor');
		}

				
		$this->load->model('ManterProjetor_model', 'ManterProjetores');


		$query = $this->ManterProjetores->getProjetorByID($idProjetor);

		
		if($query == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/ManterProjetor');
		}
	
		$dados['projetor'] = $query;

		$this->load->model('ManterGerente_model','ManterGerente');

		$dados['nomeTop'] = $this->ManterGerente->getGerente();

		$dados['nome'] = $this->session->userdata("gerente");


		$this->load->view('EditarProjetores', $dados);		
	}
	public function deletarProjetor($idProjetor=NULL)
	{

		if($idProjetor == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/ManterProjetor');
		}

			
		$this->load->model('ManterProjetor_model', 'ManterProjetores');

		$query = $this->ManterProjetores->getProjetorByID($idProjetor);

		if($query != NULL) {
			

			$this->ManterProjetores->apagarProjetor($query->idProjetor);
			redirect('http://www.sapdae.com/index.php/Projeto/ManterProjetor');

		} else {

			redirect('http://www.sapdae.com/index.php/Projeto/ManterProjetor');
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




	public function salvarServidores(){		

			$this->load->model('ManterServidor_model', 'ManterServidores');

			$data['ServidorExiste'] = $this->ManterServidores->getServidor();


			foreach ($data['ServidorExiste'] as $servidor) {
				if ($this->input->post('MatriculaServidor') == $servidor->MatriculaServidor) {
						redirect("http://www.sapdae.com/index.php/Projeto/CadastroServidor");
				}
			}
			
			

			//Pega dados do post e guarda na array $dados
			$dados['MatriculaServidor'] = $this->input->post('MatriculaServidor');
			$dados['nomeServidor'] = $this->input->post('nomeServidor');
			$dados['telefoneServidor'] = $this->input->post('telefoneServidor');
			$dados['senhaServidor'] = $this->input->post('senhaServidor');
			$dados['emailServidor'] = $this->input->post('emailServidor');
			$dados['setorServidor'] = $this->input->post('setorServidor');


			if ($this->input->post('MatriculaServidor') != NULL) {

				$this->ManterServidores->addServidor($dados);
				redirect("http://www.sapdae.com/index.php/Projeto/Servidor");
				
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
	
			redirect("http://www.sapdae.com/index.php/Projeto/Servidor");
		
		 		
	}
	public function editarServidor($MatriculaServidor=NULL)	{						

		if($MatriculaServidor == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/Servidor');
		}

			
		$this->load->model('ManterServidor_model', 'ManterServidores');


		$query = $this->ManterServidores->getServidorByID($MatriculaServidor);


		if($query == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/Servidor');
		}
	
	
		$dados['servidor'] = $query;

		$this->load->model('ManterGerente_model','ManterGerente');

		$dados['nomeTop'] = $this->ManterGerente->getGerente();

		$dados['nome'] = $this->session->userdata("gerente");


		$this->load->view('EditarServidores', $dados);		
	}
	public function deletarServidor($MatriculaServidor=NULL)
	{

		if($MatriculaServidor == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/Servidor');
		}
			
		$this->load->model('ManterServidor_model', 'ManterServidores');

		$query = $this->ManterServidores->getServidorByID($MatriculaServidor);


		if($query != NULL) {
			

			$this->ManterServidores->apagarServidor($query->MatriculaServidor);
			redirect('http://www.sapdae.com/index.php/Projeto/Servidor');

		} else {

			redirect('http://www.sapdae.com/index.php/Projeto/Servidor');
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
			redirect("http://www.sapdae.com/index.php/Projeto/Professor");
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

	
			redirect("http://www.sapdae.com/index.php/Projeto/Professor");
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

	
			redirect("http://www.sapdae.com/index.php/Projeto/Professor");
		
		 		
	}
	public function editarProfessor($MatriculaProfessor=NULL)	{						

		if($MatriculaProfessor == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/Professor');
		}

			
		$this->load->model('ManterProfessor_model', 'ManterProfessores');


		$query = $this->ManterProfessores->getProfessorByID($MatriculaProfessor);


		if($query == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/Professor');
		}
	
	
		$dados['professor'] = $query;


		$this->load->view('EditarProfessores', $dados);		
	}
	public function deletarProfessor($MatriculaProfessor=NULL)
	{

		if($MatriculaProfessor == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/Professor');
		}
			
		$this->load->model('ManterProfessor_model', 'ManterProfessores');

		$query = $this->ManterProfessores->getProfessorByID($MatriculaProfessor);


		if($query != NULL) {
			

			$this->ManterProfessores->apagarProfessor($query->MatriculaProfessor);
			redirect('http://www.sapdae.com/index.php/Projeto/Professor');

		} else {

			redirect('http://www.sapdae.com/index.php/Projeto/Professor');
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
			redirect("http://www.sapdae.com/index.php/Projeto/Funcionarios");
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

	
			redirect("http://www.sapdae.com/index.php/Projeto/Funcionarios");
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

	
			redirect("http://www.sapdae.com/index.php/Projeto/Funcionarios");
		
		 		
	}
	public function editarFuncionario($MatriculaFuncionario=NULL)	{						

		if($MatriculaFuncionario == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/Funcionarios');
		}

			
		$this->load->model('ManterFuncionario_model', 'ManterFuncionarios');


		$query = $this->ManterFuncionarios->getFuncionarioByID($MatriculaFuncionario);


		if($query == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/Funcionarios');
		}
	
	
		$dados['funcionario'] = $query;


		$this->load->view('EditarFuncionarios', $dados);		
	}
	public function deletarFuncionario($MatriculaFuncionario=NULL)
	{

		if($MatriculaFuncionario == NULL) {
			redirect('http://www.sapdae.com/index.php/Projeto/Funcionarios');
		}
			
		$this->load->model('ManterFuncionario_model', 'ManterFuncionarios');

		$query = $this->ManterFuncionarios->getFuncionarioByID($MatriculaFuncionario);


		if($query != NULL) {
			

			$this->ManterFuncionarios->apagarFuncionario($query->MatriculaFuncionario);
			redirect('http://www.sapdae.com/index.php/Projeto/Funcionarios');

		} else {

			redirect('http://www.sapdae.com/index.php/Projeto/Funcionarios');
		}	
	}





	public function home(){

		$this->load->model('Historico_model', 'historicos');			

		$data['historico'] = $this->historicos->getHistorico();

		$data['reserva'] = $this->historicos->getHistoricoReserva();

		$this->load->model('ManterGerente_model', 'ManterGerente');	

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('Principal',$data);

	}
	public function Ajuda(){

		$this->load->view('ajuda');
		
	}
	public function alugar(){

		$this->load->model('ManterServidor_model', 'ManterServidor');			

		$data['listservidor'] = $this->ManterServidor->getServidor();

		$this->load->model('ManterProjetor_model', 'ManterProjetor');

		$data['listprojetor'] = $this->ManterProjetor->getProjetor();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('Alugar', $data);
	}
	public function devolver(){

		$this->load->model('ManterServidor_model', 'ManterServidor');			

		$data['listservidor'] = $this->ManterServidor->getServidor();

		$this->load->model('ManterProjetor_model', 'ManterProjetor');

		$data['listprojetor'] = $this->ManterProjetor->getProjetor();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('devolver', $data);
	}
	public function ManterProjetor(){
		$this->load->model('ManterProjetor_model', 'ManterProjetores');			

		$data['sapdae'] = $this->ManterProjetores->getProjetor();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('ManterProjetor',$data);
	}
	public function Funcionarios(){
		$this->load->model('ManterFuncionario_model', 'ManterFuncionarios');			

		$data['sapdae'] = $this->ManterFuncionarios->getFuncionario();

		$this->load->view('Funcionarios',$data);
	}
	public function Historico(){
		$this->load->model('Historico_model', 'historicos');			

		$data['sapdae'] = $this->historicos->getHistorico();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('Historico',$data);
	}
	public function HistoricoReserva(){
		$this->load->model('Historico_model', 'historicos');			

		$data['sapdae'] = $this->historicos->getHistoricoReserva();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('HistoricodeReserva',$data);
	}
	public function Professor(){

		$this->load->model('ManterProfessor_model', 'ManterProfessores');			

		$data['sapdae'] = $this->ManterProfessores->getProfessor();

		$this->load->view('Professor',$data);
	}
	public function Usuarios(){
		$this->load->view('Usuarios');
	}
	public function Projetores(){
		$this->load->view('Projetor');
	}
	public function Reservar(){

		$this->load->model('ManterServidor_model', 'ManterServidor');			

		$data['listservidor'] = $this->ManterServidor->getServidor();

		$this->load->model('ManterProjetor_model', 'ManterProjetor');

		$data['listprojetor'] = $this->ManterProjetor->getProjetor();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('Reservar', $data);
	}
	public function ReceberReservado(){

		$this->load->model('ManterServidor_model', 'ManterServidor');			

		$data['listservidor'] = $this->ManterServidor->getServidor();

		$this->load->model('ManterProjetor_model', 'ManterProjetor');

		$data['listprojetor'] = $this->ManterProjetor->getProjetor();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('RReservar', $data);
	}
	public function Servidor(){
		$this->load->model('ManterServidor_model', 'ManterServidores');			

		$data['sapdae'] = $this->ManterServidores->getServidor();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('Servidor',$data);
	}
	public function CadastroProjetores(){

		$this->load->model('ManterProjetor_model', 'ManterProjetor');

		$data['valido'] = $this->ManterProjetor->getProjetor();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");
		
		$this->load->view('CadastroProjetores',$data);
	}
	public function CadastroServidor(){

		$this->load->model('ManterServidor_model', 'ManterServidor');			

		$data['valido'] = $this->ManterServidor->getServidor();

		$this->load->model('ManterGerente_model','ManterGerente');

		$data['nomeTop'] = $this->ManterGerente->getGerente();

		$data['nome'] = $this->session->userdata("gerente");

		$this->load->view('CadastroServidores',$data);
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
