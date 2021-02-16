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
<link rel="icon" href="../../../bootstrap/icones/projetor.ico">
<link href="../../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<link href="../../../bootstrap/css/styleProj.css" rel="stylesheet" type="text/css" media="all"/>

<script src="../../../bootstrap/js/jquery-2.1.1.min.js"></script> 


<link href="../../../bootstrap/css/font-awesome.css" rel="stylesheet"> 

<link href="../../../bootstrap/css/botao.css" rel="stylesheet">

<link rel="alternate stylesheet" href="../../../bootstrap/css/escuro.css" title="2">

<link rel="alternate stylesheet" href="../../../bootstrap/css/claro.css" title="1">

<link rel="alternate stylesheet" href="../../../bootstrap/css/Lupa.css" title="3">

<link rel="alternate stylesheet" href="../../../bootstrap/css/normal.css" title="4">


<script type="text/javascript" src="../../../bootstrap/js/alterar.js"></script>

<script type="text/javascript" src="../../../bootstrap/js/alterarLupa.js"></script>

    <script src="../../../bootstrap/js/modernizr-min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    
    <script src="../../../bootstrap/js/chartinator.js" ></script>



<script src="../../../bootstrap/js/skycons.js"></script>

</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
 
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									  <h1>S.A.P</h1>
								  								
							</div>
								
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="../../../bootstrap/images/p1.png" alt=""> </span> 
												<div id="zoom" class="user-name">
													<p><?php 
													foreach ($nomeTop as $gerente){
														if($gerente->MatriculaGerente == $nome){
															echo ''.$gerente->nomeGerente.'';
														}
													}
													?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											
											<li> <a href="/sap/"><i class="fa fa-sign-out"></i> Sair</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="profile_details">	

								<ul>
									
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="../../../bootstrap/fotos/acess.png" alt=""> </span> 
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


     <div class="signup-main">
     <div class="cabeca" style="background-color:#F6FBFF;width: 100%;margin: 0 auto;background-size: cover;min-height: 100px;box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.15);"><h1 style="font-family: monospace; font-size:46px;color:black;text-align: center;padding: center">Atualizar Projetores</h1></div>  	
    	 <div class="signup-head">
			</div>
			<div class="signup-block">

				<form action="../editarProj" name="form_add" method="post">

					<input id="zoom" type="text" name="idProjetor" value="<?php echo $projetor->idProjetor ?>" placeholder="Número" required="">

					<input id="zoom" type="text" name="Tombo" value="<?php echo $projetor->Tombo ?>" placeholder="Tombo" required="">

					<label id="zoom" for="Descricao">Descrição:</label>

					<div id="zoom">

				    <textarea name="Descricao"   style="height: 200px; width: 100%"><?php echo $projetor->Descricao ?></textarea>

    				</div>
					<div class="forgot-top-grids">
					
						
						<div class="clearfix"> </div>
					</div>
					<table style="width:100%">
					<input type="hidden" name="idProjetorAnt" value="<?php echo $projetor->idProjetor ?>">
					<td><input id="zoom3" class="botao" type="submit" name="Sign In" value="Confirmar Edição"></td>
					<td><a href="../../Projeto/ManterProjetor"><input id="zoom3" class="botao" type="button" name="Sign In" value="Voltar"></a></td>
					</table>
					

				</form>
			</div>
    </div>

<div class="main-page-charts">
   <div class="main-page-chart-layer1">
		
		
	 <div class="clearfix"> </div>
  </div>
 </div>



</div>

<div class="copyrights">
	 <p>© 2020 IFMA. Todos direitos reservados. </p>
</div>	

</div>
</div>

    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a id="zoom3" href="../../Projeto/home"><i class="fa fa-home"></i><span>Página Principal</span></a></li>
		        <li><a id="zoom3" href="../../Projeto/Servidor"><i class="fa fa-graduation-cap"></i><span>Listar Servidores</span></a>
		        </li>
		        
		          <li><a id="zoom3" href="../../Projeto/Historico"><i class="fa fa-book nav_icon"></i><span>Histórico de Aluguéis</span></a></li>
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

		<script src="../../../bootstrap/js/jquery.nicescroll.js"></script>
		<script src="../../../bootstrap/js/scripts.js"></script>
		
<script src="../../../bootstrap/js/bootstrap.js"> </script>

</body>
</html>                     