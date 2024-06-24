<!-- Caso o usuário esqueça a senha -->
<?php
  include("conexao.php");
  if(!isset($_SESSION)) session_start();
  $erro = [];

  if(isset($_POST['codigo']) && isset($_POST['CPF'])){
    $codigo =  $_POST['codigo'];
    $cpf =  $_POST['CPF'];

    if (!is_numeric($cpf) || strlen($cpf) != 11) {
      $erro[] = "CPF inválido.";
    } else {
    $stmt = $mysqli->prepare("SELECT codigo, id_terapeuta FROM terapeuta WHERE CPF = '$cpf'"); // Preparar a consulta
    if ($stmt === false) {
    die("Erro na preparação: " . $mysqli->error);
    }

      $stmt->execute(); //executar consulta
      $result = $stmt->get_result(); //obter resultado

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Obter a linha do resultado
        $resultado = $row['codigo'];

      if($codigo == $resultado){
        $_SESSION['ID'] = $row['id_terapeuta']; //toda a vez que vamos verificar se o usuário está logado, utilizar o ID
        echo "<script>location.href = 'trocarSenha.php';</script>";
      }else {
        $erro [] = "Código inválido.";
      }

      } else {
        $erro[] = "Este CPF não pertence a nenhum usuário.";
      }
      $stmt->close(); //fechar declaração
    }
  }
  $mysqli->close();
?>


<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@800&display=swap" rel="stylesheet">
  <title>Recuperação de senha</title>
</head>

  <body class="FundoCinza">

 
<?php
  if(count($erro) > 0){
    foreach($erro as $msg){
      echo '<div class="alert alert-light position-absolute bottom-0 start-50 translate-middle-x" role="alert">' . $msg . "</div>";
    }
  }
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Recuperar senha</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="Index.php">Voltar</a>
        </div>
      </div>
    </div>
  </nav>
  
    <div class="card-title text-center m-4" style="color:  #10A1DF;"><p class="fs-4">Recuperação de senha</p></div> 
    <div class="card-body text-center">
      <h5 class="card-title">Alterar senha</h5><br>
      <p class="card-text">Olá! Por motivos de segurança, para realizar essa operação contate o adiministrador e insira o código de alteração. </p>
      
      <form method="POST" action="">
        <div class="row g-3 align-items-center d-flex justify-content-center">
        <div class="col-auto">
            <label for="CPF"  class="col-form-label">CPF:</label>
          </div>
          <div class="col-auto">
            <input type="number" id="CPF" name="CPF" class="form-control" aria-describedby="passwordHelpInline">
          </div>
          <div class="col-auto">
            <label for="codigo"  class="col-form-label">Código:</label>
          </div>
          <div class="col-auto">
            <input type="text" id="codigo" name="codigo" class="form-control" aria-describedby="passwordHelpInline">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary m-2" style="background-color: #10A1DF; color: white; border:none;">Prosseguir</button>
          </div>
        </div>
      </form>

  </body>

</html>


