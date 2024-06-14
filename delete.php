<?php
  include("protect.php");
  include("codigo.php");
  include("conexao.php");
  protect();

  $mensagem = [];
  $mostrarcodigo = false;

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
        $mostrarcodigo=true;
    }else {
      $mensagem[] = "Este CPF não pertence a nenhum usuário.";
    }
    $stmt->close(); //fechar declaração
    }
  }

  if(isset($_POST['prosseguir_btn'])) {
    $stmt = $mysqli->prepare("DELETE FROM `usuarios` WHERE CPF='$cpf'"); // Preparar a consulta
    if ($stmt === false) {
      die("Erro na preparação: " . $mysqli->error);
    }
    $stmt->execute(); //executar consulta
    $mensagem[] = "Usuário deletado com sucesso.";
    $stmt->close(); //fechar declaração
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
  ?>

  <form method="POST" action="">

    <h3>Deletar usuário</h3> <br><br>
    
      <div class="itens">
        <label for="CPF" class="form-label p-inicial fs-5">CPF</label>
        <input type="number" class="form-control form-control-lg mb-3" name="CPF" id="CPF">
      </div>

      <button type="submit">Excluir</button>

  </form>

    <script>
      function hideAlert() {
        document.getElementById("deleteAlert").style.display = "none";
      }
    </script>

    <?php if ($mostrarcodigo): ?>
        <div id="deleteAlert" class="alert alert-light position-absolute bottom-0 start-50 translate-middle-x text-center" role="alert">
            <div class="d-flex justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle"
                    viewBox="0 0 16 16" onclick="hideAlert()" style="cursor: pointer;">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                </svg>
            </div><br>
            <p class="d-flex justify-content-center">Tem certeza que deseja excluir esse usuário?</p>
            <form method="post" action="">
                <input type="hidden" name="CPF" value="<?php echo htmlspecialchars($cpf); ?>">
                <input type="submit" name="prosseguir_btn" value="Prosseguir" class="btn btn-primary m-2">
            </form>
        </div>
        <?php endif; ?>  

</body>
</html>