
<?php
  include("conexao.php");
  include("protect.php");
  protect();

  $erro = [];
  $sucesso = [];

  if(isset($_POST['senha1']) && isset($_POST['senha2'])){
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];


  if($senha1==$senha2){
    $stmt = $mysqli->prepare("SELECT senha FROM usuarios WHERE ID = '$_SESSION[ID]'"); // Preparar a consulta
    if ($stmt === false) {
      die("Erro na preparação: " . $mysqli->error);
    }

    $stmt->execute(); //executar consulta
    $result = $stmt->get_result(); //obter resultado

    if ($result->num_rows > 0){
      $nova_senha_hash = password_hash($senha1, PASSWORD_DEFAULT);
      $stmt_update = $mysqli->prepare("UPDATE usuarios SET senha = '$nova_senha_hash' WHERE ID = '$_SESSION[ID]'"); //preparar alteração
      if ($stmt_update === false) {
        die("Erro na preparação da atualização: " . $mysqli->error);
      }

      $stmt_update->execute(); // Executar a atualização
      $sucesso[] = "Senha alterada com sucesso!";
    } else{
    $erro[] = "Usuário não encontrado.";
    }

    $stmt->close();
    $stmt_update->close();

  } else{
    $erro [] = "Por favor confirme a mesma senha.";
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
  <title>Alterar senha</title>
</head>

<body class="FundoFoto">

<?php
    if(count($erro) > 0){
        foreach($erro as $msg){
            echo '<div class="alert alert-light position-absolute bottom-0 start-50 translate-middle-x" role="alert">' . $msg . "</div>";
        }
    }
?>

  <?php
    if(count($sucesso) > 0){
        foreach($sucesso as $sucess){
            echo '<div class="alert alert-light position-absolute bottom-0 start-50 translate-middle-x" role="alert">' . $sucess . ' Faça o <a href="index.php" class="alert-link">login</a>. para ingressar.</div>';
        }
    }
?>

  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Alterar senha</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="esqueciSenha.php">Voltar</a>
        </div>
      </div>
    </div>
  </nav>
  
  <div class="card text-center mt-4 shadow p-3 mb-5 bg-body-tertiary rounded-3" style="background-color: #E1E1E1; color:black; border-color:#10A1DF;">
    <div class="card-body">
      <h5 class="card-title fs-2" style="color:#10A1DF;">Alterar senha</h5>


      <form method="POST" action="">
        <div class="row g-3 align-items-center d-flex justify-content-center">
          <div class="col-auto">
            <label for="senha1" class="col-form-label">Nova senha:</label>
          </div>
          <div class="col-auto">
            <input type="password" id="senha1" name="senha1" class="form-control" aria-describedby="passwordHelpInline">
          </div>
          <div class="col-auto">
            <label for="senha2" class="col-form-label">Confirme a senha:</label>
          </div>
          <div class="col-auto">
            <input type="password" id="senha2" name="senha2" class="form-control" aria-describedby="passwordHelpInline">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary m-2" style="background-color: #10A1DF; color: white; border:none;">Salvar</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>
</html>