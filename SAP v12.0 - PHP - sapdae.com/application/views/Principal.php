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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="application/x-javascript">addEventListener("load", function(){setTimeout(hideURLbar, 0); }, false); function hideURLbar(){window.scrollTo(0,1);}
</script>
<link rel="icon" href="../../bootstrap/icones/projetor.ico">
<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<link href="../../bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all"/>

<script src="../../bootstrap/js/jquery-2.1.1.min.js"></script> 

<link href="../../bootstrap/css/font-awesome.css" rel="stylesheet"> 

<link href="../../bootstrap/css/cinza.css" rel="stylesheet">

<link rel="alternate stylesheet" href="../../bootstrap/css/escuro.css" title="2">

<link rel="alternate stylesheet" href="../../bootstrap/css/claro.css" title="1">

<link rel="alternate stylesheet" href="../../bootstrap/css/Lupa.css" title="3">

<link rel="alternate stylesheet" href="../../bootstrap/css/normal.css" title="4">

<script type="text/javascript" src="../../bootstrap/js/alterar.js"></script>

<script type="text/javascript" src="../../bootstrap/js/alterarLupa.js"></script>

<script src="../../bootstrap/js/chartinator.js" ></script>

<script src="../../bootstrap/js/skycons.js"></script>

<script src="../../bootstrap/js/cinza.js"></script>

</head>
<body>	

