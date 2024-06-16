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
      <div class="col-12">
        <h3> 3. Com relação ao comportamento, durante a avaliação, a criança apresentou ser:</h3>
      </div>

      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Silenciosa
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Atenciosa
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Atenta
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Paciente
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Falante
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Curiosa
        </label>
      </div>

      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Criativa
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Sociável
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Investigativa
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Questionadora
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Persistente
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Teimosa
        </label>
      </div>

      <div class="col-md-2  form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Interessada
        </label>
      </div>
      <div class="col-md-2  form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Distraída
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Resiliente
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Cooperativa
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Empolgada
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Observadora
        </label>
      </div>

      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Organizada
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Inquieta
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Impulsiva
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Agressiva
        </label>
      </div>
      <div class="col-md-2 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Faltou com o respeito
        </label>
      </div>

      <div class="col-md-12 py-3">
        <h3> 4. Durante a execução da avaliação, a criança apresentou: </h3>
      </div>

      <div class="col-md-3 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Alto grau de concentração
        </label>
      </div>
      <div class="col-md-5 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Facilidade em evocar conceitos já apresentados
        </label>
      </div>
      <div class="col-md-4 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Autoconfiança ao executar uma atividade
        </label>
      </div>


      <div class="col-md-3 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Controle dos impulsos
        </label>
      </div>
      <div class="col-md-3 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Tolerância a frustrações
        </label>
      </div>
      <div class="col-md-3 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Flutuação da atenção
        </label>
      </div>
      <div class="col-md-3 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Necessitou de atenção constante
        </label>
      </div>

      <div class="col-md-7 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Necessidade de intervenções firmes e pontuais para perceber os limites e regras
        </label>
      </div>
      <div class="col-md-4 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Baixa capacidade de concentração
        </label>
      </div>

      <div class="col-md-4 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Distração com estímulos externos
        </label>
      </div>
      <div class="col-md-7 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Necessitar de várias repetições de informações para concluir as atividades
        </label>
      </div>

      <div class="col-12 form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Esquecimento muito rápido do que acabou de ser apresentado
        </label>
      </div>

      <div class="col-12">
        <h3> 5. Com relação a família:</h3>
      </div>

      <div class="col-md-6">
        <label for="inputState" class="form-label">Frequentam as reuniões escolares?</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>Sim</option>
          <option>Não</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Participam no processo educativo?</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>Sim</option>
          <option>Não</option>
        </select>
      </div>

      <div class="col-md-12">
        <label for="inputState" class="form-label">Apresentam dúvidas e questionamentos com relação à evolução da criança?</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>Sim</option>
          <option>Não</option>
        </select>
      </div>

      <div class="form-floating col-12">
        <textarea class="form-control px-2" placeholder="Diagnóstico" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2"> Observações</label>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes"><a style="color:white" href="./novaAvaliacao3.html">Próximo</a></button>
      </div>
    </form>
  </div>

</body>

</html>