<?php
include("protect.php");
protect();
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
  <title> Nova Avaliação</title>
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
          <li>
            <hr class="dropdown-divider">
          </li>
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
            <svg xmlns="http://www.w3.org/2000/svg" alt="mdo" width="25" height="25" class="rounded-circle" fill="#10A1DF" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
            </svg>
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="./perfilUsuario.php">Sobre</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="./sair.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <form class="row g-3">
      <h4> Data de aplicação dessa avaliação </h4>
      <div class=" col-md-6"><label for="inputnome" class="form-label"> Início</label>
        <input type="date" class="form-control" id="inputnome">
      </div>
      <div class=" col-md-6"><label for="inputnome" class="form-label"> Final</label>
        <input type="date" class="form-control" id="inputnome">
      </div>
      <div class=" col-12">

        <h3> 1. Dados de Identificação do Assistido</h3>
      </div>
      <div class="col-md-6">
        <label for="inputnome" class="form-label"> Nome Completo</label>
        <input type="text" class="form-control" id="inputnome">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="inputPassword4">
      </div>

      <div class="col-md-6">
        <label for="inputAddress" class="form-label">Nome do responsável</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="col-md-6">
        <label for="inputAddress2" class="form-label">Cuidadora</label>
        <input type="text" class="form-control" id="inputAddress2">
      </div>

      <div class="col-md-6">
        <label for="inputCity" class="form-label">Data de Aplicação</label>
        <input type="date" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Tipo do teste</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Resultado</label>
        <input type="text" class="form-control" id="inputZip">
      </div>

      <div class="col-md-6">
        <label for="inputCity" class="form-label">Ano que frequenta</label>
        <input type="number" class="form-control" id="inputCity">
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Período</label>
        <input type="text" class="form-control" id="inputCity">
      </div>

      <div class="form-floating col-12">
        <textarea class="form-control px-2" placeholder="Diagnóstico" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2"> Diagnóstico</label>
      </div>

      <div class="col-12">
        <h3> 2. Dados para Orientação</h3>
      </div>

      <div class="col-3 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Distrofia muscular de Duchenne
        </label>
      </div>
      <div class="col-3 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Apresenta déficit na fala
        </label>
      </div>
      <div class="col-3 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Paralisia cerebral com déficit cognitivo
        </label>
      </div>
      <div class="col-3 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Sem déficit cognitivo
        </label>
      </div>

      <div class="col-md-3">
        <label for="inputState" class="form-label">Faz uso de cadeira de rodas?</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>Sim</option>
          <option>Não</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="inputState" class="form-label">Faz uso de órtese?</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>Sim</option>
          <option>Não</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="inputState" class="form-label">Faz uso de andador?</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>Sim</option>
          <option>Não</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="inputZip" class="form-label">Outro:</label>
        <input type="text" class="form-control" id="inputZip">
      </div>

      <div class="col-md-6">
        <label for="inputState" class="form-label">Apresenta déficit motor de membros superiores?</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>Sim</option>
          <option>Não</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Faz uso do banheiro de forma independente?</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>Sim</option>
          <option>Não</option>
          <option>Faz uso de fraldas</option>
        </select>
      </div>

      <div class="col-12 my-3">
        <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes"><a style="color:white" href="./novaAvaliação2.html">Próximo</a></button>
      </div>
    </form>
  </div>

</body>

</html>