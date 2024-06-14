<?php
include("conexao.php");
include("protect.php");
include("codigo.php");
protect();

$erro = [];
$string = "abcdefghijklmnopqrstuvwxyz1234567890";
$codigo = palavra_aleatoria($string).palavra_aleatoria($string).palavra_aleatoria($string);
$mostrarcodigo = false;

if(isset($_POST['CPF'])){

  $cpf = $_POST['CPF'];

  if (!is_numeric($cpf) || strlen($cpf) != 11) {
    $erro[] = "CPF inválido.";
  } else {

  $stmt = $mysqli->prepare("SELECT * FROM `usuarios` WHERE CPF='$cpf'"); // Preparar a consulta

  if ($stmt === false) {
      die("Erro na preparação: " . $mysqli->error);
  }

  $stmt->execute(); //executar consulta
  $result = $stmt->get_result(); //obter resultado

  if ($result->num_rows > 0) { 
    $stmt = $mysqli->prepare("UPDATE `usuarios` SET `codigo`='$codigo' WHERE CPF='$cpf'"); // Preparar a consulta
    if ($stmt === false) {
      die("Erro na preparação: " . $mysqli->error);
    }
    $stmt->execute(); //executar consulta
    $mostrarcodigo=true;
  }else {
    $erro[] = "Este CPF não pertence a nenhum usuário.";
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

  <div id="toast">Conteúdo copiado!</div>

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

  <div class="card text-center mt-4 shadow p-3 mb-5 bg-body-tertiary rounded-3 container" style="background-color: #E1E1E1; color:black; border-color:#10A1DF;">
    <div class="card-body">
      <h5 class="card-title">Código para recuperação de senha</h5>
      <p class="card-text">Insira o CPF do usuário para que possamos enviar o código de recuperação de senha.</p> <br> <br>

      <form method="POST" action="">
        <div class="row g-3 align-items-center d-flex justify-content-center">
          <div class="col-auto">
            <label for="CPF" class="col-form-label">CPF:</label>
          </div>
          <div class="col-auto">
            <input type="number" id="CPF" name="CPF" class="form-control" aria-describedby="passwordHelpInline">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary m-2" style="background-color:   #10A1DF; color: white; border:none;">Prosseguir</button>
          </div>
        </div>
      </form>
      <br><br>

      <?php if ($mostrarcodigo): ?>
        <div class="d-flex justify-content-center">
        <div class="card w-75 mb-3" id="cardLogin" style="border-color: #10A1DF; background-color:white;">
          <div class="card-header d-flex justify-content-end">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16" title="Copiar" onclick="copiarConteudo('codigo')" alt="Copiar">
              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
              <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
            </svg>
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0" id="codigo">
              <p><?php echo $codigo; ?></p>
            </blockquote>
          </div>
        </div>
        </div>
      <?php endif; ?>

    </div>
  </div>

  <script src="copiar.js"></script>
</body>
</html>


