<?php
//conecta ao banco de dados
echo"...Iniciando a conexão ao bd...";	
$db = mysqli_connect('127.0.0.1', 'root', '') or die('Não conseguiu conectar: ' . mysql_error()); //conecta
mysqli_select_db($db,'test') or die('Não conseguiu achar a base de dados'.mysql_error());//seleciona a base de dados
echo"...Conectou!...";

$i=1;
if($i==1){
	break;
	}

$nome="Salvador"; 
$login="salva";
$senha="123456";

echo"...nome=".$nome."...";
echo"...login=".$login."...";
echo"...senha=".$senha."...";

//if(true)break;	
 
 
 
        // Strings must be escaped to prevent SQL injection attack. 
		
        $name = mysqli_real_escape_string($db,$_GET['name']); 
        $score = mysqli_real_escape_string($db,$_GET['score']);
		//$hash = $_GET['hash']; 
		
		echo "name:",$name;
		echo "score:",$score;
		$secretKey="sbudegas"; # Change this value to match the value stored in the client javascript below 
		$hash=md5($name . $score . $secretKey);
		echo "hash:",$hash;
		
		$real_hash = md5($name . $score . $secretKey); 
        if($real_hash == $hash) { 
            // Send variables for the MySQL database class. 
            $query = "insert into scores values (NULL, '$name', '$score')"; 
            $result = mysqli_query($db,$query) or die('Query failed: ' . mysql_error()); 
        } 
?>