<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
			<div class="header-main">
				<div class="header-left">
					<div class="logo-name">
						<h1 id="muda">S.A.P</h1>
							<i class="fa fa-universal-access"></i>		  							
					</div>
				
				<div class="clearfix"> </div>	
				</div>
					<div class="header-right">
						<div class="profile_details">	
							<ul>							
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span class="prfil-img"><img src="../../bootstrap/images/p1.png" alt=""> </span> 
												<div id="zoom" class="user-name">
													<p id="muda">
													<?php 
													foreach ($nomeTop as $gerente){
														if($gerente->MatriculaGerente == $nome){
															echo ''.$gerente->nomeGerente.'';
														}
													}
													?>
													</p>
													<span id="muda">Administrator</span>
												</div>
											<i class="fa fa-angle-down lnr"></i>
											<i class="fa fa-angle-up lnr"></i>
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
										 
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
										<div class="img-magnifier-glass"></div>
									</ul>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>				
					</div>
				    <div class="clearfix"> </div>	
			</div>
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
			<div class="inner-block">
				<div class="market-updates">
					<div id="zoom" class="col-md-4 market-update-gd">
						<a href="../projeto/alugar"><div class="market-update-block clr-block-1">
							<div class="col-md-8 market-update-left">
								<h3 id="muda" style="font-size: 30px;">Alugar/Devolver</h3>
								<h4 id="muda" >Projetores</h4>
							</div>
							<div class="col-md-4 market-update-right">
								<i class="fa fa-exchange"></i>
							</div>
				  			<div class="clearfix"></div>
						</div></a>
					</div>
					<div id="zoom" class="col-md-4 market-update-gd">
						<a href="../Projeto/Reservar"><div class="market-update-block clr-block-2">
				 			<div class="col-md-8 market-update-left">
								<h3 id="muda">Reservar</h3>
								<h4 id="muda">Projetores</h4>
				  			</div>
							<div class="col-md-4 market-update-right">
								<i class="fa fa-television"> </i>
							</div>
				  			<div class="clearfix"> </div>
						</div></a>
					</div>
					<div id="zoom" class="col-md-4 market-update-gd">
							<a href="../Projeto/ManterProjetor"><div class="market-update-block clr-block-3">
								<div class="col-md-8 market-update-left">
									<h3 id="muda" style="font-size: 30px;">Listar/Cadastrar</h3>
									<h4 id="muda" >Projetores</h4>
								</div>
								<div class="col-md-4 market-update-right">
									<i class="fa fa-pencil-square-o"> </i>
								</div>
				  				<div class="clearfix"> </div>
							</div></a>
					</div>
		   			<div class="clearfix"></div>
				</div>
				<div class="chit-chat-layer1">
					<div id="zoom" class="col-md-12 chit-chat-layer1-left">
               			<div class="work-progres">
                            <div id="muda" class="chit-chat-heading">
                                  Aluguéis Recentes
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    	<tr>
									    	<th>Nº</th>
									    	<th>Servidor</th>
									    	<th>Projetor</th>
									    	<th>Quem Alugou</th>
									    	<th>Horário de Saída</th>
									    	<th>Horário de Chegada</th>
									    	<th>Data</th>
										</tr>
                              		</thead>
                              		<?php
                              			$numero = 1;
                              			foreach ($historico as $alugarEdevolver){
                              			echo '<tbody><tr>';
                                 			echo '<td>'.$numero.'</td>'; 
								            echo '<td>'.$alugarEdevolver->Servidor_MatriculaServidor.'</td>'; 
								            echo '<td>'.$alugarEdevolver->Projetor_idProjetor.'</td>';
								            echo '<td>'.$alugarEdevolver->alugador.'</td>'; 

								            	if($alugarEdevolver->horarioRetirar != NULL){
					                    			echo '<td>'.$alugarEdevolver->horarioRetirar.'</td>'; 
					                    		}else{
					                    			echo '<td> ------------ </td>';	
					                    		}

								            echo '<td>'.$alugarEdevolver->horarioDevolver.'</td>'; 
								            echo '<td>'.$alugarEdevolver->dataAluguel.'</td>'; 
                              			echo '</tr></tbody>';
                              			$numero++;
                              			}
                          			?>
                      			</table>
                  			</div>
                  			<div id="zoom" class="col-md-12 chit-chat-layer1-left" style="margin-top:100px">
                  			<div class="work-progres">
                  				 	<div id="muda" class="chit-chat-heading">
                                  		Reservas Recentes
                            		</div>
                  			<div class="table-responsive">
                                <table class="table table-hover">
                                   <thead>
                                     <tr>
									      <th>N°</th>
									      <th>Servidor</th>
									      <th>Projetor</th>
									      <th>Quem Reservou</th>
									      <th>Horário de Saída</th>
									      <th>Horário de Chegada</th>
									      <th>Data</th>
									    </tr>
                              </thead>
                              <?php
					                $contador = 0;
					                $numero = 1;
					                foreach ($reserva as $reservar)
					                {        
					                    echo '<tbody> <tr>';
					                    	echo '<td>'.$numero.'</td>'; 
					                    	echo '<td>'.$reservar->Servidor_MatriculaServidor.'</td>'; 
					                    	echo '<td>'.$reservar->Projetor_idProjetor.'</td>';
					                    	echo '<td>'.$reservar->reservador.'</td>'; 

					                    		if($reservar->horarioRetirarRes != NULL){
					                    			echo '<td>'.$reservar->horarioRetirarRes.'</td>'; 
					                    		}else{
					                    			echo '<td> ------------ </td>';	
					                    		}
					                    		
					                    	echo '<td>'.$reservar->horarioDevolverRes.'</td>'; 
					                    	echo '<td>'.$reservar->dataReserva.'</td>'; 
					                      
					                    echo '</tr></tbody>';
					                $contador++;
					                $numero++;
					                }
            				  ?>
                      			</table>
                  			</div>
                  		</div>
                  	</div>
             			</div>
      				</div>

      				<div id="zoom" class="col-md-6 chit-chat-layer1-rit">    	
						
							<div class="clearfix"></div>
						
      				</div>
      				
     				<div class="clearfix"> </div>
				</div>
				<div class="main-page-charts">
   					<div class="main-page-chart-layer1">	
	 					<div class="clearfix"> </div>
   					</div>
				</div>
			</div>
			<div class="copyrights" style="margin: 200px;">
	 			<p>© 2020 IFMA. Todos direitos reservados. </p>
			</div>	
		</div>
	</div>
    <div class="sidebar-menu">
		<div class="logo">
			<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			</a>
		</div>		  
		    <div class="menu">
		    		<ul id="menu" >
		      			<li id="menu-home" ><a id="zoom3" href="#"><i class="fa fa-home"></i><span>Página Principal</span></a></li>
		        		<li><a id="zoom3" href="../Projeto/Servidor"><i class="fa fa-graduation-cap"></i><span>Listar Servidores</span></a>
		        		</li>
		          		<li><a id="zoom3" href="../Projeto/historico"><i class="fa fa-book nav_icon"></i><span>Histórico de Aluguéis</span></a></li>
		          		<li><a id="zoom3" href="../Projeto/historicoReserva"><i class="fa fa-book nav_icon"></i><span>Histórico de Reservas</span></a></li>
		          		
		         		<li><a id="zoom3" href="../Projeto/ajuda"><i class="fa fa-cog"></i><span>Ajuda</span></a>
		         		</li>
		      		</ul>
		    </div>
	</div>
	<div class="clearfix"> </div>
</div>

<script>
	var toggle = true;      
	$(".sidebar-icon").click(function() {                
  		if (toggle){
    		$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    		$("#menu span").css({"position":"absolute"});
  		}
  		else{
    		$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    			setTimeout(function() {
      				$("#menu span").css({"position":"relative"});
    			}, 400);
  		}               
        toggle = !toggle;
    });
</script>

<script src="../../bootstrap/js/jquery.nicescroll.js"></script>

<script src="../../bootstrap/js/scripts.js"></script>

<script src="../../bootstrap/js/bootstrap.js"> </script>

</body>
</html>                     