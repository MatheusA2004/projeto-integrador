<?php session_start();
if($_SESSION['login']){
} 

include "conecta.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style3.css">
    <title>Adm page</title>
</head>
<body>

    <header class="header">
      <img src="imagens/user.png" alt="">
      <h1><?= "Bem Vindo  " .$_SESSION['login']. " <br/>"; ?></h1>

      <div>
        <a href ="logout.php"><button>Sair</button></a>
      </div>
    </header>
    
    <div class="logo">
        <img src="imagens/MM.png" alt="" class="img-logo">
    </div>

    <section class="section-box">
        <div class="box-chamados">
          <header class="header-chamados">
            <h1>Chamados</h1>
          </header>       
          <hr>        

          <div class="tudo-chamado">
                  <?php
              $sql_cham = "SELECT * FROM chamados ";
              //executar conexao e roda a query sql

              $result_cham = mysqli_query($conexao_db, $sql_cham);

              foreach ($result_cham as $row_cham) :
                  // Variavel $row recebe o conteudo do array gerado pelo banco
                  echo "<div class='chamados'>";
                  echo "<ul>";
                  echo "<li> Matrícula: " . $row_cham["funcionario"] . "</li>";
                  echo "<li> Número da máquina: " . $row_cham["maquina"] . "</li>";
                  echo "<li> Número da sala: " . $row_cham["sala"] . "</li>";
                  echo "<li> Nível de urgência: " . $row_cham["urgencia"] . "</li>";
                  echo "<li> Problema: " . $row_cham["problema"] . "</td>";
                  echo "</ul>";
                  echo "<div class='tudo-btn'>";
                  echo "<button class='atender'>Atender</button>";
                  echo '<a href="excluir_cham.php?id_chamado=' . $row_cham["id_chamado"] . '"><button class="btn-apagar">Resolvido</button></a>';
                  echo "</div>";
                  echo "</div>";
                endforeach;
                  ?>
            </div>
        </div>
    </section>

    <div class="tudo-btn-cad">
      <a href="tela_admin.php"><button class="btn-cad">Cadastrar usuário</button></a>
    </div>
    
      
    <script src="script.js"></script>

</body>
</html>