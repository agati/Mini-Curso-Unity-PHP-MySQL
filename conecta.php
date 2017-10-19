<?php
echo"...Iniciando conexão...";
$conn=mysqli_connect('localhost','root','') or die('Erro ao conectar no mysql');
$banco=mysqli_select_db($conn,"test") or die('Erro ao selecionar o banco de dados');
echo"...conectou!!...";




?>


