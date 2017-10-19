<?php
//conecta ao banco de dados
echo"...Iniciando a conexão ao bd...";?><br><?php	
$db = mysqli_connect('127.0.0.1', 'root', '') or die('Não conseguiu conectar: ' . mysqli_error()); //conecta
mysqli_select_db($db,'test') or die('Não conseguiu achar a base de dados'.mysqli_error());//seleciona a base de dados
echo"...Conectou!...";?><br><?php	

$i=0;
while($i=1){
	break ;
	}

$nome="Rafael";
 
// Atualiza dados na tabela 
$query = "UPDATE test.usuario SET nome='".$nome."' WHERE nome='Francisco'";
$result = mysqli_query($db,$query) or die('Delete falhou: '.mysqli_error()); 

if($result){
echo $nome. " Atualizado com sucesso!!";
}
 mysqli_close($db);
 
 ?>