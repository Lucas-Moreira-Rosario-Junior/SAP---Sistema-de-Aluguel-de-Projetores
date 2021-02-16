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

<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<link rel="icon" href="../../bootstrap/icones/projetor.ico">

<link href="../../bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all"/>

<script src="../../bootstrap/js/jquery-2.1.1.min.js"></script> 

<link href="../../bootstrap/css/font-awesome.css" rel="stylesheet"> 

<link href='../../bootstrap/css/login.css' rel='stylesheet' type='text/css'>

<link rel="alternate stylesheet" href="../../bootstrap/css/escuro.css" title="2">

<link rel="alternate stylesheet" href="../../bootstrap/css/claro.css" title="1">

<link rel="alternate stylesheet" href="../../bootstrap/css/Lupa.css" title="3">

<link rel="alternate stylesheet" href="../../bootstrap/css/normal.css" title="4">

<script type="text/javascript" src="../../bootstrap/js/alterar.js"></script>

<script type="text/javascript" src="../../bootstrap/js/alterarLupa.js"></script>
</head>
<body>	
<div class=header-right style="margin-top:20px;margin-right: 20px;">
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
										<ul class="dropdown-menu drp-mnu " style="margin-bottom: 100px;">
											<li id="muda"> <a id="click" href="#"><i class="fa fa-adjust"></i> Contraste</a> </li> 
											<li id="muda"> <a id= "lupa" href="#"><i class="fa fa-search"></i> Zoom</a> </li> 
											
											<div class="img-magnifier-glass"></div>
										</ul>
									</li>
								</ul>
							</div>
						</div>
<div class="signup-page-main">
	<div id="zoom" class="signup-main" style="background-color:#F6FBFF;background-size: cover;min-height: 100px;box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.15);font-family: monospace; font-size:56px;color:black;text-align: center;padding-top: 10px;">Cadastre-se</div>
     <div class="signup-main">  	
    	 <div class="signup-head" style="min-height: 251px;">
				
			</div>
			<div class="signup-block">
				<form action="salvarGerente" method="post">
					<!--<label style="font-size:1.8em" >Qual é seu cargo?</label>
					<br>
					<label style="font-size:1.6em" > Gerente</label>	
					<input type="radio" style="width: 6%;height: 1.1em;">
					<br>
					<label style="font-size:1.6em" > Funcionário do DAE</label>
					<input type="radio" style="width: 6%;height: 1.1em;">-->
					<input type="text" name="MatriculaGerente" placeholder="Matrícula" required autofocus>
					<input type="text" name="nome" placeholder="Nome" required="">
					<input type="text" name="telefone" placeholder="Telefone" required="">
					<input type="password" name="senha" class="lock" placeholder="Senha">
					<input type="text" name="email" placeholder="Email" required="">
					
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									
								</li>
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input id="zoom" type="submit" name="Sign In" value="Cadastre-se">														
				</form>
				<div class="sign-down">
				<h4>Você já tem cadastro? <a style="color:orange" href="../../"> Login aqui.</a></h4>
				</div>
			</div>
    </div>
</div>

<div class="copyrights">
	 <p id="zoom" >© 2020 IFMA. Todos direitos reservados. </p>
</div>	

		<script src="../../bootstrap/js/jquery.nicescroll.js"></script>
		<script src="../../bootstrap/js/scripts.js"></script>

<script src="../../bootstrap/js/bootstrap.js"> </script>

</body>
</html>


                      
						
