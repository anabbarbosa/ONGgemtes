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
  
  <header class="py-3 mb-3 border-bottom headerTelaInicial">
  <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr">
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img class="bi me-2" height="32" src="./Imagens/logoGemtes.png">
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="./ADMtelaInicial.php">Home</a></li>
        <li><a class="dropdown-item" href="./ADMsenhas.php">Recuperar Senha</a></li>
        <li><a class="dropdown-item" href="./addUsers.php">Cadastrar Usuário</a></li>
        <li><a class="dropdown-item" href="./deleteUsers.php">Excluir Usuário</a></li>

    <div class="d-flex align-items-center">
      <form class="w-100 me-3" role="search">
        <input type="search" class="form-control bordaAzulGemtes" placeholder="Procurar usuário..." aria-label="Search">
      </form>

      <div class="flex-shrink-0 dropdown">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" alt="mdo" width="25" height="25" class="rounded-circle bi bi-person" fill="#10A1DF" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
          </svg>
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="./sair.php">Sair</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

<div class="container">
    <form method="POST" class="row g-3" action="">
      <div class="col-md-12">
        <label for="inputName" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" id="inputName" name="Nome_Completo" maxlength="50" value="" required />
      </div>
      <div class="col-md-12">
        <label for="inputCPF" class="form-label">CPF</label>
        <input type="number" class="form-control" id="inputCPF" name=CPF" value="" min="1990-01-01" required />
      </div>
      <div class="col-md-12">
        <label for="inputCRP" class="form-label">CRP</label>
        <input type="number" class="form-control" id="inputCRP" name="CRP" maxlength="2" value="" />
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary m-2" style="background-color:   #10A1DF; color: white; border:none;">Remover Usuário</button>
      </div>

      <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Usuário removido com sucesso!
    </div>
    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
    </form>
  </div>

</body>
</html>

