<?php
  include("protect.php");
  protect();

  // Conexão com o banco de dados
  $conexao = mysqli_connect("localhost", "root", "", "assistido");
  if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
  }

  //a requisição é do tipo POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitiza e valida os dados do formulário
    $Nome_Completo = mysqli_real_escape_string($conexao, $_POST['Nome_Completo']);
    $Idade_Cog = mysqli_real_escape_string($conexao, $_POST['Idade_Cog']);
    $Data_Nascimento = mysqli_real_escape_string($conexao, $_POST['Data_Nascimento']);
    $Encaminhamento = mysqli_real_escape_string($conexao, $_POST['Encaminhamento']);
    $Nome_Responsavel = mysqli_real_escape_string($conexao, $_POST['Nome_Responsavel']);
    $CPF = mysqli_real_escape_string($conexao, $_POST['CPF']);
    $Telefone = mysqli_real_escape_string($conexao, $_POST['Telefone']);
    $Grau_Parentesco = mysqli_real_escape_string($conexao, $_POST['Grau_Parentesco']);

    // Verifica se os campos obrigatórios estão preenchidos
    if (!empty($Nome_Completo) && !empty($Data_Nascimento) && !empty($Nome_Responsavel) && !empty($CPF)) {
      // Query de inserção
      $sql = "INSERT INTO cadastro_do_assistido (Nome_Completo, Idade_Cog, Data_Nascimento, Encaminhamento, Nome_Responsavel, CPF, Telefone, Grau_Parentesco)
              VALUES ('$Nome_Completo', '$Idade_Cog', '$Data_Nascimento', '$Encaminhamento', '$Nome_Responsavel', '$CPF', '$Telefone', '$Grau_Parentesco')";

      // Executa a query
      if (mysqli_query($conexao, $sql)) {
        echo "Dados inseridos com sucesso!";
      } else {
        echo "Erro: " . mysqli_error($conexao);
      }
    } else {
      echo "Por favor, preencha todos os campos obrigatórios.";
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
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
    <title>Cadastrar Assistidos</title>
  </head>

  <body class="FundoCinza">
    <header class="py-3 mb-3 border-bottom headerTelaInicial">
      <div
        class="container-fluid d-grid gap-3 align-items-center"
        style="grid-template-columns: 1fr 2fr"
      >
        <div class="dropdown">
          <a
            href="./telaInicial.php"
            class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img class="bi me-2" height="32" src="./Imagens/logoGemtes.png" />
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="./telaInicial.php">Home</a></li>
            <li>
              <a class="dropdown-item" href="./assistidos.php">Assistidos</a>
            </li>
            <li>
              <a class="dropdown-item" href="./cadastrarAssistido.php"
                >Cadastrar Assistido</a
              >
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="./avaliacao.html">Avaliação</a>
            </li>
            <li>
              <a class="dropdown-item" href="./consultas.html">Consultas</a>
            </li>
          </ul>
        </div>

        <div class="d-flex align-items-center">
          <form class="w-100 me-3" role="search">
            <input
              type="search"
              class="form-control bordaAzulGemtes"
              placeholder="Procurar assistido..."
              aria-label="Search"
            />
          </form>

          <div class="flex-shrink-0 dropdown">
            <a
              href="#"
              class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                alt="mdo"
                width="25"
                height="25"
                class="rounded-circle"
                fill="#10A1DF"
                class="bi bi-person"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"
                />
              </svg>
            </a>
            <ul class="dropdown-menu text-small shadow">
              <li>
                <a class="dropdown-item" href="./perfilUsuario.html">Sobre</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="./sair.php">Sair</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <h3 class="py-2">Cadastro do assistido</h3>
      <form class="row g-3" method="POST" action="">
        <div class="col-md-6">
          <label for="inputName" class="form-label">Nome Completo*</label>
          <input type="text" class="form-control" id="inputName" name="Nome_Completo" maxlength="50" value="" required />
        </div>
        <div class="col-md-6">
          <label for="inputDataNascimento" class="form-label">Data de Nascimento*</label>
          <input type="date" class="form-control" id="inputDataNascimento" name="Data_Nascimento" value=""  min="1990-01-01" required/>
        </div>
        <div class="col-md-6">
          <label for="inputIdade" class="form-label">Idade Cognitiva</label>
          <input type="number" class="form-control" id="inputIdade" name="Idade_Cog" maxlength="2" value=""/>
        </div>
        <div class="col-md-6">
          <label for="inputEncaminhamento" class="form-label">Encaminhamento</label>
          <input type="text" class="form-control" id="inputEncaminhamento" name="Encaminhamento" maxlength="200" value=""/>
        </div>
        <h3 class="py-2 my-3">Responsável pelo assistido</h3>
        <div class="col-md-6">
          <label for="inputNameResp" class="form-label">Nome Completo*</label>
          <input type="text" class="form-control" id="inputNameResp" name="Nome_Responsavel" maxlength="50" value="" required/>
        </div>
        <div class="col-md-6">
          <label for="inputTelefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="inputTelefone" name="Telefone" maxlength="15" value=""/>
        </div>
        <div class="col-md-6">
          <label for="inputParentesco" class="form-label">Grau de Parentesco</label>
          <input type="text" class="form-control" id="inputParentesco" name="Grau_Parentesco" maxlength="20" value=""/>
        </div>
        <div class="col-md-6">
          <label for="inputCPF" class="form-label">CPF (Somente números)*</label>
          <input type="number" class="form-control" id="inputCPF" name="CPF" maxlength="11" value="" required/>
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes">
            Finalizar Cadastro
          </button>
        </div>
        <div class="col-3">
          <button type="submit" class="botaoAssistido btn btn-outline-primary textoazulGemtes bordaAzulGemtes">
            <a class="botaoAssistido textoAzulGemtes" href="./assistidos.php">Voltar para Assistidos</a></button>
        </div>
      </form>
    </div>
  </body>
</html>
<?php

mysqli_close($conexao);
?>
