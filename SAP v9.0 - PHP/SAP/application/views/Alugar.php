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

<link href="../../bootstrap/css/alugar.css" rel="stylesheet">

<link rel="alternate stylesheet" href="../../bootstrap/css/escuro.css" title="2">

<link rel="alternate stylesheet" href="../../bootstrap/css/claro.css" title="1">

<link rel="alternate stylesheet" href="../../bootstrap/css/Lupa.css" title="3">

<link rel="alternate stylesheet" href="../../bootstrap/css/normal.css" title="4">

<script type="text/javascript" src="../../bootstrap/js/alterar.js"></script>

<script type="text/javascript" src="../../bootstrap/js/alterarLupa.js"></script>


    <script src="../../bootstrap/js/modernizr-min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <script src="../../bootstrap/js/chartinator.js" ></script>
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
									  <h1  id="muda">S.A.P</h1>
									
								  								
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
												<div class="user-name">
													<p id="muda">Usuário</p>
													<span id="muda">Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li id="muda"> <a href="#"><i class="fa fa-cog"></i> Configurações</a> </li> 
											<li id="muda"> <a href="#"><i class="fa fa-user"></i> Perfil</a> </li> 
											<li id="muda"> <a href="../../"><i class="fa fa-sign-out"></i> Sair</a> </li>
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
<!--market updates updates-->
	
<!--market updates end here-->
<!--mainpage chit-chating-->
<div  class="chit-chat-layer1">
	<div style="margin-bottom: 25px;" class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">

                            <div id="muda" class="chit-chat-heading">
                                  Alugar
                            </div>
                            
                            	<div id="divCenter">
                                 <form id="formulario" class="form-signin" style="background-color:white" >
        
							        <label id="muda" for="inputMatriculaP" class="label" style="color:#2A2E2A">Matrícula do Professor:</label>
							        <input id="zoom" type="text" id="inputMatriculaP" class="form-control" placeholder="Matrícula Prof(a)" required autofocus>
							        <label id="muda" for="inputEmprestador" class="label" style="color:#2A2E2A">Emprestado por:</label>
							        <input id="zoom" type="text" id="inputEmprestador" class="form-control" placeholder="Nome" required >
							        
							        <label id="muda" for="inputRetirado" class="label" style="color:#2A2E2A">Horário de Retirada:</label>
							        <input id="zoom" type="text" id="inputRetirado" class="form-control" placeholder="Horário de Retirada" required>
							        <label id="muda" for="inputDevolvido" class="label" style="color:#2A2E2A">Horário de Devolução:</label>
							        <input id="zoom" type="text" id="inputDevolvido" class="form-control" placeholder="Horário de Devolução" required>
							        <label id="muda" for="inputRecurso" class="label" style="color:#2A2E2A">Recurso:</label>
							        <input id="zoom" type="text" id="inputRecurso" class="form-control" placeholder="Tombo do Projetor" required>
							         
							       

							        <button  id="muda" class="btn btn-success " type="button" >Confirmar Aluguel</button>
							        <a  href="../projeto/devolver"><button  id="muda" class="btn btn-success " type="button" >Devolver</button></a>
							        
							        


							      </form>
							  </div>
							</div>
						</div>
					</div>
                 
            
<!--main page chit chating end here-->
<!--main page chart start here-->

<!--main page chart layer2-->


<!--climate start here-->

<!--climate end here-->
</div>
 <div class="clearfix"> </div>
<!--inner block end here-->
<!--copy rights start here-->
<div style="margin-top: 25px;" class="copyrights">
	 <p> © 2020 IFMA. Todos direitos reservados. </p>
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