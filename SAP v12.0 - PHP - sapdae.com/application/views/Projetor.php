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
<link href="../../bootstrap/css/bootstrap-min.css" rel="stylesheet" type="text/css" media="all">

<link href="../../bootstrap/css/style-min.css" rel="stylesheet" type="text/css" media="all"/>

<script src="../../bootstrap/js/jquery-2.1.1.min.js"></script> 

<link href="../../bootstrap/css/font-awesome-min.css" rel="stylesheet">

<link href="../../bootstrap/css/font-awesome.css" rel="stylesheet">

<link rel="alternate stylesheet" href="../../bootstrap/css/escuro.css" title="2">

<link rel="alternate stylesheet" href="../../bootstrap/css/claro.css" title="1">

<link rel="alternate stylesheet" href="../../bootstrap/css/Lupa.css" title="3">

<link rel="alternate stylesheet" href="../../bootstrap/css/normal.css" title="4">

<script type="text/javascript" src="../../bootstrap/js/alterar.js"></script>

<script type="text/javascript" src="../../bootstrap/js/alterarLupa.js"></script> 



</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									  <h1 id="muda">S.A.P</h1>
								   								
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
													<p id="muda"><?php 
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
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Projetores</h2>
    	</div>
    	<div id="zoom" class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="../../bootstrap/fotos/projetorpreto1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="../../bootstrap/fotos/projetorpreto1.jpg" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h5>Projetor 1</h5>
					<h6 style="color:white;">1 Cabo VGA;</h6>
					<h6 style="color:white;">1 Cabo HDMI;</h6>
					<h6 style="color:white;">1 Cabo de força.</h6>
	    			
	    			
	    		</div>
    		</div>
    	</div>
    	<div id="zoom" class="col-md-3 product-grid">
    		<div class="product-items">
	    		   <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="../../bootstrap/fotos/projetorpreto2.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="../../bootstrap/fotos/projetorpreto2.jpg" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h5>Projetor 2</h5>
					<h6 style="color:white;">1 Cabo VGA;</h6>
					<h6 style="color:white;">1 Cabo de força.</h6>
	    		</div>
    		</div>
    	</div>
    	<div id="zoom" class="col-md-3 product-grid">
    		<div class="product-items">
	    		<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="../../bootstrap/fotos/projetoramarelo1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="../../bootstrap/fotos/projetoramarelo1.jpg" alt="">
				</div>
	    		<div class="produ-cost">
	    			<h5>Projetor 3</h5>
					<h6 style="color:white;">1 Cabo VGA;</h6>
					<h6 style="color:white;">1 Teclado e 1 Mouse.</h6>
					<h6 style="color:white;">1 Cabo de força.</h6>
	    		</div>
    		</div>
    	</div>
    	<div id="zoom" class="col-md-3 product-grid">
    		<div class="product-items">
	    		  <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="../../bootstrap/fotos/projetorbranco.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="../../bootstrap/fotos/projetorbranco.jpg" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h5>Projetor 4</h5>
	    			<h6 style="color:white;">Projetor FULL HD;</h6>
					<h6 style="color:white;">1 Cabo VGA;</h6>
					<h6 style="color:white;">1 Cabo HDMI.</h6>
					<h6 style="color:white;">1 Cabo de força.</h6>
	    		</div>
    		</div>
    	</div>
    	<div id="zoom" class="col-md-3 product-grid">
    		<div class="product-items">
	    		 <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="../../bootstrap/fotos/projetorpreto3.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="../../bootstrap/fotos/projetorpreto3.jpg" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h5>Projetor 5</h5>
					<h6 style="color:white;">1 Cabo VGA;</h6>
		
	    		</div>
    		</div>
    	</div>
    	<div id="zoom" class="col-md-3 product-grid">
    		<div class="product-items">
	    		  <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="../../bootstrap/fotos/projetoramarelo2.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="../../bootstrap/fotos/projetoramarelo2.jpg" alt="">
					</div>
	    		<div class="produ-cost">
	    			<h5>Projetor 6</h5>
					<h6 style="color:white;">1 Cabo VGA;</h6>
					<h6 style="color:white;">1 Teclado e 1 Mouse.</h6>
					<h6 style="color:white;">1 Cabo de força.</h6>
	    		</div>
    		</div>
    	</div>
    	<div id="zoom" class="col-md-3 product-grid">
    		<div class="product-items">
	    		<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="../../bootstrap/fotos/projetorpreto4.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="../../bootstrap/fotos/projetorpreto4.jpg" alt="">
				</div>
	    		<div class="produ-cost">
	    			<h5>Projetor 7</h5>
					<h6 style="color:white;">1 Cabo HDMI.</h6>
					<h6 style="color:white;">1 Cabo de força.</h6>
	    		</div>
    		</div>
    	</div>
    	<div id="zoom" class="col-md-3 product-grid">
    		<div class="product-items">
	    		<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="../../bootstrap/fotos/projetorpreto5.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="../../bootstrap/fotos/projetorpreto5.jpg" alt="">
				</div>
	    		<div class="produ-cost">
	    			<h5>Projetor 8</h5>
	    			<h6 style="color:white;">1 Cabo VGA.</h6>
					<h6 style="color:white;">1 Cabo HDMI.</h6>
					<h6 style="color:white;">1 Cabo de força.</h6>
	    		</div>
    		</div>
    	</div>
      <div class="clearfix"> </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="../../bootstrap/css/magnific-popup.css">
			<script type="text/javascript" src="../../bootstrap/js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>


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
		        <li id="menu-home" ><a id="zoom3" href="../Projeto/home"><i class="fa fa-home"></i><span>Página Principal</span></a></li>
		        <li><a id="zoom3" href="../Projeto/Servidor"><i class="fa fa-graduation-cap"></i><span>Listar Servidores</span></a>
		        </li>
		       
		          <li><a id="zoom3" href="../Projeto/Historico"><i class="fa fa-book nav_icon"></i><span>Histórico de Aluguéis</span></a></li>
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

		<script src="../../bootstrap/js/jquery.nicescroll.js"></script>
		<script src="../../bootstrap/js/scripts.js"></script>

<script src="../../bootstrap/js/bootstrap.js"> </script>

</body>
</html>