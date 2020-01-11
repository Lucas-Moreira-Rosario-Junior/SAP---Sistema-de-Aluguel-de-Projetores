<?php
include'./conection.php';
try
{
		$database = 'exemplo';
	
	if($_GET["action"] == "list")
	{
		//Get records from database
		$result = conecta("select * from estudante", $database);
		
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	
	else if($_GET["action"] == "create")
	{
				$query="INSERT INTO estudante(nome, idade) VALUES('" . $_POST["nome"] . "', '" . $_POST["idade"] . "')"; //query para inserir um estudante
		$result = conecta($query, $database);
		
				$result = conecta("SELECT * FROM estudante WHERE id = LAST_INSERT_ID();", $database); //query para retornar uma lista de estudantes incluindo o ultimo inserido
		$row = mysql_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
		else if($_GET["action"] == "update")
	{
		$query="UPDATE estudante SET nome = '" . $_POST["nome"] . "', idade = '" . $_POST["idade"] . "' WHERE id = '" . $_POST["id"] . "'";
		$result = conecta($query, $database);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
		else if($_GET["action"] == "delete")
	{
				$result = conecta("DELETE FROM estudante WHERE id = " . $_POST["id"] . "",$database);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
?>
