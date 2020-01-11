<?php

function conecta ($sql, $database){
   // $db="chanfuta_facturacao";
//credenciais da base de dados, substitua com as credenciais da tua base de dados
$host='localhost';
$user='root';
$password='root';
$conexao = mysql_connect($host,$user,$password);
if (!$conexao)
  {
  die('Nao foi possivel Conectar ao banco de dados: '.mysql_error());
  }
  else{
      
  }
mysql_select_db($database, $conexao);
$resultado= mysql_query($sql,$conexao);
if (!$resultado)
  {
  die('Erro ao executar a query: ');
  }
  return ($resultado);
  
  
  }
  ?>