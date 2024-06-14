<?php
  include("protect.php");
  include("codigo.php");
  include("conexao.php");
  protect();

  $mensagem = [];
  $alerta = [];

  if(isset($_POST['CPF'])){

    $cpf = $_POST['CPF'];

    if (!is_numeric($cpf) || strlen($cpf) != 11) {
      $mensagem[] = "CPF inválido.";
    } else {

    $stmt = $mysqli->prepare("SELECT * FROM `usuarios` WHERE CPF='$cpf'"); // Preparar a consulta

    if ($stmt === false) {
        die("Erro na preparação: " . $mysqli->error);
    }

    $stmt->execute(); //executar consulta
    $result = $stmt->get_result(); //obter resultado

    if ($result->num_rows > 0) { 
      $alerta [] = "Tem certeza que deseja excluir esse usuário?";
      if(isset($_POST['prosseguir_btn'])) {
        $stmt = $mysqli->prepare("DELETE FROM `usuarios` WHERE CPF='$cpf'"); // Preparar a consulta
        if ($stmt === false) {
          die("Erro na preparação: " . $mysqli->error);
        }
        $stmt->execute(); //executar consulta
        $mensagem [] = "Usuário deletado com sucesso.";
      }
    }else {
      $mensagem[] = "Este CPF não pertence a nenhum usuário.";
    }
    $stmt->close(); //fechar declaração
    }
  }
  $mysqli->close();
?>

<!DOCTYPE html>
<html> 

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@800&display=swap" rel="stylesheet">
  <title>Adicionar usuário</title>
</head>

<body class="FundoCinza">

<?php 
  if(count($mensagem) > 0){
    foreach($mensagem as $msg){
      echo '<div class="alert alert-light position-absolute bottom-0 start-50 translate-middle-x" role="alert">' . $msg . "</div>";
    }
  }
  
  if(count($alerta) > 0){
    foreach($alerta as $msg){
      echo '<div class="alert alert-light position-absolute bottom-0 start-50 translate-middle-x" role="alert">' 
      . $msg .         
      '<form method="post">
      <input type="submit" name="prosseguir_btn" value="Prosseguir" class="btn btn-primary">
      </form>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
  }
  ?>
  
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Excluir usuário</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="ADMtelaInicial.php">Tela inicial</a>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="addUsers.php">Adicionar usuário</a>
        </div>
      </div> 
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="ADMsenhas.php">Recuperação de senha</a>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="sair.php">Sair</a>
        </div>
      </div>
    </div>
  </nav>

  <form method="POST" action="">
    <p> CPF <br> <input value="" name="CPF" type="number"></p>
    <p><input name="deletar" value="deletar" type="submit"></p>
  </form>

</body>
</html>

