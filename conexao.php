<!-- Tela de conexão com o banco de dados, favor não modificar --> 

<?php

 $hostname = "localhost";
 $bancodedados = "ong"; 
 $usuario = "root";
 $senha = "";

 $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
 if ($mysqli->connect_errno){
   echo "Falha ao conectar: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
 }

?>

  