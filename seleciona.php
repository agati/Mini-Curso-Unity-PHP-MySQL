<?php
//conecta ao banco de dados
echo"...Iniciando a conexão ao bd...";?><br><?php	
$db = mysqli_connect('127.0.0.1', 'root', '') or die('Não conseguiu conectar: ' . mysqli_error()); //conecta
mysqli_select_db($db,'test') or die('Não conseguiu achar a base de dados'.mysqli_error());//seleciona a base de dados
echo"...Conectou!...";?><br><?php	

$login="chico";
 
// Seleciona dados na tabela 
$query = "SELECT * FROM test.usuario WHERE login='".$login."'";
$result = mysqli_query($db,$query) or die('Selecionar falhou: '.mysqli_error()); 

if($result){
echo $login. " Selecionado com sucesso!!";
if (mysqli_num_rows($result) > 0) {
    // saída de dados para cada linha
    while($row = mysqli_fetch_assoc($result)) {
	echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " -Login: ".$row["login"]." -Senha: " . $row["senha"]. "<br>";
    }
} else {
    echo "0 results";
}
 
mysqli_close($db);

}
  
  
 ?>