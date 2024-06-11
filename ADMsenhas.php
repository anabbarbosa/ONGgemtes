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

  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Recuperar senha</a>
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
          <a class="nav-link active" aria-current="page" href="deleteUsers.php">Excluir usuário</a>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="sair.php">Sair</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="card text-center mt-4 shadow p-3 mb-5 bg-body-tertiary rounded-3" style="background-color: #E1E1E1; color:black; border-color:#10A1DF;">
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
