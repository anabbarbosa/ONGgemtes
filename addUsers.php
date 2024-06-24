<?php
  include("protect.php");
  include("codigo.php");
  include("conexao.php");
  protect();

  $mensagem = [];
  $string = "abcdefghijklmnopqrstuvwxyz1234567890";
  $codigo = palavra_aleatoria($string).palavra_aleatoria($string).palavra_aleatoria($string);
  $mostrarcodigo = false;

  function verificarCPF($CPF) {
    global $mensagem, $mysqli;
    if (!is_numeric($CPF) || strlen($CPF) != 11) {
      $mensagem[] = "CPF inválido.";
      return false;
    } else {
      $stmt = $mysqli->prepare("SELECT * FROM `terapeuta` WHERE CPF='$CPF'"); // Preparar a consulta
      if ($stmt === false) {
        die("Erro na preparação: " . $mysqli->error);
      }
    
      $stmt->execute(); //executar consulta
      $result = $stmt->get_result(); //obter resultado
    
      if ($result->num_rows > 0) {
        $mensagem[] = "Esse CPF já consta no sistema.";
        return false;
      }else {
        return true;
      }
    }
    $stmt->close(); //fechar declaração
  }

  if(isset($_POST['CPF1']) && isset($_POST['CPF2']) && isset($_POST['Nome_Completo'])){

    $cpf1 = $_POST['CPF1'];
    $cpf2 = $_POST['CPF2'];
    $user = $_POST['Nome_Completo'];

    
  if(verificarCPF($cpf1) && verificarCPF($cpf2)){
    if($cpf1 == $cpf2){
      
      $senhaProvisoria = password_hash($codigo, PASSWORD_DEFAULT);
      $stmt = $mysqli->prepare("INSERT INTO `terapeuta` (`id_terapeuta`, `CPF`, `senha`, `codigo`) VALUES ('', '$cpf1', '$senhaProvisoria', '$codigo')"); // Preparar a consulta
      
      if ($stmt === false) {
        die("Erro na preparação: " . $mysqli->error);
      }
      $stmt->execute(); //executar consulta
      if ($stmt->affected_rows > 0) {
        $mensagem []= "Usuário adicionado com sucesso.";
        $mostrarcodigo=true;
      } else {
        $mensagem[] = "Erro ao adicionar usuário.";
      }
    } else{
      $mensagem[] = "Por favor, confirme o mesmo CPF.";
    }
  $stmt->close(); //fechar declaração
  }
}
  $mysqli->close();
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"    
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  <title>Adicionar usuário</title>
</head>

<body class="FundoCinza">

  <?php 
    if(count($mensagem) > 0){
      foreach($mensagem as $msg){
        echo '<div class="alert alert-light position-absolute bottom-0 start-50 translate-middle-x" role="alert">' . $msg . "</div>";
      }
    }
  ?>

  <header class="py-3 mb-3 border-bottom headerTelaInicial">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr">
      <div class="dropdown">
        <a href="./ADMtelaInicial.php" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="bi me-2" height="32" src="./Imagens/logoGemtes.png">
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="./ADMtelaInicial.php">Home</a></li>
          <li><a class="dropdown-item" href="./ADMsenhas.php">Recuperar Senha</a></li>
          <li><a class="dropdown-item" href="./addUsers.php">Cadastrar Usuário</a></li>
          <li><a class="dropdown-item" href="./deleteUsers.php">Excluir Usuário</a></li>
        </ul>
      </div>
      <div class="d-flex align-items-center">
        <form class="w-100 me-3" role="search">
          <input type="search" class="form-control bordaAzulGemtes" placeholder="Procurar usuário..." aria-label="Search">
        </form>

        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" alt="mdo" width="25" height="25" class="rounded-circle bi bi-person" fill="#10A1DF" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
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
        <label for="CPF1" class="form-label">CPF</label>
        <input type="number" class="form-control" id="CPF1" name="CPF1" value="" placeholder="CPF" required />
      </div>
      <div class="col-md-12">
        <label for="CPF2" class="form-label">Confirme o CPF</label>
        <input type="number" class="form-control" id="CPF2" name="CPF2" maxlength="2" value="" placeholder="Confirme o CPF" required/>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary m-2" style="background-color:   #10A1DF; color: white; border:none;">Registrar</button>
      </div>
    </form>
  </div>

  <?php if ($mostrarcodigo): ?>
        <div class="d-flex justify-content-center">
        <div class="card w-75 mb-3" id="cardLogin" style="border-color:#10A1DF; background-color:white;">
          <div class="card-header d-flex justify-content-end">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16" title="Copiar" onclick="copiarConteudo('codigo')" alt="Copiar">
              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
              <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
            </svg>
          </div>
          <div class="card-header d-flex justify-content-center">
          Código para definir uma senha.
          </div>
          <div class="card-body text-center">
            <blockquote class="blockquote mb-0" id="codigo">
              <p><?php echo $codigo; ?></p>
            </blockquote>
          </div>
        </div>
        </div>
      <?php endif; ?>

    <script src="./copiar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>


</html>