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
          <h2 class="textoAzulGemtes">Ciências</h2>
          <h5 class="textoAzulGemtes">Identificar e nomear:</h5>
        </div>

        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Frutas:</h5>
        </div>
        <div class="col-md-6">
          <label for="frutas" class="form-label">Frutas</label>
          <select id="frutas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="legumes" class="form-label">Legumes</label>
          <select id="legumes" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <!-- Identificar e nomear -->
        <div class="col-md-6">
          <label for="verduras" class="form-label">Verduras</label>
          <select id="verduras" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Nomear animais:</h5>
        </div>
        <div class="col-md-6">
          <label for="animais_domesticos" class="form-label">Animais domésticos</label>
          <select id="animais_domesticos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="animais_selvagens" class="form-label">Animais selvagens</label>
          <select id="animais_selvagens" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="animais_aquaticos" class="form-label">Animais aquáticos</label>
          <select id="animais_aquaticos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <!-- Compreender as diferentes paisagens entre -->
        <div class="col-md-6">
          <label for="paisagem_praia" class="form-label">Praia</label>
          <select id="paisagem_praia" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="paisagem_campo" class="form-label">Campo</label>
          <select id="paisagem_campo" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="paisagem_cidade" class="form-label">Cidade</label>
          <select id="paisagem_cidade" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <!-- Reconhecer as diferentes fases da vida -->
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Reconhecer as diferentes fases da vida:</h5>
        </div>
        <div class="col-md-6">
          <label for="fase_bebe" class="form-label">Bebê</label>
          <select id="fase_bebe" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="fase_crianca" class="form-label">Criança</label>
          <select id="fase_crianca" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="fase_adolescente" class="form-label">Adolescente</label>
          <select id="fase_adolescente" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="fase_adulto" class="form-label">Adulto</label>
          <select id="fase_adulto" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="fase_idoso" class="form-label">Idoso</label>
          <select id="fase_idoso" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <!-- Demonstrar compreensão das noções de tempo/espaço -->
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Demonstrar compreensão das noções de tempo/espaço:</h5>
        </div>
        <div class="col-md-6">
          <label for="tempo_dia" class="form-label">Dia</label>
          <select id="tempo_dia" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_tarde" class="form-label">Tarde</label>
          <select id="tempo_tarde" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_noite" class="form-label">Noite</label>
          <select id="tempo_noite" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_ontem" class="form-label">Ontem</label>
          <select id="tempo_ontem" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_hoje" class="form-label">Hoje</label>
          <select id="tempo_hoje" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_manha" class="form-label">Manhã</label>
          <select id="tempo_manha" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <!-- Compreender as diferenças de velocidade -->
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Compreender as diferenças de velocidade:</h5>
        </div>
        <div class="col-md-6">
          <label for="velocidade_devagar" class="form-label">Devagar</label>
          <select id="velocidade_devagar" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="velocidade_depressa" class="form-label">Depressa</label>
          <select id="velocidade_depressa" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <!-- Demonstrar compreensão das noções de tempo/espaço -->
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Demonstrar compreensão das noções de tempo/espaço:</h5>
        </div>
        <div class="col-md-6">
          <label for="tempo_dia" class="form-label">Dia</label>
          <select id="tempo_dia" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_tarde" class="form-label">Tarde</label>
          <select id="tempo_tarde" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_noite" class="form-label">Noite</label>
          <select id="tempo_noite" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_ontem" class="form-label">Ontem</label>
          <select id="tempo_ontem" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_hoje" class="form-label">Hoje</label>
          <select id="tempo_hoje" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="tempo_manha" class="form-label">Manhã</label>
          <select id="tempo_manha" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <!-- Compreender as diferenças de velocidade -->
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Compreender as diferenças de velocidade:</h5>
        </div>
        <div class="col-md-6">
          <label for="velocidade_devagar" class="form-label">Devagar</label>
          <select id="velocidade_devagar" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="velocidade_depressa" class="form-label">Depressa</label>
          <select id="velocidade_depressa" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <!-- Discernir diferentes tipos de clima -->
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Discernir diferentes tipos de clima:</h5>
        </div>
        <div class="col-md-6">
          <label for="clima_chuvoso" class="form-label">Chuvoso</label>
          <select id="clima_chuvoso" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="clima_ensolarado" class="form-label">Ensolarado</label>
          <select id="clima_ensolarado" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="clima_nublado" class="form-label">Nublado</label>
          <select id="clima_nublado" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <!-- Observar, relatar e descrever fenômenos naturais -->
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Observar, relatar e descrever fenômenos naturais:</h5>
        </div>
        <div class="col-md-6">
          <label for="fenomeno_chuva" class="form-label">Chuva</label>
          <select id="fenomeno_chuva" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="fenomeno_sol" class="form-label">Sol</label>
          <select id="fenomeno_sol" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="fenomeno_vento" class="form-label">Vento</label>
          <select id="fenomeno_vento" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <!-- Identificar partes específicas do corpo humano -->
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Identificar partes específicas do corpo humano:</h5>
        </div>
        <div class="col-md-6">
          <label for="parte_bochechas" class="form-label">Bochechas</label>
          <select id="parte_bochechas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parte_costas" class="form-label">Costas</label>
          <select id="parte_costas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parte_cotovelos" class="form-label">Cotovelos</label>
          <select id="parte_cotovelos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parte_dedo" class="form-label">Dedo</label>
          <select id="parte_dedo" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parte_queixo" class="form-label">Queixo</label>
          <select id="parte_queixo" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parte_sobrancelhas" class="form-label">Sobrancelhas</label>
          <select id="parte_sobrancelhas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parte_testa" class="form-label">Testa</label>
          <select id="parte_testa" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parte_torax" class="form-label">Tórax</label>
          <select id="parte_torax" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parte_tornozelo" class="form-label">Tornozelo</label>
          <select id="parte_tornozelo" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="parte_unha" class="form-label">Unha</label>
          <select id="parte_unha" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <!-- Demonstrar noções básicas de hábitos de higiene -->
        <div class="col-md-12">
          <h5 class="textoAzulGemtes">Demonstrar noções básicas de hábitos de higiene:</h5>
        </div>
        <div class="col-md-6">
          <label for="higiene_lenços" class="form-label">Usar lenços</label>
          <select id="higiene_lenços" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="higiene_tossir" class="form-label">Tossir no cotovelo</label>
          <select id="higiene_tossir" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="higiene_unhas" class="form-label">Manter as unhas cortadas e limpas</label>
          <select id="higiene_unhas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="higiene_dentes" class="form-label">Escovar os dentes</label>
          <select id="higiene_dentes" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="higiene_maos" class="form-label">Lavar as mãos</label>
          <select id="higiene_maos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="higiene_cabelo" class="form-label">Tomar banho</label>
          <select id="higiene_cabelo" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-12 my-4">
          <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes"><a style="color:white" href="./novaAvaliacao6.html">Próximo</a></button>
        </div>
      </form>
    </div>
  </section>
</body>