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
          <h2 class="textoAzulGemtes">Matemática</h2>
          <h5 class="textoAzulGemtes">A criança foi capaz de:</h5>
        </div>


        <div class="col-md-6">
          <label for="inputState" class="form-label">Manusear conjuntos e posicionar objetos de maneira adequada neles.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Reconhecer antecessores e sucessores (vizinhos) dos números até 10.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="inputState" class="form-label">Estabelecer correspondências entre elementos de conjuntos diferentes.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Relacionar números às suas quantidades correspondentes.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-3">
          <label for="inputState" class="form-label">Recitar os números até 20.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Reconhecer a grafia dos números até 10.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-5">
          <label for="inputState" class="form-label">Treinar a grafia dos números até 9.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="inputState" class="form-label">Selecionar o número específico de objetos quando solicitado (até 4)</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Realizar sequências lógicas simples (máximo de 3 unidades).</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label">Realizar a classificação de objetos e figuras com base em semelhanças e diferenças.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label">Compreender que a ausência de elementos em um conjunto representa zero.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label">Contar objetos individualmente até 9, estabelecendo uma correspondência biunívoca.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
      </form>
    </section>

    <section class="capacidade">
      <form class="row g-3">
        <div class="col-12 py-4">
          <h3 class="textoAzulGemtes">Desenvolver conceitos fundamentais de matemática nas seguintes áreas.</h3>
        </div>
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Quantidade:</h5>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Mais</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Menos</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Muito</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Pouco</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Medida:</h5>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Pequeno</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Grande</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="inputState" class="form-label">Maior</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="inputState" class="form-label">Menor</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="inputState" class="form-label">Grosso</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="inputState" class="form-label">Fino</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Distância:</h5>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Longe</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Perto</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Volume:</h5>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Cheio</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Vazio</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Inteiro</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Metade</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Massa:</h5>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Leve</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Pesado</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Identificar e nomear algumas formas geométricas, tais como:</h5>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Círculo</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Triângulo</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Quadrado</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Retângulo</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Demonstrar habilidade em resolver oralmente situações-problema, envolvendo a contagem.</h5>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Dar</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Dividir</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Receber</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Juntar</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="inputState" class="form-label">Nomear até 8 cores, incluindo
            primárias e secundárias.</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-12 my-4">
          <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes"><a style="color:white" href="./novaAvaliacao5.html">Próximo</a></button>
        </div>
      </form>
    </section>

  </div>

</body>