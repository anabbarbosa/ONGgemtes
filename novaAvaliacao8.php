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
          <h2 class="textoAzulGemtes">Socialização</h2>
          <h5 class="textoAzulGemtes">Identificar e nomear:</h5>
        </div>
        <div class="col-md-6">
          <label for="cumprimentos_espontaneos" class="form-label">Iniciar cumprimentos a colegas ou adultos de forma espontânea:</label>
          <select id="cumprimentos_espontaneos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="paciencia_esperar_vez" class="form-label">Ter paciência ao esperar sua vez para se comunicar:</label>
          <select id="paciencia_esperar_vez" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="habilidade_escutar_atentamente" class="form-label">Exibir habilidade em escutar atentamente:</label>
          <select id="habilidade_escutar_atentamente" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="colaborar_execucao_tarefas" class="form-label">Tentar colaborar na execução de tarefas:</label>
          <select id="colaborar_execucao_tarefas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="solicitar_ajuda" class="form-label">Solicitar ajuda de alguma forma quando enfrenta dificuldades, como no banheiro ou ao sentir sede:</label>
          <select id="solicitar_ajuda" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="entender_regras_jogos" class="form-label">Entender as regras de jogos simples:</label>
          <select id="entender_regras_jogos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="atividades_independentes_10_minutos" class="form-label">Executar atividades de forma independente por mais de 10 minutos:</label>
          <select id="atividades_independentes_10_minutos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="exibir_empatia" class="form-label">Exibir empatia pelos outros, reconhecendo que as pessoas têm diferentes sentimentos, necessidades e formas de pensar e agir:</label>
          <select id="exibir_empatia" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="participar_ativamente_atividades" class="form-label">Participar ativamente das atividades, interagindo de maneira positiva com os colegas da sala:</label>
          <select id="participar_ativamente_atividades" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="lidar_conflitos_interacoes" class="form-label">Lidar com conflitos em interações e brincadeiras, buscando orientação de um adulto:</label>
          <select id="lidar_conflitos_interacoes" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12">
          <label for="autoimagem_positiva_confianca" class="form-label">Apresentar uma autoimagem positiva e confiança em suas habilidades para superar dificuldades e desafios:</label>
          <select id="autoimagem_positiva_confianca" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="explorar_poderes_limites_outros" class="form-label">Tentar explorar os poderes e limites dos outros:</label>
          <select id="explorar_poderes_limites_outros" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="consciencia_certo_errado" class="form-label">Demonstrar consciência do certo e errado:</label>
          <select id="consciencia_certo_errado" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-6">
          <label for="compartilhar_objetos" class="form-label">Compartilhar objetos e brinquedos:</label>
          <select id="compartilhar_objetos" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="respeitar_pertences_alheios" class="form-label">Respeitar pertences alheios:</label>
          <select id="respeitar_pertences_alheios" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="utilizar_imaginacao" class="form-label">Utilizar a imaginação e a função simbólica em suas brincadeiras:</label>
          <select id="utilizar_imaginacao" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="ter_amigo_imaginario" class="form-label">Ter um amigo imaginário:</label>
          <select id="ter_amigo_imaginario" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="diferenciar_fantasia_realidade" class="form-label">Demonstrar compreensão das diferenças entre fantasia e realidade:</label>
          <select id="diferenciar_fantasia_realidade" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="meios_transporte" class="form-label">Identificar os principais meios de transporte e suas funções:</label>
          <select id="meios_transporte" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-12">
          <label for="reconhecer_verbalizar_nome" class="form-label">Reconhecer e sabe verbalizar seu próprio nome, idade e sexo:</label>
          <select id="reconhecer_verbalizar_nome" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12 textoAzulGemtes">
          <h5>Praticar automaticamente hábitos de cortesia, como:</h5>
        </div>
        <div class="col-md-6">
          <label for="desculpar_se" class="form-label">Desculpar-se:</label>
          <select id="desculpar_se" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="diz_obrigado" class="form-label">Diz obrigado:</label>
          <select id="diz_obrigado" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="diz_por_favor" class="form-label">Diz por favor:</label>
          <select id="diz_por_favor" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="pedir_licenca" class="form-label">Pedir licença:</label>
          <select id="pedir_licenca" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12 textoAzulGemtes">
          <h5>Demonstrar compreensão de diferentes emoções, no outro como:</h5>
        </div>
        <div class="col-md-6">
          <label for="tristeza" class="form-label">Tristeza:</label>
          <select id="tristeza" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="raiva" class="form-label">Raiva:</label>
          <select id="raiva" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="alegria" class="form-label">Alegria:</label>
          <select id="alegria" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12 textoAzulGemtes">
          <h5>Reconhecer e verbalizar nomes de:</h5>
        </div>
        <div class="col-md-6">
          <label for="terapeutas" class="form-label">Terapeutas:</label>
          <select id="terapeutas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="colegas" class="form-label">Colegas:</label>
          <select id="colegas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="professores" class="form-label">Professores:</label>
          <select id="professores" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="familiares" class="form-label">Familiares:</label>
          <select id="familiares" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="col-md-12 textoAzulGemtes">
          <h5>Reconhecer as principais datas comemorativas como:</h5>
        </div>
        <div class="col-md-6">
          <label for="dia_criancas" class="form-label">Dia das crianças:</label>
          <select id="dia_criancas" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="dia_maes" class="form-label">Dia das Mães:</label>
          <select id="dia_maes" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="dia_pais" class="form-label">Dia dos pais:</label>
          <select id="dia_pais" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="festa_junina" class="form-label">Festa Junina:</label>
          <select id="festa_junina" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="natal" class="form-label">Natal:</label>
          <select id="natal" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="pascoa" class="form-label">Páscoa:</label>
          <select id="pascoa" class="form-select">
            <option selected>Escolha</option>
            <option>Plenamente Satisfatória</option>
            <option>Intervenções Pedagógicas</option>
            <option>Necessitará de Intervenções</option>
          </select>
        </div>

        <div class="form-floating col-12">
          <textarea class="form-control px-2" placeholder="Diagnóstico" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2"> Observações</label>
        </div>

        <div class="col-12 my-3">
          <button type="submit" class="btn btn-primary azulGemtes bordaAzulGemtes"><a style="color:white" href="./avaliacao.html">Finalizar Avaliação</a></button>
        </div>
      </form>
    </div>
  </section>