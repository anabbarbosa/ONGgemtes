<?php
  include("protect.php");
  protect();
  include("conexao.php");

  $stmt = $mysqli->prepare("SELECT * FROM assistido"); // Preparar a consulta

  if ($stmt === false) {
      die("Erro na preparação: " . $mysqli->error);
  }

  $stmt->execute(); //executar consulta

  $cadastro_do_assistido = $stmt->get_result(); //obter resultado

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Assistidos Cadastrados</title>
</head>
  
<body class="FundoCinza">
  <header class="py-3 mb-3 border-bottom headerTelaInicial">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="bi me-2" height="32" src="./Imagens/logoGemtes.png">

        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="./telaInicial.php">Home</a></li>
          <li><a class="dropdown-item" href="./assistidos.php">Assistidos</a></li>
          <li><a class="dropdown-item" href="./cadastrarAssistido.php">Cadastrar Assistido</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="./avaliacao.php">Avaliação</a></li>
          <li><a class="dropdown-item" href="./consultas.php">Consultas</a></li>
        </ul>
      </div>

      <div class="d-flex align-items-center">
        <form class="w-100 me-3" role="search">
          <input type="search" class="form-control bordaAzulGemtes" placeholder="Procurar assistido..." aria-label="Search">
        </form>

        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg"  alt="mdo" width="25" height="25" class="rounded-circle" fill="#10A1DF" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="./perfilUsuario.html">Sobre</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="px-4 py-4 my-5 text-center">
      <img class="d-block mx-auto" src="./Imagens/fotokid.png" alt="" height="155">
      <h1 class="display-5 fw-bold text-body-emphasis">Seus assistidos</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">A Isa vai escrever algo daora aqui depois</p>
      </div>
      <button class="btn btn-primary d-inline-flex align-items-center azulGemtes bordaAzulGemtes" type="button">
        <a href="./cadastrarAssistido.php" class="text-white">Cadastrar assistido</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="white" class="bi bi-arrow-right mx-1" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
        </svg>
      </button>
    </div>
      <?php
        echo '<div class="container px-4 py-5" id="featured-3">';
        echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
        $counter = 1;
        while ($linha = mysqli_fetch_array($cadastro_do_assistido)) {
      ?>
          <div class="col">
            <div class="card bordaAzulGemtes h-100">
              <div class="card-body">
                <h3 class="card-title textoAzulGemtes">Assistido <?php echo $counter ?></h3>
                <p class="card-text">
                  <ol>
                    <li>Nome: <?php echo $linha["Nome_Completo"]; ?></li>
                    <li>Idade: <?php $data_nascimento = DateTime::createFromFormat('Y-m-d', $linha["Data_Nascimento"]); if ($data_nascimento === false) {echo "Data de Nascimento inválida."; exit;} $dataAtual = new DateTime;  $intervalo = $dataAtual->diff($data_nascimento); $idade = $intervalo->y; echo $idade;?></li>
                    <li>ID: <?php echo $linha["id_assistido"]; ?> </li>
                  </ol>
                </p>
                <div class="text-center">
                  <a href="./paginaAssistido.php?id=<?php echo $linha["id_assistido"]; ?>" class="btn btn-primary stretched-link azulGemtes bordaAzulGemtes">Ver Mais</a>
                </div>
              </div>
            </div>
          </div>
      <?php
          $counter++;
        }
        echo '</div>';
        echo '</div>';
      ?>

      </div>
    </div>
</body>
</html>

<?php
  $mysqli->close();
?>