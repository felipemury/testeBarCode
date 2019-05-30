<?php

/*
	Valores necessários para criar conexão com servidor MySQL 
*/
$servidor = "191.179.78.219";
$usuario  = "root";
$senha    = "";
$banco    = "bancogd";

 
 // cria a conexão com o banco de dados MySQL

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

/*
	Os comandos a seguir são necessários para cadastrar caracteres acentuados e cedilha no banco de dados
*/

mysqli_query($conexao,"SET NAMES 'utf8'");
mysqli_query($conexao,'SET character_set_connection=utf8');
mysqli_query($conexao,'SET character_set_client=utf8');
mysqli_query($conexao,'SET character_set_results=utf8');
?>