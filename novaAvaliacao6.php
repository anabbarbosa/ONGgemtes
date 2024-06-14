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

  <section>
    <div class="container">
      <form class="row g-3">
        <div class="col-md-12">
          <h2 class="textoAzulGemtes">Psicomotricidade </h2>
          <h5 class="textoAzulGemtes">A criança foi capaz de:</h5>
        </div>

        <div class="col-md-6">
          <label for="tracado" class="form-label">Apresentar perícia no traçado:</label>
          <select id="tracado" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="preensao_tripode" class="form-label">Realizar atividades utilizando a preensão trípode:</label>
          <select id="preensao_tripode" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="simbolos_objetos" class="form-label">Compreender que desenhos e símbolos podem representar objetos reais:</label>
          <select id="simbolos_objetos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="desenhos_imaginacao" class="form-label">Criar desenhos utilizando a imaginação e a função simbólica:</label>
          <select id="desenhos_imaginacao" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="formas_geometricas" class="form-label">Incorporar formas geométricas em seus desenhos:</label>
          <select id="formas_geometricas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="habilidade_pintar" class="form-label">Demonstrar habilidade em pintar, respeitando limites:</label>
          <select id="habilidade_pintar" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="linhas_curvas" class="form-label">Traçar linhas curvas, sinuosas e mistas sobre linhas pontilhadas e tracejadas:</label>
          <select id="linhas_curvas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="atividades_colagem" class="form-label">Executar atividades de colagem respeitando os limites:</label>
          <select id="atividades_colagem" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="conectar_desenhos" class="form-label">Conectar desenhos traçando linhas de forma livre:</label>
          <select id="conectar_desenhos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="pintura_dedo" class="form-label">Engajar-se em atividades de pintura a dedo:</label>
          <select id="pintura_dedo" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="pintura_giz_cera" class="form-label">Engajar-se em atividades de pintura com giz de cera:</label>
          <select id="pintura_giz_cera" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="pintura_pincel" class="form-label">Engajar-se em atividades de pintura com pincel:</label>
          <select id="pintura_pincel" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="massa_modelar" class="form-label">Engajar-se em atividades de manuseio de massa de modelar:</label>
          <select id="massa_modelar" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="manuseio_tesouras" class="form-label">Experimentar o manuseio de tesouras:</label>
          <select id="manuseio_tesouras" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="folhear_paginas" class="form-label">Folhear as páginas de um livro uma de cada vez:</label>
          <select id="folhear_paginas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-12 my-4">
          <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes"><a style="color:white" href="./novaAvaliacao7.html">Próximo</a></button>
        </div>
      </form>
    </div>
  </section>
</body>