<!-- Verificar se o usuário está logado -->
<?php
  if(!function_exists("protect")){
    function protect(){

      if(!isset($_SESSION)) session_start();

      if(!isset($_SESSION['ID']) || !is_numeric($_SESSION['ID'])){
        header("Location: index.php");
      }
    }
  }
?>

