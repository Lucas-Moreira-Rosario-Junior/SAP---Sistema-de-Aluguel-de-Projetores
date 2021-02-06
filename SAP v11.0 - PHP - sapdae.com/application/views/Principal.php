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

<link href="../../bootstrap/css/calendario.css" rel="stylesheet">

<link href="../../bootstrap/css/cinza.css" rel="stylesheet">

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
				<div class="search-box">
					<form>
						<input type="text" placeholder="Buscar ..." required="">	
						<input type="submit" value="">		
					</form>
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
					<div id="zoom" class="col-md-6 chit-chat-layer1-left">
               			<div class="work-progres">
                            <div id="muda" class="chit-chat-heading">
                                  Aluguéis Recentes
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    	<tr>
									    	<th></th>
									    	<th>Professor</th>
									    	<th>Projetor</th>
									    	<th>Data</th>
									    	<th>Horário de Saída</th>
									    	<th>Horário de Chegada</th>
										</tr>
                              		</thead>
                              		<tbody>
                                		<tr>
                                 			<td>1</td>
								     		<td>Luís Guilherme</td>
								    		<td>Nº 1</td>
								    		<td>05/12/2019</td>
								    		<td>10:30</td>
								    		<td>12:00</td>
                              			</tr>
                              			<tr>
                              				<td>2</td>
							    			<td>Luís Carlos</td>
							    			<td>Nº 3</td>
							    			<td>03/12/2019</td>
							    			<td>10:30</td>
							    			<td>12:00</td>
                              			</tr>
                              			<tr>
                                  			<td>3</td>
							      				<td>José Castro</td>
							      				<td>Nº 5</td>
							      				<td>03/12/2019</td>
							     				<td>10:30</td>
							      				<td>12:00</td>
                              			</tr>
                              			<tr>
                                  			<td>4</td>
							      			<td>Maria do Carmo</td>
							      			<td>Nº 8</td>
										    <td>02/12/2019</td>
										    <td>10:30</td>
										    <td>12:00</td>
			                            </tr>
			                            <tr>
                                  			<td>5</td>
							      			<td>Miguel Moreira</td>
							      			<td>Nº 2</td>
							      			<td>02/12/2019</td>
							      			<td>10:30</td>
							      			<td>12:00</td>
                              			</tr>
                              			<tr>
                                  			<td>6</td>
							      			<td>Arthur Silva</td>
							      			<td>Nº 7</td>
							      			<td>29/11/2019</td>
							      			<td>10:30</td>
							      			<td>12:00</td>
                              			</tr>
                              			<tr>
                                  			<td>7</td>
							      			<td>Luiza Camila</td>
							      			<td>Nº 8</td>
							      			<td>28/11/2019</td>
							      			<td>10:30</td>
							      			<td>12:00</td>
                              			</tr>
                              			<tr>
                                  			<td>8</td>
							      			<td>Maria Luiza</td>
							      			<td>Nº 1</td>
							      			<td>25/11/2019</td>
							      			<td>10:30</td>
							      			<td>12:00</td>
                              			</tr>
                          			</tbody>
                      			</table>
                  			</div>
             			</div>
      				</div>
      				<div id="zoom" class="col-md-6 chit-chat-layer1-rit">    	
						<div class="calendar">
							<div class="col leftCol">
								<div class="content">
									<h3 class="date" style="color:white">
										<ul>
											<li id="muda">Calendário</li>
											<li id="muda"><span>2020</span></li>
										</ul>
									</h3>
								</div>
							</div>
							<div class="col rightCol">
								<div class="content">
									<h2 id="muda" class="year">2020</h2>
										<ul id="muda" class="months">
											<li id="muda"><a href="#" title="Jan" data-value="1">Jan</a></li>
											<li id="muda"><a href="#" title="Feb" data-value="2" class="selected">Fev</a></li>
											<li id="muda"><a href="#" title="Mar" data-value="3">Mar</a></li>
											<li id="muda"><a href="#" title="Apr" data-value="4">Abr</a></li>
											<li id="muda"><a href="#" title="May" data-value="5">Mai</a></li>
											<li id="muda"><a href="#" title="Jun" data-value="6">Jun</a></li>
											<li id="muda"><a href="#" title="Jul" data-value="7">Jul</a></li>
											<li id="muda"><a href="#" title="Aug" data-value="8">Ago</a></li>
											<li id="muda"><a href="#" title="Sep" data-value="9">Set</a></li>
											<li id="muda"><a href="#" title="Oct" data-value="10">Out</a></li>
											<li id="muda"><a href="#" title="Nov" data-value="11">Nov</a></li>
											<li id="muda"><a href="#" title="Dec" data-value="12">Dez</a></li>
										</ul>
										<div class="clearfix"></div>
										<ul class="weekday">
											<li id="muda"><a href="#" title="Mon" data-value="1">Seg</a></li>
											<li id="muda"><a href="#" title="Tue" data-value="2">Ter</a></li>
											<li id="muda"><a href="#" title="Wed" data-value="3">Qua</a></li>
											<li id="muda"><a href="#" title="Thu" data-value="4">Qui</a></li>
											<li id="muda"><a href="#" title="Fri" data-value="5">Sex</a></li>
											<li id="muda"><a href="#" title="Say" data-value="6">Sáb</a></li>
											<li id="muda"><a href="#" title="Sun" data-value="7">Dom</a></li>
										</ul>
										<div class="clearfix"></div>
										<ul class="days">
										<script>
											for( var _i = 26; _i <= 31; _i += 1 ){
												var _addClass = 'class="event"';
												document.write( '<li id="muda"><a href="#" title="'+_i+'" data-value="'+_i+'"'+_addClass+'>'+_i+'</a></li>' );
											}
											for( var _i = 1; _i <= 29; _i += 1 ){
												var _addClass = '';
												/*if( _i === 12 ){ _addClass = ' class="selected"'; }
												switch( _i ){
													case 8:
													case 10:
													case 27:
													_addClass = ' class="event"';
													break;
												}*/
												document.write( '<li><a href="#" title="'+_i+'" data-value="'+_i+'"'+_addClass+'>'+_i+'</a></li>' );
											}
											for( var _i = 1; _i <= 7; _i += 1 ){
												var _addClass = 'class="event"';
												document.write( '<li id="muda"><a href="#" title="'+_i+'" data-value="'+_i+'"'+_addClass+'>'+_i+'</a></li>' );
											}
										</script>
										</ul>
										<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
      				</div>
     				<div class="clearfix"> </div>
				</div>
				<div class="main-page-charts">
   					<div class="main-page-chart-layer1">	
	 					<div class="clearfix"> </div>
   					</div>
				</div>
			</div>
			<div class="copyrights" >
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
		        		<li><a id="zoom3" href="../Projeto/Usuarios"><i class="fa fa-graduation-cap"></i><span>Listar Usuários</span></a>
		        		</li>
		        		<li><a id="zoom3" href="../Projeto/Projetores"><i class="fa fa-television"></i><span>Listar Projetores</span></a>
						</li>
		          		<li><a id="zoom3" href="../Projeto/historico"><i class="fa fa-book nav_icon"></i><span>Histórico de Aluguéis</span></a></li>
		          		<li><a id="zoom3" href="../Projeto/Funcionarios"><i class="fa fa-male"></i><span>Listar Funcionários</span></a></li>
		         		<li><a id="zoom3" href="#"><i class="fa fa-cog"></i><span>Ajuda</span></a>
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