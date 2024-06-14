
  <?php
  include("protect.php");
  protect();

if (session_destroy()){
    echo "<script>location.href = 'telaInicial.php';</script>";
} else{
    echo "<script>location.href = 'index.php';</script>";
}
?>



