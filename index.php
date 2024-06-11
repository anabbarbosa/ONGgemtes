<!-- 

Nome do banco de dados: ONG

Tabela usuarios: ID, CPF, senha

Toda a vez que criar uma página nova escrever o seguinte para verificar a sessão: (na tag php)

include("protect.php");
protect();

Toda a vez que for consultar o banco de dados escrever o seguinte: (na tag php)

include("conexao.php");

-->


<?php 
  include("conexao.php");
  session_start();
  $erro = [];

  if(isset($_POST['senha']) && isset($_POST['CPF'])){

    $cpf = $_POST['CPF'];
    $senha = $_POST['senha'];

    if (!is_numeric($cpf) || strlen($cpf) != 11) {
        $erro[] = "CPF inválido.";
    } else {
      $stmt = $mysqli->prepare("SELECT senha, ID FROM usuarios WHERE cpf = '$cpf'"); // Preparar a consulta
      if ($stmt === false) {
          die("Erro na preparação: " . $mysqli->error);
      }

      $stmt->execute(); //executar consulta
      $result = $stmt->get_result(); //obter resultado

      if ($result->num_rows > 0) { 
        $row = $result->fetch_assoc(); //obter os dados do usuario
        if(password_verify($senha, $row['senha'])){
          $_SESSION['ID'] = $row['ID']; //toda a vez que vamos verificar se o usuário está logado, utilizar o ID
          echo "<script>alert('Login efetuado com sucesso'); location.href = './telaInicial.php';</script>";
        } else{
          $erro[] = "Senha incorreta";
        }
      } else {
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
  <title>Login</title>
</head>

<body class="FundoCinza">
 
  <?php 
  if(count($erro) > 0){
    foreach($erro as $msg){
      echo '<div class="alert alert-light position-absolute bottom-0 start-50 translate-middle-x" role="alert">' . $msg . "</div>";
    }
  }
?>

<div class="position-absolute top-50 start-50 translate-middle ">
  <div class="container text-center">

    <div class="row align-items-start">


      <div class="col">
        <figure class="figure">
        <img src="./Imagens/bloquinhos.png" class="figure-img img-fluid rounded" title="Construtores" alt="...">
        </figure>
      </div>

      <div class="col align-self-center">

      <div class="card shadow p-3 mb-5 bg-body-tertiary rounded-3" id="cardLogin" style="border-color:  #10A1DF;">
        <div class="card-body">
          <h5 class="card-title text-center p-inicial" style="color:  #10A1DF;">Entrar</h5>
          
          <form method="POST" action="">
            <div class="form-group">
              <label for="CPF" class="form-label">CPF</label>
              <input type="number" class="form-control text-black borda" id="CPF" name="CPF" value="">
            </div>
            <div class="form-group">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" value=""><br>
              <a href="esqueciSenha.php" target="_blank" style="color: black;">Esqueci minha senha</a>
            </div>
            <button type="submit" class="btn btn-primary m-2" style="background-color: #10A1DF; color: white; border:none;">Entrar</button>
          </form>
        </div>
      </div>


      </div>

      
    </div>
  </div>
</div>
</body>

</html>