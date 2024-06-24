<?php
  include("protect.php");
  protect();
  include("conexao.php");

//para pegar os dados de duas tabela N para N fazemos um join, 
//relacionando os ids com a tabela intermediaria acompanha

$id_assistido = isset($_GET['id']) ? intval($_GET['id']) : 0; //pega o id referente ao assistido selecionado para editar
  
if ($id_assistido <= 0) 
{
  echo "ID inválido!"; 
  exit;
}

$consulta = "SELECT a.*, r.*
FROM assistido a
JOIN acompanha ac ON a.id_assistido = ac.id_assistido  
JOIN responsavel r ON ac.CPF = r.CPF                  
WHERE a.id_assistido = $id_assistido;   
";

$stmt = $mysqli->prepare($consulta);

if ($stmt === false) 
  die("Erro na preparação: " . $mysqli->error);

$stmt->execute();
$result = $stmt->get_result(); 

if ($result->num_rows > 0)
  $linha = $result->fetch_assoc();
else
{
  echo "Nenhum resultado encontrado.";
  exit;
}



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $CPF = mysqli_real_escape_string($mysqli, $_POST['CPF']);

  if(isset($_POST['update']))
  {
    $Nome_Completo = mysqli_real_escape_string($mysqli, $_POST['Nome_Completo']);
    $Data_Nascimento = mysqli_real_escape_string($mysqli, $_POST['Data_Nascimento']);
    $Idade_Cog = mysqli_real_escape_string($mysqli, $_POST['Idade_Cog']);
    $Encaminhamento = mysqli_real_escape_string($mysqli, $_POST['Encaminhamento']);
    $Nome_Responsavel = mysqli_real_escape_string($mysqli, $_POST['Nome_Responsavel']);
    $Telefone = mysqli_real_escape_string($mysqli, $_POST['Telefone']);
    $Grau_Parentesco = mysqli_real_escape_string($mysqli, $_POST['Grau_Parentesco']);
  
    //Para realizar duas inserções de uma vez, criamos uma transaction
    $mysqli->begin_transaction();
  
    try 
    {
      //armazenamos a primeira variável de transaction aqui
      $stmt1 = $mysqli->prepare("UPDATE assistido SET Nome_Completo=?, Idade_Cog=?, Data_Nascimento=?, Encaminhamento=? 
        WHERE id_assistido=?");
      $stmt1->bind_param("sissi", $Nome_Completo, $Idade_Cog, $Data_Nascimento, $Encaminhamento, $id_assistido);
      $stmt1->execute();
  
      //aqui a segunda
      $stmt2 = $mysqli->prepare("UPDATE responsavel SET Nome_Responsavel=?, Telefone=?, Grau_Parentesco=?, CPF=? 
        WHERE CPF=?");
      $stmt2->bind_param("sssss", $Nome_Responsavel, $Telefone, $Grau_Parentesco, $CPF, $CPF);
      $stmt2->execute();
      
      //aqui a terceira 
      $stmt3 = $mysqli->prepare("UPDATE acompanha SET CPF=?, id_assistido=? WHERE CPF=? && id_assistido=?");
      $stmt3->bind_param("sisi", $CPF, $id_assistido, $CPF, $id_assistido);
      $stmt3->execute();
  
      //commita
      if ($mysqli->commit()) 
        echo "Dados atualizados com sucesso!";
      else
        echo "Erro ao atualizar o registro: " . mysqli_error($conexao);
  
    } 
    catch (Exception $e) 
    {
      //caso de errado, realizamos um rollback para não inserir coisas pela metade
      $mysqli->rollback();
      echo "Erro ao atualizar dados: " . $e->getMessage();
    }
  }
  else if (isset($_POST['delete']))
  {

    $mysqli->begin_transaction();

    $delete_sql1 = "DELETE FROM acompanha WHERE id_assistido = $id_assistido";
    $delete_sql2 = "DELETE FROM assistido WHERE id_assistido = $id_assistido";
    $delete_sql3 = "DELETE FROM responsavel WHERE CPF = $CPF";

    try 
    {
      //armazenamos a primeira variável de transaction aqui
      $stmt1 = $mysqli->prepare($delete_sql1);
      $stmt1->execute();
  
      //aqui a segunda
      $stmt2 = $mysqli->prepare($delete_sql2);
      $stmt2->execute();
      
      //aqui a terceira 
      $stmt3 = $mysqli->prepare($delete_sql3);
      $stmt3->execute();
  
      //commita
      if ($mysqli->commit()) 
      echo "Registro removido com sucesso!"; 
      else
        echo "Erro ao atualizar o registro: " . mysqli_error($conexao);
  
    } 
    catch (Exception $e) 
    {
      //caso de errado, realizamos um rollback para não inserir coisas pela metade
      $mysqli->rollback();
      echo "Erro ao atualizar dados: " . $e->getMessage();
    }  
  }

  header("Location: assistidos.php"); 
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Página no assistido</title>
</head>
<body class="FundoCinza">
  <header class="py-3 mb-3 border-bottom headerTelaInicial">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr">
      <div class="dropdown">
        <a href="./telaInicial.php" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="bi me-2" height="32" src="./Imagens/logoGemtes.png" />
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="./telaInicial.php">Home</a></li>
          <li><a class="dropdown-item" href="./assistidos.php">Assistidos</a></li>
          <li><a class="dropdown-item" href="./cadastrarAssistido.php">Cadastrar Assistido</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li>
            <a class="dropdown-item" href="./avaliacao.php">Avaliação</a>
          </li>
          <li>
            <a class="dropdown-item" href="./consultas.php">Consultas</a>
          </li>
        </ul>
      </div>

      <div class="d-flex align-items-center">
        <form class="w-100 me-3" role="search">
          <input type="search" class="form-control bordaAzulGemtes" placeholder="Procurar assistido..." aria-label="Search" />
        </form>

        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" alt="mdo" width="25" height="25" class="rounded-circle" fill="#10A1DF" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
            </svg>
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li>
              <a class="dropdown-item" href="./perfilUsuario.html">Sobre</a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="./sair.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <form id="assistido-form" method="POST" action="">
      <input type="hidden" name="id" value="<?php echo $linha["id_assistido"]; ?>">
      <fieldset>
        <h3>Informações do Assistido</h3>
        <div class="row g-3">
          <div class="mb-3 col-md-6">
            <label for="nome_completo" class="form-label">Nome Completo</label>
            <input type="text" id="nome_completo" name="Nome_Completo" class="form-control" placeholder="Exemplo do nome completo" value="<?php echo htmlspecialchars($linha["Nome_Completo"]); ?>" required>
          </div>
          <div class="mb-3 col-md-6">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" id="data_nascimento" class="form-control" placeholder="Data de Nascimento" name="Data_Nascimento" value="<?php echo htmlspecialchars($linha["Data_Nascimento"]); ?>" required>
          </div>
        </div>

        <div class="row g-3">
          <div class="mb-3 col-md-6">
            <label for="idade_cog" class="form-label">Idade Cognitiva</label>
            <input type="number" id="idade_cog" class="form-control" placeholder="Idade Cognitiva" name="Idade_Cog" value="<?php echo ($linha["Idade_Cog"] != 0) ? htmlspecialchars($linha["Idade_Cog"]) : ""; ?>">
          </div>
          <div class="mb-3 col-md-6">
            <label for="encaminhamento" class="form-label">Encaminhamento</label>
            <input type="text" id="encaminhamento" class="form-control" placeholder="Encaminhamento" name="Encaminhamento" value="<?php echo ($linha["Encaminhamento"] != 0) ? htmlspecialchars($linha["Encaminhamento"]) : ""; ?>">
          </div>
        </div>

        <h3>Informações do Responsável</h3>
        <div class="row g-3">
          <div class="mb-3 col-md-6">
            <label for="nome_responsavel" class="form-label">Nome Completo</label>
            <input type="text" id="nome_responsavel" class="form-control" placeholder="Exemplo do nome completo" name="Nome_Responsavel" value="<?php echo htmlspecialchars($linha["Nome_Responsavel"]); ?>" required>
          </div>
          <div class="mb-3 col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="number" id="telefone" class="form-control" placeholder="Telefone" name="Telefone" value="<?php echo ($linha["Telefone"] != NULL) ? htmlspecialchars($linha["Telefone"]) : ""; ?>">
          </div>
        </div>
        <div class="row g-3">
          <div class="mb-3 col-md-6">
            <label for="grau_parentesco" class="form-label">Grau de Parentesco</label>
            <input type="text" id="grau_parentesco" class="form-control" placeholder="Parentesco" name="Grau_Parentesco" value="<?php echo ($linha["Grau_Parentesco"] != NULL) ? htmlspecialchars($linha["Grau_Parentesco"]) : ""; ?>">
          </div>
          <div class="mb-3 col-md-6">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" id="cpf" class="form-control" placeholder="CPF" name="CPF" value="<?php echo htmlspecialchars($linha["CPF"]); ?>" required>
          </div>
        </div>
        <button type="submit" name="update" class="btn btn-primary azulGemtes bordaAzulGemtes">Editar Cadastro</button>
        <button type="button" id="delete-button" class="btn btn-danger">Remover</button>
        <div class="col-3">
          <button type="button" class="botaoAssistido btn btn-outline-primary textoazulGemtes bordaAzulGemtes">
            <a class="botaoAssistido textoAzulGemtes" href="./assistidos.php">Voltar para Assistidos</a>
          </button>
        </div>
      </fieldset>
    </form>
  </div>

  <script>
    document.getElementById('delete-button').addEventListener('click', function() {
      if (confirm('Tem certeza de que deseja remover este registro?')) {
        const form = document.getElementById('assistido-form');
        const deleteInput = document.createElement('input');
        deleteInput.type = 'hidden';
        deleteInput.name = 'delete';
        deleteInput.value = '1';
        form.appendChild(deleteInput);
        form.submit();
      }
    });
  </script>
</body>
</html>
<?php
  $mysqli->close();
?>