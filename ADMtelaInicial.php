<?php
  include("protect.php");
  protect();
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
  <title>Pagina inicial</title>
</head>

<body class="FundoCinza">

<?php 
  // if(count($erro) > 0){
  //   foreach($erro as $msg){
  //     echo '<div class="alert alert-light position-absolute bottom-0 start-50 translate-middle-x" role="alert">' . $msg . "</div>";
  //   }
  // }
?>
  
<header class="py-3 mb-3 border-bottom headerTelaInicial">
  <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr">
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img class="bi me-2" height="32" src="./Imagens/logoGemtes.png">
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="./ADMtelaInicial.php">Home</a></li>
        <li><a class="dropdown-item" href="./ADMsenhas.php">Recuperar Senha</a></li>
        <li><a class="dropdown-item" href="./addUsers.php">Cadastrar Usuário</a></li>
        <li><a class="dropdown-item" href="./deleteUsers.php">Excluir Usuário</a></li>

    <div class="d-flex align-items-center">
      <form class="w-100 me-3" role="search">
        <input type="search" class="form-control bordaAzulGemtes" placeholder="Procurar usuário..." aria-label="Search">
      </form>

      <div class="flex-shrink-0 dropdown">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" alt="mdo" width="25" height="25" class="rounded-circle bi bi-person" fill="#10A1DF" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
          </svg>
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="./sair.php">Sair</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

<div class="container my-5">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Bem-vindo de volta!</h1>
      <p class="lead">Algum texto muito massa vai ser colocado aqui depois</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold azulGemtes bordaAzulGemtes">
          <a class="link-body-emphasis text-decoration-none" href="./addUsers.php">Adicionar Usuário</a>
        </button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4"> <a href="./ADMsenhas.php"> Alterar Senha </a>
          </button>
      </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 mx-0 overflow-hidden imagemTelaInicial">
      <img class="rounded-lg-3 imagemTelaInicial" src="./Imagens/bloquinhos.png" alt="Desenho pessoas montando blocos" height="420">
    </div>
  </div>
</div>

</body>
</html>