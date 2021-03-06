<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sistema de Aluguel de Projetores</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="icon" href="../../bootstrap/icones/projetor.ico">
<link href="../../bootstrap/css/bootHistorico.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="../../bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="../../bootstrap/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->

<link href="../../bootstrap/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href="../../bootstrap/css/calendario.css" rel="stylesheet">

<link rel="alternate stylesheet" href="../../bootstrap/css/escuro.css" title="2">

<link rel="alternate stylesheet" href="../../bootstrap/css/claro.css" title="1">

<link rel="alternate stylesheet" href="../../bootstrap/css/Lupa.css" title="3">

<link rel="alternate stylesheet" href="../../bootstrap/css/normal.css" title="4">

<script type="text/javascript" src="../../bootstrap/js/alterar.js"></script>

<script type="text/javascript" src="../../bootstrap/js/alterarLupa.js"></script>
<!-- Calendario -->
    <script src="../../bootstrap/js/modernizr-min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="../../bootstrap/js/chartinator.js" ></script>
<!--geo chart-->

<!--skycons-icons-->
<script src="../../bootstrap/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									  <h1>S.A.P</h1>
								  								
							</div>
								<div class="search-box">
									<form>
										<input type="text" placeholder="Buscar ..." required="">	
										<input type="submit" value="">		
									</form>
								</div>
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="../../bootstrap/images/p1.png" alt=""> </span> 
												<div id="zoom" class="user-name">
													<p id="muda">Usuário</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Configurações</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Perfil</a> </li> 
											<li> <a href="../../"><i class="fa fa-sign-out"></i> Sair</a> </li>
										</ul>
									</li>
								</ul>
							</div>
								<div class="profile_details">	

								<ul>
									
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="../../bootstrap/fotos/acess.png" alt=""> </span> 
												<div id="zoom" class="user-name">
													<p id="muda">Acessibilidade</p>
													
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li id="muda"> <a id="click" href="#"><i class="fa fa-adjust"></i> Contraste</a> </li> 
											<li id="muda"> <a id= "lupa" href="#"><i class="fa fa-search"></i> Zoom</a> </li> 
											
											<div class="img-magnifier-glass"></div>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<div class="page-container">

      <div class="row">
        <h1>Lista de Professores</h1>

        <a id="zoom" href="#" class="btn btn-success margin-button15" style="margin-top: 15px;margin-bottom:10px;width: 200px;">Inserir Professor</a>
                
        <table class="table table-bordered">
            
            <thead>
                <tr>
                  <th class="text-center">Matricula</th>
                  <th class="text-center">Nome Completo</th>
                  <th class="text-center">Departamento</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Telefone</th>
                  <th class="text-center">Opções</th>
                </tr>
            </thead>

            		<tr>	    
			<td>2012857331</td>	    
			<td>CARLOS ALBERTO DE SOUSA REIS</td>	    
			<td>DAL</td>	    
			<td>Carlos@ifma.edu.br</td>
			<td>(98)98457-1475</td>
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>	

		
		</tr>
		<tr>	    
			<td>2012060504</td>	    
			<td>ANDRESSA ROCHA NUNES</td>	    
			<td>DEMAT</td>	    
			<td>Andressa@ifma.edu.br</td>
			<td>(98)99958-7481</td>	
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>    
			
		</tr>
		<tr>	    
			<td>2013154863</td>	    
			<td>CARLOS DENNIS M. LINDOSO</td>	    
			<td>DAI</td>	    
			<td>Carlos.Dennis@ifma.edu.br</td>
			<td>(98)98686-5478</td>	
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>    
			
		</tr>
		<tr>	    
			<td>2015897589</td>	    
			<td>GÉSSICA LIMA DE OLIVEIRA DINIZ</td>	    
			<td>EEL</td>	    
			<td>Gessica@ifma.edu.br</td>
			<td>(98)98987-8711</td>	 
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>   
			
		</tr>
		<tr>	    
			<td>2009847120</td>	    
			<td>JOSICLENE DE JESUS SANTOS ALMEIDA</td>	    
			<td>DEMAT</td>	    
			<td>Josiclene@ifma.edu.br</td>	
			<td>(98)98813-0950</td> 
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>   
			
		</tr>	
		<tr>	    
			<td>2012060504</td>	    
			<td>MAGDIEL NEVES MELLO</td>	    
			<td>DFS</td>	    
			<td>Magdiel@ifma.edu.br</td>
			<td>(98)98797-8021</td>	
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>    
		
		</tr>
		<tr>	    
			<td>2012060504</td>	    
			<td>RAIMUNDO NONATO SOUSA JÚNIOR</td>	    
			<td>DETEC</td>	    
			<td>Raimundo@ifma.edu.br</td>
			<td>(98)98874-7452</td>	
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>    
			
		</tr>
		<tr>	    
			<td>2012060504</td>	    
			<td>VANESSA RAQUEL DOS SANTOS</td>	    
			<td>DFS</td>
			<td>Vanessa@ifma.edu.br</td>
			<td>(98)98565-7545</td>	
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>    
			
		</tr>
		<tr>	    
			<td>2012060504</td>	    
			<td>WERDSON CAMPOS TORRES</td>	    
			<td>DAL</td>	    
			<td>Werdson@ifma.edu.br</td>
			<td>(98)98513-9893</td>
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>	    
		
		</tr>
		<tr>	    
			<td>2012060504</td>	    
			<td>ALAN DA CRUZ DOS SANTOS </td>	    
			<td>DAI</td>	    
			<td>Alan@ifma.edu.br</td>
			<td>(98)99988-7754</td>	
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>    
		
		</tr>
		<tr>	    
			<td>2012060504</td>	    
			<td>ALEXSANDRO SOARES TEIXEIRA</td>	    
			<td>DAI</td>	    
			<td>Alexsandro@ifma.edu.br</td>
			<td>(98)98658-7451</td>
			<td class="text-center">
             <a href="#" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="#" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             <a href="#" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
             </td>	    
		
		</tr>
                                 

        </table>

        <div class="col-md-12 market-update-gd">
				<img src="../../bootstrap/fotos/espaco.png" width=100% height=600>
		</div>

      </div>

    </div><!-- /.container -->
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 IFMA. Todos direitos reservados. </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a id="zoom3" href="../Projeto/home"><i class="fa fa-home"></i><span>Página Principal</span></a></li>
		        <li><a id="zoom3" href="../Projeto/Usuarios"><i class="fa fa-graduation-cap"></i><span>Listar Usuários</span></a>
		        </li>
		        <li id="menu-comunicacao" ><a id="zoom3" href="../Projeto/Projetores"><i class="fa fa-television"></i><span>Listar Projetores</span></a>
		        </li>
		          <li><a id="zoom3" href="../Projeto/Historico"><i class="fa fa-book nav_icon"></i><span>Histórico de Aluguéis</span></a></li>
		          <li><a id="zoom3" href="../Projeto/Funcionarios"><i class="fa fa-male"></i><span>Listar Funcionários</span></a></li>
		         <li><a id="zoom3" href="#"><i class="fa fa-cog"></i><span>Ajuda</span></a>
		         </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="../../bootstrap/js/jquery.nicescroll.js"></script>
		<script src="../../bootstrap/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="../../bootstrap/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     