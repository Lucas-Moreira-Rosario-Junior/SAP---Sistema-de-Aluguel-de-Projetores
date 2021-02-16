<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="../../bootstrap/css/materializes.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="icon" href="../../bootstrap/icones/projetor.ico">

  <title>Ajuda SAP</title>
</head>

<body>


  <nav>
    <div class="nav-wrapper blue-grey darken-4">
      <a href="#!" class="brand-logo">
        Help SAP<i class="material-icons right">help
        </i>
      </a>

      <!-- <i class="material-icons">help</i> -->
      <ul class="right hide-on-med-and-down">
        <li><a href="../Projeto/home" >Ir para SAP<i class="material-icons left">desktop_windows
            </i></a></li>

        <li><a target="_blank"
            href="https://github.com/Lucas-Moreira-Rosario-Junior/SAP---Sistema-de-Aluguel-de-Projetores"><i
              class="material-icons left">device_hub
            </i>GitHub</a></li>
        <li><a
            href="https://www.google.com/search?client=opera&output=search&tbm=lcl&q=Departamento+de+Computação+-+IFMA+Campus+Monte+Castelo&ludocid=16550209642934900977&lsig=AB86z5Xlb_dEnn26x7eEByla2FdG&sa=X&ved=2ahUKEwjK8ovEoOXuAhUND7kGHUKWAWIQ8m0wBXoECAAQAQ&biw=1326&bih=627&dpr=1#rlfi=hd:;si:16550209642934900977;mv:[[-2.5360707226809702,-44.27782964620661],[-2.53643067731903,-44.27818995379337]]"
            target="_blank"><i class="material-icons left">call_end</i>Contato</a></li>
      </ul>



    </div>
  </nav>
  <div class="page-container">
  <ul id="slide-out" class="sidenav ">
    <li><div class="user-view blue-grey darken-4">
      <a href="#user"><img class="" src="../../bootstrap/images/ifma_novo.jpg" height="90px" ></a>
      <a href="#name"><span class="white-text name">SAP</span></a>
      <a href="#email"><span class="white-text email">portal.ifma.edu.br</span></a>
    </div></li>
    <li><div class="divider"></div><a class="waves-effect"href="#start">Start</a><div class="divider"></div></li>
    <li><a class="waves-effect" href="#cadastre-se">Cadastre-se</a><div class="divider"></div></li>
    <li><a class="waves-effect" href="#login">Login</a><div class="divider"></div></li>
    <li><a class="waves-effect" href="#home">Home</a><div class="divider"></div></li>
    <li><a class="waves-effect" href="#cadastro">Cadastro</a><div class="divider"></div></li>
    <li><a class="waves-effect" href="#projetores">Projetores</a><div class="divider"></div></li>
    <li><a class="waves-effect" href="#reservas">Reservas</a><div class="divider"></div></li>
    <li><a class="waves-effect" href="#acessibilidade">Acessibilidade</a><div class="divider"></div></li>
    <li><a class="waves-effect" href="#Sair">Sair</a><div class="divider"></div></li>
  </ul>



  <div class="row">


    <a href="#" data-target="slide-out" class="sidenav-trigger" ><i class="material-icons "style="font-size:40px;">menu</i></a>
    
      <div class="col s12">
        <!-- Teal page content  -->
        <section id="start" class="content-page">
          <div class="row">
            <div class="col s12">
              <h4>Start</h4>
              <p>A aplicação desenvolvida é chamada Sistema de Aluguel de Projetores - SAP.
                É um sistema web que monitora o aluguel de projetores no Departamento Estudantil no IFMA fazendo o
                gerenciamento de entrega e reserva desses equipamentos audiovisuais. Sua principal motivação foi à
                necessidade de um gerenciamento eficiente do aluguel desses equipamentos atrelado à agilidade no
                processo
                de entrega e reserva de forma remota.</p>
            </div>
            <div class="col s12">
              <div class="row center">
                <a class="waves-effect waves-light blue-grey darken-4 btn-large" href="../Projeto/home" >VOLTAR</a>
              </div>
            </div>
          </div>

        </section>
        <section id="cadastre-se" class="content-page">
          <div class="col s12">
            <h4>Cadastre-se</h4>
            <p>Tela de cadastro para novos usuários para que possam realizar a criação de uma nova conta para acessar o sistema,
               onde deve ser informado seu cargo e seu departamento ou setor caso tenha.</p>
            
          </div>
          <div class="col s12 w100">
            <img src="../../bootstrap/images/cadastre.JPG" alt="cadastre-se print" class="responsive-img" width="400px">
          </div>
        </section>
        <section id="login" class="content-page">
          <div class="col s12">
            <h4>Login</h4>
            <p>Tela de autenticação de usuários do sistema iniciando uma seção com seu e-mail e senha,
              caso o usuário não se lembre da senha pode recuperar a mesma no link abaixo
              “Esqueceu a senha” da mesma forma para o cadastro,
              habilitando a função “Lembre de Mim” seus dados são salvos na tela de login.</p>
          </div>
          <div class="col s12 w100">
            <img src="../../bootstrap/images/login.JPG" alt="login print" class="responsive-img" width="400px">
          </div>
        </section>
        <section id="home" class="content-page">
          <div class="col s12">
            <h4>Home</h4>
            <p>Tela Inicial do sistema composto de botões principais para alugar reservar devolver e cadastro,
              funções exercidas frequentemente pelo usuário.</p>
            <ul class="collapsible">
              <li>
                <div class="collapsible-header"><i class="material-icons">repeat</i>Alugar/Devolver</div>
                <div class="collapsible-body"><span>Leva até o formulário Aluguel com a opção Alugar caso seja feito um aluguel ou Devolver caso seja uma devolução.</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">laptop</i>Reservar</div>
                <div class="collapsible-body"><span>Leva até o formulário Reservar com a opção Reservar caso seja feito uma reserva ou Receber reservado caso seja uma entrega de reserva</span></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">edit</i>Listar/Cadastrar</div>
                <div class="collapsible-body"><span>Lista de Projetores cadastrado no sistema com suas devidas informações.</span></div>
              </li>
            </ul>
          </div>
          <div class="col s12">
            <img src="../../bootstrap/images/home.JPG" alt="home print" class="responsive-img" >
          </div>
        </section>
        <section id="cadastro" class="content-page">
          <div class="col s12">
            <h4>Cadastro</h4>
            <p>O cadastro de projetores é uma tela com formulário onde você pode prencher com o
                número de série especificado na etiqueta do projetor acompanhado
                 do tombo codigo na etiqueta fisica do projetor, colocando também suas descrições como quantidades de cabo VGA, tamanho 
                ou cor do projetor ou observações técnicas
            </p>
          </div>
          <div class="col s12">
            <img src="../../bootstrap/images/cadastro.JPG" alt="cadastro" class="responsive-img">
          </div>
        </section>
        <section id="projetores" class="content-page">
          <div class="col s12">
            <h4>Projetores</h4>
            <p>Na tela Projetores contém uma lista de projetores com possível
              edição e alteração através dos ícones à direita como inserir editar e remover</p>
          </div>
          <div class="col s12">
            <img src="../../bootstrap/images/Projetor.jpg" alt="projetores" class="responsive-img">
          </div>
        </section>
        <section id="reservas" class="content-page">
          <div class="col s12">
            <h4>Reservas</h4>
            <p>Tela com formulario que solicitam informações para a reserva de projetores onde ao final o usuário pode fazer a reserva ou receber o projetor caso esteja reservado .
            </p>
          </div>
          <div class="col s12">
            <img src="../../bootstrap/images/reservar.JPG" alt="login print" class="responsive-img" width="">
          </div>
        </section>
        <section id="acessibilidade" class="content-page">
          <div class="col s12">
            <h4>Acessibilidade</h4>
            <p>Modúlo para auxiliar usuários com dificuldades por portarem algum tipo de necessidade especial, com recursos como contraste e zoom</p>
          </div>

          <div class="col s12">
            <img src="../../bootstrap/images/acessibilidade.JPG" class="responsive-img" alt="sair">
          </div>
        </section>
        <section id="Sair" class="content-page">
          <div class="col s12">
            <h4>Sair</h4>
            <p>Fazendo Logout e encerrando a seção do sistema no canto superior direito</p>
          </div>

          <div class="col s12">
            <img src="../../bootstrap/images/sair.JPG" class="responsive-img" alt="sair">
          </div>
        </section>
        
      </div>
    
  </div>
</div>
  <footer class="page-footer blue-grey darken-4">
    <div class="container ">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Duvidas ou sugestões entre em contato conosco</h5>
          <p class="grey-text text-lighten-4"> Getúlio Vargas, Nº 04, Monte Castelo, São Luís-MA, CEP: 65030-005.</p>
          <p class="grey-text text-lighten-4">(98) 3261-9800</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Autores</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Luis Felipe Porto</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Lucas Morreira</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Hélio Fonseca</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Paulo Furtado</a></li>
          </ul>
          <img src="../../bootstrap/images/ifma_novo.jpg" alt="IFMA" height="100px">
        </div>
      </div>
    </div>
    <div class="footer-copyright darken-1">
      <div class="container">
        © 2020 IFMA
      </div>
    </div>
  </footer>

  <script src="../../bootstrap/js/ajuda.js"></script>
</body>

</html>