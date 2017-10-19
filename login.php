<?php

$login=$_GET["login"];
$senha=$_GET["senha"];

//$login="Salvador";
//$senha="123456";

$db="teste";

$conn=mysqli_connect('localhost','root','') or die('Erro ao conectar no mysql');
$banco=mysqli_select_db($conn,$db) or die('Erro ao selecionar o banco de dados');

//echo"...conectou!!! ...";

//echo"...login: ".$login;
//echo"...senha: ".$senha;

$resultado=mysqli_query($conn,"SELECT * FROM usuario WHERE login='".$login."' AND senha='".$senha."'");
$linhas=mysqli_num_rows($resultado);

mysqli_close($conn);

//echo"...Número de Resultados: ".$linhas."...";


if ($linhas>0){
	
	if ($linhas==1){
			//echo "OK, achei um usuário...";
			$resp=1;
	}
	
	if ($linhas>1){
			//echo "Mais que 1 resultado!!!!!...";
			$resp=2;
	}
	
	}else{
		//echo"Nenhum resultado encontrado....";
		$resp=0;
	}	//fim do if
		

	
	//respostas: 0-Usuario ou senha nao encontrados; 1-Usuario encontrado; 2-Erro, mais que 1 resultado;
	echo $resp;
?>
