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
    <section class="capacidade">
      <form class="row g-3">
        <div class="col-12">
          <h2 class="textoAzulGemtes"> Língua Portuguesa</h2>
          <h5 class="textoAzulGemtes">A criança foi capaz de:</h5>
        </div>


        <div class="col-md-6">
          <label for="inputState" class="form-label">Entender instruções expressas de forma negativa:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Incorporar vocabulário recente em suas conversas:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>


        <div class="col-md-8">
          <label for="inputState" class="form-label">Expressar-se verbalmente, pronunciando palavras de forma clara, espontânea e confiante:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Familiarizar-se com novas palavras:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="inputState" class="form-label">Formular diversas perguntas:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-8">
          <label for="inputState" class="form-label">Compreender o significado de texto ou história, identificando a ideia central:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-3">
          <label for="inputState" class="form-label">Engajar-se em diálogos:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Demonstrar interesse na leitura de histórias:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-5">
          <label for="inputState" class="form-label">Memorizar e entoar canções infantis ou parlendas:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>


        <div class="col-md-6">
          <label for="inputState" class="form-label">Elaborar e relatar histórias de maneira oral, a partir de imagens ou temas:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Relatar eventos de sua vida cotidiana, seguindo a lógica cronológica:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label"> Atentar, memorizar, assimilar e executar ordens tanto simples quanto complexas</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
      </form>
    </section>

    <section class="escrita my-3">
      <form class="row g-3">
        <div class="col-12">
          <h5 class="textoAzulGemtes">Escrita:</h5>
        </div>


        <div class="col-md-4">
          <label for="inputState" class="form-label">Realizar escritos de forma espontânea:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-8">
          <label for="inputState" class="form-label">Reproduzir histórias ouvidas por meio de recontos escritos, com o professor atuando como escriba:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>


        <div class="col-md-12">
          <label for="inputState" class="form-label">Formar seu nome utilizando letras móveis, sem depender do crachá:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-12">
          <label for="inputState" class="form-label">Compreender o significado de texto ou história, identificando a ideia central:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-12">
          <label for="inputState" class="form-label">
            Reproduzir seu próprio nome por meio de cópia sem o auxílio de guias pontilhadas:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-12">
          <label for="inputState" class="form-label">Utilizar diversos instrumentos e materiais de escrita para realizar desenhos, traçar letras e outros símbolos gráficos:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
    </section>

    <section class="leitura my-3">
      <form class="row g-4">
        <div class="col-12">
          <h5 class="textoAzulGemtes">Leitura:</h5>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label">RIdentificar a escrita de seu nome em letras maiúsculas estilo bastão:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label">Tentar reconhecer palavras familiares:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label">Discriminar semelhanças e diferenças nos sons de aliterações e rimas:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label">Estar no estágio de leitura logográfica, reconhecendo logotipos, etiquetas comerciais e anúncios:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label">Explorar textos e engajar-se em atividades auditivas para expandir sua familiaridade com variados tipos de textos:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-12">
          <label for="inputState" class="form-label">
            Selecionar e folhear livros, buscando orientação por temas e ilustrações:</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
    </section>

    <div class="col-12 py-3">
      <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes my-3"><a style="color:white" href="./novaAvaliacao4.html">Próximo</a></button>
    </div>
    </form>
  </div>

</body>

</html>