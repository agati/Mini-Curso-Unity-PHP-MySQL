<?php

$login=$_GET["login"];
$senha=$_GET["senha"];

//$login="Salvador";
//$senha="123456";

//echo"...login: ".$login;
//echo"...senha: ".$senha;

$db="teste";

$conn=mysqli_connect('localhost','root','') or die('Erro ao conectar no mysql');
$banco=mysqli_select_db($conn,$db) or die('Erro ao selecionar o banco de dados');

//echo"...conectou!!! ...";

//verifica se usuario já existe
$resultado=mysqli_query($conn,"SELECT * FROM usuario WHERE login='".$login."'");
$linhas=mysqli_num_rows($resultado);

if ($linhas>0){
		
	//echo "Já existe um usuário com esse login...";
	echo 2;
	}else{
		 
// Insere dados na tabela 
    $query = "INSERT INTO teste.usuario (login, senha) VALUES ('".$login."', '" .$senha."' )";
	$result = mysqli_query($conn,$query) or die('Insert falhou: '.mysqli_error());  
 
	mysqli_close($conn);

if($result){
	echo 1;	
}else{
	echo 0;
}

	}//fim do if
 
 ?>